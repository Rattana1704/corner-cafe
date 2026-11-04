jQuery(document).ready(function ($) {
    // Attach click event to the dismiss button
    $(document).on('click', '.notice[data-notice="get-start"] button.notice-dismiss', function () {
        // Dismiss the notice via AJAX
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'frosty_cake_dismissed_notice',
            },
            success: function () {
                // Remove the notice on success
                $('.notice[data-notice="example"]').remove();
            }
        });
    });
});

// WordClever – AI Content Writer plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const frosty_cake_button = document.getElementById('install-activate-button');

    if (!frosty_cake_button) return;

    frosty_cake_button.addEventListener('click', function (e) {
        e.preventDefault();

        const frosty_cake_redirectUrl = frosty_cake_button.getAttribute('data-redirect');

        // Step 1: Check if plugin is already active
        const frosty_cake_checkData = new FormData();
        frosty_cake_checkData.append('action', 'check_wordclever_activation');

        fetch(installWordcleverData.ajaxurl, {
            method: 'POST',
            body: frosty_cake_checkData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success && res.data.active) {
                // Plugin is already active → just redirect
                window.location.href = frosty_cake_redirectUrl;
            } else {
                // Not active → proceed with install + activate
                frosty_cake_button.textContent = 'Installing & Activating...';

                const frosty_cake_installData = new FormData();
                frosty_cake_installData.append('action', 'install_and_activate_wordclever_plugin');
                frosty_cake_installData.append('_ajax_nonce', installWordcleverData.nonce);

                fetch(installWordcleverData.ajaxurl, {
                    method: 'POST',
                    body: frosty_cake_installData,
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        window.location.href = frosty_cake_redirectUrl;
                    } else {
                        alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                        frosty_cake_button.textContent = 'Try Again';
                    }
                })
                .catch(error => {
                    alert('Request failed: ' + error.message);
                    frosty_cake_button.textContent = 'Try Again';
                });
            }
        })
        .catch(error => {
            alert('Check request failed: ' + error.message);
        });
    });
});
