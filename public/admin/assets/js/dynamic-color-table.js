(function($) {
	"use strict";

    $(document).ready(function(){
        $(document).on('click', ".add-new-row-btn", function(){
            var markup = '<tr> <td> <div class="form-group mb-0" > <input type="text" name="product_color[]" class="form-control"> </div></td> <td> <button type="button" class="btn btn-light waves-effect waves-light delete-row-btn"><i class="fas fa-trash-alt"></i></button> </td></tr>';

            $("table.dynamic-table tbody").append(markup);
        });

        // Find and remove selected table rows
        $(document).on('click', ".delete-row-btn", function(){
            $(this).closest("tr").remove();
        });
    });

})(jQuery);
