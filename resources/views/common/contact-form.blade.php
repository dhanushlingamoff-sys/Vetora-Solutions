<form action="{{ route('contact.submit') }}" method="POST" class="Contact-Form">
    @csrf

    <div class="name-row">
        <div>
            <label>First Name</label>
            <input type="text" class="mt-1 first-name-field" name="first_name">
            <small class="error first-name-error"></small>
        </div>
        <div>
            <label>Last Name</label>
            <input type="text" class="mt-1 last-name-field" name="last_name">
            <small class="error last-name-error"></small>
        </div>
    </div>

    <div>
        <label>Phone Number</label>

        <input type="tel" class="phone-field" autocomplete="tel">
        <input type="hidden" name="full_phone">
        <small class="error phone-error"></small>
    </div>

    <div>
        <label>Email </label>
        <input type="email" class="mt-1 email-field" name="email">
        <small class="error email-error"></small>
    </div>

    <div>
        <label>Business Name</label>
        <input type="text" class="mt-1 business-field" name="business">
        <small class="error business-error"></small>
    </div>

    <div>
        <label>Message</label>
        <textarea name="message" class="mt-1 message-field"></textarea>
    </div>

    <div class="whatsapp-consent">
        <label class="checkbox-wrapper">
            <input type="checkbox" name="whatsapp_updates" value="yes">
            <span>
                I agree to receive updates and communication on WhatsApp.
            </span>
        </label>
    </div>

    <div>
        <div class="g-recaptcha" data-sitekey="6Lf5qdgsAAAAAJQU1eAAK4F0-xJ13aP2mBfREeA5"></div>
        <small class="error captcha-error"></small>
    </div>

    <div class="btn-container">
        <button type="submit">
            <span class="btn-text">Submit</span>
            <span class="btn-loader" style="display:none; align-items:center; gap:6px;">
                Sending <span class="spinner-border spinner-border-sm text-light"></span>
            </span>
        </button>
    </div>
</form>

@once
<script>
(function () {
    function initContactForm(form) {
        if (form.dataset.ajaxInit) return;
        form.dataset.ajaxInit = '1';

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            /* Defer one task so the layout's validation listener runs first —
               it populates full_phone via iti.getNumber() and checks reCAPTCHA
               before we snapshot FormData and fire the fetch. */
            setTimeout(function () {
                /* Bail if the layout listener found any validation errors. */
                var hasErrors = false;
                form.querySelectorAll('.error').forEach(function (el) {
                    if (el.textContent.trim()) hasErrors = true;
                });
                if (hasErrors) return;

                var btnText   = form.querySelector('.btn-text');
                var btnLoader = form.querySelector('.btn-loader');
                if (btnText)   btnText.style.display  = 'none';
                if (btnLoader) btnLoader.style.display = 'inline-flex';

                fetch(form.action, {
                    method:  'POST',
                    headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                    body:    new FormData(form)
                })
                .then(function (res) {
                    return res.json().then(function (data) { return { status: res.status, data: data }; });
                })
                .then(function (result) {
                    if (result.status === 200 && result.data.success) {
                        window.location.href = result.data.redirect || '/thank-you';
                        return;
                    }

                    if (btnText)   btnText.style.display  = '';
                    if (btnLoader) btnLoader.style.display = 'none';
                    if (window.grecaptcha) grecaptcha.reset();

                    var map = {
                        'first_name':           '.first-name-error',
                        'last_name':            '.last-name-error',
                        'full_phone':           '.phone-error',
                        'email':                '.email-error',
                        'business':             '.business-error',
                        'captcha':              '.captcha-error',
                        'g-recaptcha-response': '.captcha-error'
                    };

                    if (result.data && result.data.errors) {
                        Object.keys(result.data.errors).forEach(function (field) {
                            var el = form.querySelector(map[field] || '');
                            if (el) el.textContent = result.data.errors[field][0];
                        });
                    }
                })
                .catch(function () {
                    if (btnText)   btnText.style.display  = '';
                    if (btnLoader) btnLoader.style.display = 'none';
                    if (window.grecaptcha) grecaptcha.reset();
                });
            }, 0);
        });
    }

    document.querySelectorAll('.Contact-Form').forEach(initContactForm);

    /* The modal form lives below @yield('content') in the layout, so it isn't
       in the DOM yet when this script runs. Re-scan on DOMContentLoaded to
       catch it (and any other late-parsed static forms). */
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.Contact-Form').forEach(initContactForm);
    });

    new MutationObserver(function (mutations) {
        mutations.forEach(function (m) {
            m.addedNodes.forEach(function (node) {
                if (node.nodeType !== 1) return;
                if (node.matches && node.matches('.Contact-Form')) initContactForm(node);
                if (node.querySelectorAll) node.querySelectorAll('.Contact-Form').forEach(initContactForm);
            });
        });
    }).observe(document.body, { childList: true, subtree: true });
})();
</script>
@endonce
