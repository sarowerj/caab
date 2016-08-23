var total_step = $(".row.step").length;
            console.log(total_step);

            jQuery('#next_button').click(function () {
                var status = jQuery(this).attr('data-step');
                if (status < total_step) {
                    //jQuery(this).removeAttr('disabled','disabled');
                    jQuery('#step_' + status).fadeOut();
                    var status_inc = parseFloat(status) + 1
                    jQuery(this).attr('data-step', status_inc);
                    jQuery('#step_' + status_inc).fadeIn();

                    jQuery('#prev_button').removeAttr('disabled');
                    jQuery('#prev_button').attr('data-step', status);
                } else {
                    jQuery(this).attr('disabled', 'disabled');
                }
            })

            jQuery('#prev_button').click(function () {
                var status = jQuery(this).attr('data-step');
                var next_status = jQuery('#next_button').attr('data-step');
                if (status > 0) {
                    jQuery(this).removeAttr('disabled');
                    jQuery('#next_button').removeAttr('disabled');
                    var status_inc = parseFloat(status) + 1;
                    var next_status_dec = parseFloat(next_status) - 1;
                    var status_dec = parseFloat(status) - 1;
                    jQuery('#step_' + status_inc).fadeOut();
                    jQuery('#step_' + status).fadeIn();
                    jQuery(this).attr('data-step', status_dec);
                    jQuery('#next_button').attr('data-step', next_status_dec);
                } else {
                    jQuery(this).attr('disabled', 'disabled');
                }
                if (status_dec < 1) {
                    jQuery(this).attr('data-disabled');
                }
            })