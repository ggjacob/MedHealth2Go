$.extend( $.fn.dataTableExt.oStdClasses, {
    "sSortAsc": "header headerSortDown",
    "sSortDesc": "header headerSortUp",
    "sSortable": "header"
} );
$(document).ready(function() {
    $("#apptTable").dataTable( {
        "sDom": "<'row-fluid'<'span4 offset4'l><'span4'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
        "sPaginationType": "bootstrap",
        "iDisplayLength": 5,
        "aLengthMenu": [[5,10,20, -1], [5, 10, 20, "All"]],
        "oLanguage": {
            "sLengthMenu": "Display _MENU_ appointments per page",
            "sInfo": "Showing _START_ to _END_ of _TOTAL_ appointments"
        }
    });
} );