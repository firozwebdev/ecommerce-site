(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        $(document).on("click", ".profile-edit-close", function () {
            $('#profile-edit').collapse('hide');
        });

        $('.dropify').dropify();

        // $('.report-month-select').on('change', function() {
        //   alert( this.value );
        // });

    });

    jQuery(window).load(function () {
    });
})(jQuery);
