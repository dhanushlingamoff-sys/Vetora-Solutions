{{-- Vetora AI chatbot modal (shared by home + service pages) --}}
    <div class="modal fade" id="VetoraAIModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered vetora-modal-dialog">
            <div class="modal-content vetora-modal-content">

                <!-- Header -->
                <div class="vetora-modal-header">
                    <div class="vetora-header-left">
                        <div class="vetora-logo-pulse"><i class="bi bi-cpu-fill"></i></div>
                        <div>
                            <h5 class="vetora-modal-title">VETORA AI</h5>
                            <span class="vetora-status-dot"><span class="dot-pulse"></span>SYSTEM ONLINE</span>
                        </div>
                    </div>
                    <div class="vetora-header-right">
                        <div class="vetora-header-stats">
                            <span class="stat-item"><i class="bi bi-shield-check"></i> SECURE</span>
                            <span class="stat-item"><i class="bi bi-activity"></i> 99.9% UPTIME</span>
                            <span class="stat-item"><i class="bi bi-clock-history"></i> 24/7 ACTIVE</span>
                        </div>
                        <button type="button" class="vetora-close-btn" data-bs-dismiss="modal"><i
                                class="bi bi-x-lg"></i></button>
                    </div>
                </div>

                <!-- Body — 3-column grid -->
                <div class="modal-body vetora-modal-body p-0">
                    <div class="vetora-grid">

                        <!-- ===== LEFT: Identity ===== -->
                        <div class="vetora-col vetora-col-left">

                            <div class="vetora-avatar-container">
                                <div class="vetora-avatar-frame">
                                    <div class="hud-ring ring-outer"></div>
                                    <div class="hud-ring ring-mid"></div>
                                    <div class="hud-ring ring-inner"></div>
                                    <div class="hud-corner hud-tl"></div>
                                    <div class="hud-corner hud-tr"></div>
                                    <div class="hud-corner hud-bl"></div>
                                    <div class="hud-corner hud-br"></div>
                                    <div class="vetora-avatar-img">
                                        <img src="{{ asset('Assets/Images/space/AI1.svg') }}" alt="Vetora AI">
                                    </div>
                                </div>
                            </div>

                            <div class="vetora-identity">
                                <h3 class="vetora-name">Vetora AI</h3>
                                <p class="vetora-tagline">Intelligent Business Assistant</p>
                                <div class="vetora-version">v3.2.1 NEURAL</div>
                            </div>

                            <div class="vetora-mini-stats">
                                <div class="mini-stat"><span class="mini-stat-val">98%</span><span
                                        class="mini-stat-label">Accuracy</span></div>
                                <div class="mini-stat"><span class="mini-stat-val">0.3s</span><span
                                        class="mini-stat-label">Response</span></div>
                                <div class="mini-stat"><span class="mini-stat-val">24/7</span><span
                                        class="mini-stat-label">Online</span></div>
                            </div>

                            <div class="vetora-capabilities">
                                <div class="cap-item"><i class="bi bi-check2-circle"></i> Natural Language Processing
                                </div>
                                <div class="cap-item"><i class="bi bi-check2-circle"></i> Voice Interaction</div>
                                <div class="cap-item"><i class="bi bi-check2-circle"></i> Multilingual Support</div>
                                <div class="cap-item"><i class="bi bi-check2-circle"></i> Business Automation</div>
                            </div>

                            <div class="vetora-hint-box">
                                <i class="bi bi-info-circle"></i>
                                <p>I'm here to help. Ask me anything about Vetora's services, products, or technology.</p>
                            </div>

                        </div>

                        <!-- ===== CENTER: Chat ===== -->
                        <div class="vetora-col vetora-col-center">

                            <div class="vetora-chat-header">
                                <div class="chat-header-info">
                                    <span class="chat-mode-badge"><i class="bi bi-robot"></i> AI MODE</span>
                                    <span class="chat-session">Session #VTR-2026</span>
                                </div>
                                <button class="chat-clear-btn" id="clearChatBtn" title="Clear Chat"><i
                                        class="bi bi-trash3"></i></button>
                            </div>

                            <!-- Chat Log -->
                            <div class="vetora-chat-log" id="vetoraChatLog">

                                <div class="chat-msg bot-msg">
                                    <div class="msg-avatar"><i class="bi bi-cpu-fill"></i></div>
                                    <div class="msg-body">
                                        <div class="msg-meta"><span class="msg-name">Vetora AI</span><span
                                                class="msg-time">Just now</span></div>
                                        <div class="msg-bubble">Hello! I'm Vetora AI, your intelligent business assistant.
                                            How can I help you today?</div>
                                    </div>
                                </div>

                                <div class="chat-msg bot-msg">
                                    <div class="msg-avatar"><i class="bi bi-cpu-fill"></i></div>
                                    <div class="msg-body">
                                        <div class="msg-meta"><span class="msg-name">Vetora AI</span><span
                                                class="msg-time">10:42 AM</span></div>
                                        <div class="msg-bubble">Here's a quick overview of our core capabilities:</div>
                                        <div class="vetora-info-card">
                                            <div class="info-card-header"><i class="bi bi-grid-3x3-gap-fill"></i> Core
                                                Services</div>
                                            <div class="info-card-grid">
                                                <div class="info-card-item"><i class="bi bi-code-slash"></i><span>Dev
                                                        Solutions</span></div>
                                                <div class="info-card-item"><i class="bi bi-robot"></i><span>AI
                                                        Systems</span></div>
                                                <div class="info-card-item"><i class="bi bi-phone"></i><span>Mobile
                                                        Apps</span></div>
                                                <div class="info-card-item"><i
                                                        class="bi bi-cloud-arrow-up"></i><span>Cloud Infra</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="chat-msg user-msg">
                                    <div class="msg-body">
                                        <div class="msg-meta"><span class="msg-name">You</span><span
                                                class="msg-time">10:43 AM</span></div>
                                        <div class="msg-bubble">Tell me more about your AI solutions and how they can help
                                            my business grow.</div>
                                    </div>
                                    <div class="msg-avatar user-avatar"><i class="bi bi-person-fill"></i></div>
                                </div>

                                <div class="chat-msg bot-msg">
                                    <div class="msg-avatar"><i class="bi bi-cpu-fill"></i></div>
                                    <div class="msg-body">
                                        <div class="msg-meta"><span class="msg-name">Vetora AI</span><span
                                                class="msg-time">10:43 AM</span></div>
                                        <div class="msg-bubble">Our AI solutions are designed to scale with your business:
                                        </div>
                                        <blockquote class="vetora-blockquote">
                                            <i class="bi bi-quote"></i>
                                            "Vetora's AI-powered systems can automate up to 70% of repetitive tasks, freeing
                                            your team to focus on strategic growth initiatives."
                                        </blockquote>
                                        <div class="msg-bubble">We offer custom NLP models, predictive analytics
                                            dashboards, and intelligent workflow automation tailored for Australian
                                            businesses.</div>
                                    </div>
                                </div>

                            </div>

                            <!-- Typing indicator -->
                            <div class="vetora-typing" id="vetoraTyping" style="display:none;">
                                <div class="msg-avatar"><i class="bi bi-cpu-fill"></i></div>
                                <div class="typing-dots"><span></span><span></span><span></span></div>
                            </div>

                            <!-- Input Panel -->
                            <div class="vetora-input-panel">
                                <div class="vetora-input-bar">
                                    <button class="input-action-btn" id="translateToggleBtn"
                                        title="Toggle Translation"><i class="bi bi-translate"></i></button>
                                    <input type="text" class="vetora-input" id="vetoraInput"
                                        placeholder="Ask Vetora AI anything..." autocomplete="off">
                                    <button class="input-action-btn" id="inputMicBtn" title="Voice Input"><i
                                            class="bi bi-mic"></i></button>
                                    <button class="vetora-send-btn" id="vetoraSubmit" title="Send"><i
                                            class="bi bi-send-fill"></i></button>
                                </div>
                                <!-- Bottom Dock -->
                                <div class="vetora-dock">
                                    <button class="dock-pill dock-pill-left" id="voiceInputBtn"><i
                                            class="bi bi-mic-fill"></i> Voice Input</button>
                                    <button class="dock-mic-orb" id="dockMicOrb">
                                        <div class="orb-rings">
                                            <div class="orb-ring orb-r1"></div>
                                            <div class="orb-ring orb-r2"></div>
                                        </div>
                                        <i class="bi bi-mic-fill"></i>
                                    </button>
                                    <button class="dock-pill dock-pill-right" id="voiceModeBtn"><i
                                            class="bi bi-volume-up-fill"></i> Speak / Voice</button>
                                </div>
                            </div>

                        </div>

                        <!-- ===== RIGHT: Controls ===== -->
                        <div class="vetora-col vetora-col-right">

                            <!-- Language -->
                            <div class="vetora-panel lang-panel">
                                <div class="panel-label"><i class="bi bi-globe2"></i> Language</div>
                                <select class="vetora-lang-select" id="vetoraLangSelect">
                                    <option value="en-AU">English (AU)</option>
                                    <option value="en-US">English (US)</option>
                                    <option value="hi-IN">हिंदी (Hindi)</option>
                                    <option value="es-ES">Español</option>
                                    <option value="fr-FR">Français</option>
                                    <option value="zh-CN">中文 (Chinese)</option>
                                    <option value="ar-SA">العربية (Arabic)</option>
                                    <option value="pt-BR">Português</option>
                                </select>
                                <div class="lang-status"><span class="lang-dot"></span><span id="langStatusText">English
                                        Active</span></div>
                            </div>

                            <!-- Voice Output / Waveform -->
                            <div class="vetora-panel wave-panel">
                                <div class="panel-label"><i class="bi bi-soundwave"></i> Voice Output</div>
                                <div class="vetora-waveform" id="vetoraWaveform">
                                    <div class="wave-bar" style="--i:1"></div>
                                    <div class="wave-bar" style="--i:2"></div>
                                    <div class="wave-bar" style="--i:3"></div>
                                    <div class="wave-bar" style="--i:4"></div>
                                    <div class="wave-bar" style="--i:5"></div>
                                    <div class="wave-bar" style="--i:6"></div>
                                    <div class="wave-bar" style="--i:7"></div>
                                    <div class="wave-bar" style="--i:8"></div>
                                    <div class="wave-bar" style="--i:9"></div>
                                    <div class="wave-bar" style="--i:10"></div>
                                    <div class="wave-bar" style="--i:11"></div>
                                    <div class="wave-bar" style="--i:12"></div>
                                    <div class="wave-bar" style="--i:13"></div>
                                    <div class="wave-bar" style="--i:14"></div>
                                    <div class="wave-bar" style="--i:15"></div>
                                </div>
                                <div class="speaking-overlay" id="speakingOverlay"><i class="bi bi-volume-up-fill"></i>
                                    VETORA SPEAKING...</div>
                            </div>

                            <!-- Voice Input / Radar -->
                            <div class="vetora-panel radar-panel">
                                <div class="panel-label"><i class="bi bi-broadcast"></i> Voice Input</div>
                                <div class="vetora-radar" id="vetoraRadar">
                                    <div class="radar-ring r1"></div>
                                    <div class="radar-ring r2"></div>
                                    <div class="radar-ring r3"></div>
                                    <div class="radar-ring r4"></div>
                                    <div class="radar-sweep"></div>
                                    <div class="radar-mic"><i class="bi bi-mic-fill"></i></div>
                                </div>
                                <div class="listening-status">
                                    <span class="listening-dot" id="listeningDot"></span>
                                    <span id="listeningText">STANDBY</span>
                                </div>
                            </div>

                            <!-- Quick Prompts -->
                            <div class="vetora-panel actions-panel">
                                <div class="panel-label"><i class="bi bi-lightning-charge-fill"></i> Quick Prompts</div>
                                <div class="quick-actions">
                                    <button class="quick-btn" data-prompt="What services does Vetora offer?">Our
                                        Services</button>
                                    <button class="quick-btn" data-prompt="How can I get a quote from Vetora?">Get a
                                        Quote</button>
                                    <button class="quick-btn" data-prompt="Tell me about your AI solutions">AI
                                        Solutions</button>
                                    <button class="quick-btn" data-prompt="How do I contact Vetora?">Contact Us</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END VETORA AI MODAL -->
