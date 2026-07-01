        /* =============================================
                   VETORA AI CHATBOT — Web Speech API + Chat
                ============================================= */
        (function() {
            'use strict';

            // ---- State ----
            let isListening = false;
            let isSpeaking = false;
            let recognition = null;
            let voiceOut = false;
            let currentLang = 'en-AU';

            // ---- Elements ----
            const chatLog = document.getElementById('vetoraChatLog');
            const vetoraInput = document.getElementById('vetoraInput');
            const vetoraSubmit = document.getElementById('vetoraSubmit');
            const vetoraTyping = document.getElementById('vetoraTyping');
            const voiceInputBtn = document.getElementById('voiceInputBtn');
            const dockMicOrb = document.getElementById('dockMicOrb');
            const voiceModeBtn = document.getElementById('voiceModeBtn');
            const inputMicBtn = document.getElementById('inputMicBtn');
            const translateToggle = document.getElementById('translateToggleBtn');
            const clearChatBtn = document.getElementById('clearChatBtn');
            const langSelect = document.getElementById('vetoraLangSelect');
            const langStatusText = document.getElementById('langStatusText');
            const vetoraWaveform = document.getElementById('vetoraWaveform');
            const speakingOverlay = document.getElementById('speakingOverlay');
            const vetoraRadar = document.getElementById('vetoraRadar');
            const listeningDot = document.getElementById('listeningDot');
            const listeningText = document.getElementById('listeningText');

            if (!chatLog) return; // modal not present

            // ---- AI Response Bank ----
            const bank = {
                services: "Vetora offers: ✦ Custom Software Development  ✦ AI & Machine Learning Solutions  ✦ Web & Mobile App Development  ✦ Cloud & Scalable Infrastructure. Which area would you like to explore?",
                quote: "Getting a quote is simple! Click 'Get a Quote' on the homepage or let me know your project type and I'll guide you to the right team at Vetora.",
                ai: "Our AI solutions include Natural Language Processing, Computer Vision, Predictive Analytics, and Intelligent Workflow Automation — all trained on your specific industry data.",
                contact: "Reach Vetora at: 📧 info@vetora.com.au | 📍 Melbourne, VIC, Australia. Our team typically responds within 2 business hours.",
                default: [
                    "Great question! Vetora specialises in custom AI solutions, mobile apps, and cloud infrastructure designed for Australian businesses.",
                    "Our team can help you design, develop, and deploy intelligent digital systems tailored to your business goals. Shall I connect you with a consultant?",
                    "Vetora's AI platform offers real-time analytics, predictive modelling, and intelligent automation. Would you like to schedule a consultation?",
                    "We've delivered solutions across healthcare, finance, and e-commerce verticals. How can I assist you further?",
                ]
            };

            function getReply(msg) {
                const m = msg.toLowerCase();
                if (/service|offer|provid/.test(m)) return bank.services;
                if (/quote|price|cost|budget|how much/.test(m)) return bank.quote;
                if (/ai|artificial|machine learn|automat/.test(m)) return bank.ai;
                if (/contact|reach|email|phone|location/.test(m)) return bank.contact;
                return bank.default[Math.floor(Math.random() * bank.default.length)];
            }

            // ---- Helpers ----
            function ts() {
                return new Date().toLocaleTimeString('en-AU', {
                    hour: '2-digit',
                    minute: '2-digit'
                });
            }

            function esc(t) {
                const d = document.createElement('div');
                d.appendChild(document.createTextNode(t));
                return d.innerHTML;
            }

            function appendMsg(role, text) {
                const isUser = role === 'user';
                const div = document.createElement('div');
                div.className = 'chat-msg ' + (isUser ? 'user-msg' : 'bot-msg');
                div.innerHTML =
                    (!isUser ? `<div class="msg-avatar"><i class="bi bi-cpu-fill"></i></div>` : '') +
                    `<div class="msg-body">
                    <div class="msg-meta">
                        <span class="msg-name">${isUser ? 'You' : 'Vetora AI'}</span>
                        <span class="msg-time">${ts()}</span>
                    </div>
                    <div class="msg-bubble">${esc(text)}</div>
                </div>` +
                    (isUser ? `<div class="msg-avatar user-avatar"><i class="bi bi-person-fill"></i></div>` : '');
                chatLog.appendChild(div);
                chatLog.scrollTop = chatLog.scrollHeight;
            }

            function showTyping(on) {
                vetoraTyping.style.display = on ? 'flex' : 'none';
                if (on) chatLog.scrollTop = chatLog.scrollHeight;
            }

            function send(text) {
                if (!text.trim()) return;
                appendMsg('user', text);
                vetoraInput.value = '';
                showTyping(true);
                const delay = 900 + Math.random() * 700;
                setTimeout(function() {
                    showTyping(false);
                    const reply = getReply(text);
                    appendMsg('bot', reply);
                    if (voiceOut) speakText(reply);
                }, delay);
            }

            // ---- Listening State ----
            function setListening(on) {
                isListening = on;
                dockMicOrb.classList.toggle('listening', on);
                voiceInputBtn.classList.toggle('active', on);
                inputMicBtn.classList.toggle('active', on);
                vetoraRadar.classList.toggle('listening', on);
                listeningDot.classList.toggle('active', on);
                listeningText.textContent = on ? 'LISTENING...' : 'STANDBY';
            }

            // ---- Speech Recognition ----
            function initRecognition() {
                var SR = window.SpeechRecognition || window.webkitSpeechRecognition;
                if (!SR) return null;
                var rec = new SR();
                rec.continuous = false;
                rec.interimResults = true;
                rec.lang = currentLang;

                rec.onstart = function() {
                    setListening(true);
                };

                rec.onresult = function(e) {
                    var transcript = Array.from(e.results).map(function(r) {
                        return r[0].transcript;
                    }).join('');
                    vetoraInput.value = transcript;
                    if (e.results[e.results.length - 1].isFinal) {
                        setListening(false);
                        send(transcript);
                    }
                };

                rec.onerror = function() {
                    setListening(false);
                };
                rec.onend = function() {
                    setListening(false);
                };
                return rec;
            }

            function toggleListen() {
                if (!recognition) recognition = initRecognition();
                if (!recognition) {
                    appendMsg('bot', 'Speech recognition is not supported in this browser. Please use Chrome or Edge.');
                    return;
                }
                if (isListening) {
                    recognition.stop();
                } else {
                    try {
                        recognition.lang = currentLang;
                        recognition.start();
                    } catch (e) {}
                }
            }

            // ---- Speech Synthesis ----
            function speakText(text) {
                if (!window.speechSynthesis) return;
                window.speechSynthesis.cancel();
                var utt = new SpeechSynthesisUtterance(text);
                utt.lang = currentLang;
                utt.rate = 0.95;
                utt.pitch = 1.0;
                utt.onstart = function() {
                    isSpeaking = true;
                    vetoraWaveform.classList.add('speaking');
                    speakingOverlay.classList.add('active');
                };
                utt.onend = function() {
                    isSpeaking = false;
                    vetoraWaveform.classList.remove('speaking');
                    speakingOverlay.classList.remove('active');
                };
                window.speechSynthesis.speak(utt);
            }

            // ---- Events ----
            vetoraSubmit.addEventListener('click', function() {
                send(vetoraInput.value);
            });

            vetoraInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    send(vetoraInput.value);
                }
            });

            clearChatBtn.addEventListener('click', function() {
                chatLog.innerHTML = '';
                appendMsg('bot', 'Chat cleared. How can I help you?');
            });

            [dockMicOrb, voiceInputBtn, inputMicBtn].forEach(function(btn) {
                btn.addEventListener('click', toggleListen);
            });

            voiceModeBtn.addEventListener('click', function() {
                voiceOut = !voiceOut;
                voiceModeBtn.classList.toggle('active', voiceOut);
            });

            translateToggle.addEventListener('click', function() {
                var active = translateToggle.classList.toggle('active');
                translateToggle.title = active ? 'Translation ON' : 'Toggle Translation';
            });

            langSelect.addEventListener('change', function() {
                currentLang = langSelect.value;
                var names = {
                    'en-AU': 'English Active',
                    'en-US': 'English (US) Active',
                    'hi-IN': 'अनुवाद सक्षम',
                    'es-ES': 'Traducción Activa',
                    'fr-FR': 'Traduction Active',
                    'zh-CN': '翻译已激活',
                    'ar-SA': 'الترجمة نشطة',
                    'pt-BR': 'Tradução Ativa'
                };
                langStatusText.textContent = names[currentLang] || 'Active';
                if (recognition) recognition.lang = currentLang;
            });

            document.querySelectorAll('.quick-btn').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    send(btn.dataset.prompt);
                });
            });

            // Clean up on modal close
            var vetoraModal = document.getElementById('VetoraAIModal');
            if (vetoraModal) {
                vetoraModal.addEventListener('hidden.bs.modal', function() {
                    if (recognition && isListening) recognition.stop();
                    if (window.speechSynthesis) window.speechSynthesis.cancel();
                    setListening(false);
                    vetoraWaveform.classList.remove('speaking');
                    speakingOverlay.classList.remove('active');
                });
            }
        })();
