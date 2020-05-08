$(document).ready(function(){
    // Zero configuration Data Table
    let dataTable = $("#basicDataTable");
    if(dataTable){
        dataTable.DataTable();
    }

    // Feature enable / disable Data Table
    let dataTable2 = $("#dataTable2")
    $(dataTable2).DataTable({
        paging : false,
        ordering : false,
        info : false
    });

    // Default ordering (sorting) Data Table
    let defaultOrderingTable = $("#defaultOrderingDataTable")
    $(defaultOrderingTable).DataTable({
        "order": [[ 4, "desc" ]]
    });

    // Multi-column ordering Data Table
    let defaultMulOrderingDataTable = $("#defaultMulOrderingDataTable")
    $(defaultMulOrderingDataTable).DataTable({
        columnDefs: [ {
            targets: [ 0 ],
            orderData: [ 0, 1 ]
        }, {
            targets: [ 1 ],
            orderData: [ 1, 0 ]
        }, {
            targets: [ 4 ],
            orderData: [ 4, 0 ]
        } ]
    });

    // Hidden columns Data Table
    let hidenDataTable = $("#hidenDataTable")
    $(hidenDataTable).DataTable({
        responsive : true,
        "columnDefs": [
            {
                "targets": [ 3 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 4 ],
                "visible": false
            }
        ]
    });

    // Complex headers (rowspan and colspan) Data Table
    let complexDataTable = $("#complexDataTable");
    $(complexDataTable).DataTable();

    // DOM positioning Data Table
    let domPositioningDataTable = $("#domPositioningDataTable");
    $(domPositioningDataTable).DataTable({
        dom : '<"top"i>rt<"bottom"flp><"clear">'
    });

    // Alternative pagination Data Table
    let alternativePaginationDataTable = $("#alternativePaginationDataTable");
    $(alternativePaginationDataTable).DataTable({
        pagingType : "full_numbers"
    });

    // Scroll - vertical Data Table
    let scrollVerticalDataTable = $("#scrollVerticalDataTable");
    $(scrollVerticalDataTable).DataTable({
        scrollY : '200px',
        scrollCollapse : true,
        paging : false
    });

    // Scroll - vertical, dynamic height Data Table
    let dynamicScrollVerticalDataTable = $("#dynamicScrollVerticalDataTable");
    $(dynamicScrollVerticalDataTable).DataTable({
        scrollY : '50vh',
        scrollCollapse : true,
        paging : false
    });

    // Scroll - horizontal Data Table
    let scrollHorizontalDataTable = $("#scrollHorizontalDataTable");
    $(scrollHorizontalDataTable).DataTable({
        "scrollX": true
    });

    // Scroll - horizontal Data Table
    let scrollVerticalHorizontalDataTable = $("#scrollVerticalHorizontalDataTable");
    $(scrollVerticalHorizontalDataTable).DataTable({
        scrollY : '200px',
        "scrollX": true
    });

    // Language - Comma decimal place Data Table
    let languageComaDecimalDataTable = $("#languageComaDecimalDataTable");
    $(languageComaDecimalDataTable).DataTable({
        "language": {
            "decimal": ",",
            "thousands": "."
        }
    });

    // Language options Data Table
    let languageDataTable = $("#languageDataTable");
    $(languageDataTable).DataTable({
        "language": {
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
    });

    // Responsive Data Table
    let responsiveDataTable = $("#responsiveDataTable")
    $(responsiveDataTable).DataTable({
        responsive : true
    });

    // Individual column searching  Data Table

    // Setup - add a text input to each footer cell
    let columnSearchDataTable = $("#columnSearchDataTable");
    $('#columnSearchDataTable thead th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $(columnSearchDataTable).DataTable({
        ordering : false
    });
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.header() ).on( 'keyup change clear', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
})