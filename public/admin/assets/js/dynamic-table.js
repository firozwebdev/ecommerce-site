(function($) {
	"use strict";

    $(document).ready(function(){

				// Dynamic Table 1 Start
        $(document).on('click', ".add-new-row-btn-1", function(){
            var markup = '<tr> <td> <div class="form-group mb-0" > <input type="text" name="size[]" class="form-control"> </div></td> <td> <button type="button" class="btn btn-light waves-effect waves-light delete-row-btn"><i class="fas fa-trash-alt"></i></button> </td></tr>';

            $("table.dynamic-table-1 tbody").append(markup);
        });
        // Find and remove selected table rows
        $(document).on('click', "table.dynamic-table-1 .delete-row-btn", function(){
            $(this).closest("tr").remove();
        });
				// Dynamic Table 1 End

				// Dynamic Table 2 Start
        $(document).on('click', ".add-new-row-btn-2", function(){
            var markup = '<tr> <td> <div class="form-group mb-0" > <input type="text" name="color[]" class="form-control"> </div></td> <td> <button type="button" class="btn btn-light waves-effect waves-light delete-row-btn"><i class="fas fa-trash-alt"></i></button> </td></tr>';

            $("table.dynamic-table-2 tbody").append(markup);
        });
        // Find and remove selected table rows
        $(document).on('click', "table.dynamic-table-2 .delete-row-btn", function(){
            $(this).closest("tr").remove();
        });
				// Dynamic Table 2 End





    });

})(jQuery);
