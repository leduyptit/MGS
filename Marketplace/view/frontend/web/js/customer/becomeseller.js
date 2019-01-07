require(['jquery'], function($){
    $(document).ready( function() {
        $("#profileurl").on('change', function() {
            var alert_control = $("#mgs-marketplace-become-seller-box-wrapper > .mgs-marketplace-form-control-alert");
            if (!alert_control.hasClass('mgs-hidden')) {
                alert_control.addClass('mgs-hidden');
            }
            var alert_loader = $("#mgs-marketplace-become-seller-box-wrapper > .form-control-loader");
            alert_loader.removeClass('mgs-hidden');
            var content = $(this).val();
            if (content == '') {
                return;
            }
            $.ajax({
                url: '/rest/V1/mgs_marketplace/storeurl/' + content,
                type: "GET",
                dataType: 'json',
                contentType: "application/json",
                success: function(rel) {
                    alert_loader.addClass('mgs-hidden');
                    if (rel == 0) {
                        alert_control.addClass('mgs-alert-success');
                        alert_control.html('<i class="fas fa-check"></i> Congratulations! You can use this URL for your shop.');
                        alert_control.removeClass('mgs-hidden');
                    } else {
                        alert_control.addClass('mgs-alert-error');
                        alert_control.html('<i class="fas fa-times"></i> Sorry! This URL is used by another shop.');
                        alert_control.removeClass('mgs-hidden');
                    }
                }
            })
            .always(function() {
                alert_loader.addClass('mgs-hidden');
            });
        });
    });
});