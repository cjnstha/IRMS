// for printing in Edit  Detail datatable
$(document).ready(function() {

    // $('#popup_datatable').DataTable();
        $('#edit_detail_datatable').DataTable( {
        dom: 'Bfr<"table-responsive custom-table"t>ip',

          buttons: [
                {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i>',
                    titleAttr: 'Print',
                    // message: 'Project ',
                    download: 'open',
                    // title: 'Project Detail',
                    exportOptions: {
                        // columns: ':visible'
                      stripHtml: false
                    }
                },
                  {
                    extend: 'excel',
                    text: '<i class="fa fa-file-excel-o"></i>',
                    titleAttr: 'Excel',
                    // title: 'Project',
                     exportOptions: {
                        // columns: ':visible'
                      stripHtml: false
                    }
                },
                 {
                    extend: 'pdf',
                    text: '<i class="fa fa-file-pdf-o"></i>',
                    titleAttr: 'Pdf',
                    // message: 'Project ',
                     // extend: 'pdfHtml5',
                   // download: 'open',// for opening in new tab with preview and more option
                    // title: 'Project List',
                    exportOptions: {
                        // columns: ':visible'
                      stripHtml: false
                    }
                },
                 {
                    extend: 'copy',
                    text: '<i class="fa fa-files-o"></i>',
                    titleAttr: 'Copy',
                    exportOptions: {
                        // columns: ':visible'
                      stripHtml: false
                    }
                },
               
        ],
        "bFilter": false,
        "bPaginate": false,
        "bInfo": false,
     
    } );
        
      // $(".table_edit_data").hide();
      
});



$(document).ready(function() {
    if ($('#project-index').length != 0) {
        var table = $('#project-index').DataTable( {
            dom: '<"toolbar">Bfr<"table-responsive custom-table"t>ip',
            // stateSave: true,
            buttons: [
                    {
                        extend: 'print',
                        text: '<i class="fa fa-print"></i>',
                        titleAttr: 'Print',
                        // message: 'Project ',
                        download: 'open',
                        // title: 'Project List',
                        customize: function ( win ) {
                        $(win.document.body)
                            .css( 'font-size', '10pt' );
     
                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );
                    },
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    
                    {
                        extend: 'excel',
                        text: '<i class="fa fa-file-excel-o"></i>',
                        titleAttr: 'Excel',
                        // title: 'Project List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    
                    {
                        extend: 'pdf',
                        text: '<i class="fa fa-file-pdf-o"></i>',
                        titleAttr: 'Pdf',
                        // message: 'Project ',
                         // extend: 'pdfHtml5',
                       // download: 'open',// for opening in new tab with preview and more option
                        // title: 'Project List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                     {
                        extend: 'copy',
                        text: '<i class="fa fa-files-o"></i>',
                        titleAttr: 'Copy',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                     {
                        extend: 'colvis',
                        text: '<i class="fa fa-columns"></i>',
                        titleAttr: 'Column Visibility',
                        columnText: function ( dt, idx, title ) {
                            return (idx+1)+': '+title;
                        },
                        postfixButtons: [ 'colvisRestore' ]
                    },
                    // 'colvis',
            ]
        } );
        $("div.toolbar").html('Total Results: '+table.page.info().recordsTotal);
    }
} );



$(document).ready(function() {
    if ($('#comm-med-index').length != 0) {
        var table = $('#comm-med-index').DataTable( {
            dom: '<"toolbar">Bfr<"table-responsive custom-table"t>ip',
            // stateSave: true,
            buttons: [
                    {
                        extend: 'print',
                        text: '<i class="fa fa-print"></i>',
                        titleAttr: 'Print',
                        // message: 'Project ',
                        download: 'open',
                        // title: 'Project List',
                        customize: function ( win ) {
                        $(win.document.body)
                            .css( 'font-size', '10pt' );
     
                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );
                    },
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    
                    {
                        extend: 'excel',
                        text: '<i class="fa fa-file-excel-o"></i>',
                        titleAttr: 'Excel',
                        // title: 'Project List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    
                    {
                        extend: 'pdf',
                        text: '<i class="fa fa-file-pdf-o"></i>',
                        titleAttr: 'Pdf',
                        // message: 'Project ',
                         // extend: 'pdfHtml5',
                       // download: 'open',// for opening in new tab with preview and more option
                        // title: 'Project List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                     {
                        extend: 'copy',
                        text: '<i class="fa fa-files-o"></i>',
                        titleAttr: 'Copy',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                     {
                        extend: 'colvis',
                        text: '<i class="fa fa-columns"></i>',
                        titleAttr: 'Column Visibility',
                        columnText: function ( dt, idx, title ) {
                            return (idx+1)+': '+title;
                        },
                        postfixButtons: [ 'colvisRestore' ]
                    },
                    // 'colvis',
            ]
        } );
        $("div.toolbar").html('Total Results: '+table.page.info().recordsTotal);
    }
} );

$(document).ready(function() {
    if ($('.dataTableClass').length != 0) {
        var table = $('.dataTableClass').DataTable( {
            dom: '<"toolbar">Bfr<"table-responsive custom-table"t>ip',
            // stateSave: true,
            buttons: [
                    {
                        extend: 'print',
                        text: '<i class="fa fa-print"></i>',
                        titleAttr: 'Print',
                        // message: 'Project ',
                        download: 'open',
                        // title: 'Project List',
                        customize: function ( win ) {
                        $(win.document.body)
                            .css( 'font-size', '10pt' );
     
                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );
                    },
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    
                    {
                        extend: 'excel',
                        text: '<i class="fa fa-file-excel-o"></i>',
                        titleAttr: 'Excel',
                        // title: 'Project List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    
                    {
                        extend: 'pdf',
                        text: '<i class="fa fa-file-pdf-o"></i>',
                        titleAttr: 'Pdf',
                        // message: 'Project ',
                         // extend: 'pdfHtml5',
                       // download: 'open',// for opening in new tab with preview and more option
                        // title: 'Project List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                     {
                        extend: 'copy',
                        text: '<i class="fa fa-files-o"></i>',
                        titleAttr: 'Copy',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                     {
                        extend: 'colvis',
                        text: '<i class="fa fa-columns"></i>',
                        titleAttr: 'Column Visibility',
                        columnText: function ( dt, idx, title ) {
                            return (idx+1)+': '+title;
                        },
                        postfixButtons: [ 'colvisRestore' ]
                    },
                    // 'colvis',
            ]
        } );
        $("div.toolbar").html('Total Results: '+table.page.info().recordsTotal);
    }


    $('.reportDataTableClass').DataTable( {
        dom: 'Br<"table-responsive custom-table"t>',
        // stateSave: true,
        buttons: [
                {
                    extend: 'print',
                    footer: true,
                    text: '<i class="fa fa-print"></i>',
                    titleAttr: 'Print',
                    // message: 'Project ',
                    download: 'open',
                    // title: 'Project List',
                    customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                },
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                
                {
                    extend: 'excel',
                    footer: true,
                    text: '<i class="fa fa-file-excel-o"></i>',
                    titleAttr: 'Excel',
                    // title: 'Project List',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                
                {
                    extend: 'pdf',
                    footer: true,
                    text: '<i class="fa fa-file-pdf-o"></i>',
                    titleAttr: 'Pdf',
                    // message: 'Project ',
                     // extend: 'pdfHtml5',
                   // download: 'open',// for opening in new tab with preview and more option
                    // title: 'Project List',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                 {
                    extend: 'copy',
                    footer: true,
                    text: '<i class="fa fa-files-o"></i>',
                    titleAttr: 'Copy',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                 {
                    extend: 'colvis',
                    footer: true,
                    text: '<i class="fa fa-columns"></i>',
                    titleAttr: 'Column Visibility',
                    columnText: function ( dt, idx, title ) {
                        return (idx+1)+': '+title;
                    },
                    postfixButtons: [ 'colvisRestore' ]
                },
                // 'colvis',
        ]
    } );

    $('.reportDataTableClassWithPagination').DataTable( {
        dom: 'Br<"table-responsive custom-table"t>ip',
        // dom: 'Br<"table-responsive custom-table"t>ip',
        // stateSave: true,
        buttons: [
                {
                    extend: 'print',
                    footer: true,
                    text: '<i class="fa fa-print"></i>',
                    titleAttr: 'Print',
                    // message: 'Project ',
                    download: 'open',
                    // title: 'Project List',
                    customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '10pt' );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                },
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                
                {
                    extend: 'excel',
                    footer: true,
                    text: '<i class="fa fa-file-excel-o"></i>',
                    titleAttr: 'Excel',
                    // title: 'Project List',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                
                {
                    extend: 'pdf',
                    footer: true,
                    text: '<i class="fa fa-file-pdf-o"></i>',
                    titleAttr: 'Pdf',
                    // message: 'Project ',
                     // extend: 'pdfHtml5',
                   // download: 'open',// for opening in new tab with preview and more option
                    // title: 'Project List',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                 {
                    extend: 'copy',
                    footer: true,
                    text: '<i class="fa fa-files-o"></i>',
                    titleAttr: 'Copy',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                 {
                    extend: 'colvis',
                    footer: true,
                    text: '<i class="fa fa-columns"></i>',
                    titleAttr: 'Column Visibility',
                    columnText: function ( dt, idx, title ) {
                        return (idx+1)+': '+title;
                    },
                    postfixButtons: [ 'colvisRestore' ]
                },
                // 'colvis',
        ]
    } );

} );

$(document).ready(function() {
    if ($('#datatable-table-index').length != 0) {
        var table = $('#datatable-table-index').DataTable( {
           dom: '<"toolbar">Bfr<"table-responsive custom-table"t>ip',
            // stateSave: true,
            // responsive: true,
            buttons: [
                    {
                        extend: 'print',
                        text: '<i class="fa fa-print"></i>',
                        titleAttr: 'Print',
                        // message: 'Project ',
                        download: 'open',
                        // title: 'Project List',
                        customize: function ( win ) {
                        $(win.document.body)
                            .css( 'font-size', '10pt' );
     
                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );
                    },
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                        
                    
                    {
                        extend: 'excel',
                        text: '<i class="fa fa-file-excel-o"></i>',
                        titleAttr: 'Excel',
                        // title: 'Project List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    
                    {
                        extend: 'pdf',
                        text: '<i class="fa fa-file-pdf-o"></i>',
                        titleAttr: 'Pdf',
                        // message: 'Project ',
                         // extend: 'pdfHtml5',
                       // download: 'open',// for opening in new tab with preview and more option
                        // title: 'Project List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                     {
                        extend: 'copy',
                        text: '<i class="fa fa-files-o"></i>',
                        titleAttr: 'Copy',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                     {
                        extend: 'colvis',
                        text: '<i class="fa fa-columns"></i>',
                        titleAttr: 'Column Visibility',
                        columnText: function ( dt, idx, title ) {
                            return (idx+1)+': '+title;
                        },
                        postfixButtons: [ 'colvisRestore' ]
                    },
             ],
        } );
        $("div.toolbar").html('Total Results: '+table.page.info().recordsTotal);
    }
} );



$(document).ready(function() {
    if ($('#benef-group-ind-index').length != 0) {
        var table =    $('#benef-group-ind-index').DataTable( {
            dom: '<"toolbar">Bfr<"table-responsive custom-table"t>ip',

            buttons: [
                    {
                        extend: 'print',
                        text: '<i class="fa fa-print"></i>',
                        titleAttr: 'Print',
                        // message: 'Project ',
                        download: 'open',
                        // title: 'Project List',
                        customize: function ( win ) {
                        $(win.document.body)
                            .css( 'font-size', '10pt' );
     
                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );
                    },
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                        
                    
                    {
                        extend: 'excel',
                        text: '<i class="fa fa-file-excel-o"></i>',
                        titleAttr: 'Excel',
                        // title: 'Project List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    
                    {
                        extend: 'pdf',
                        text: '<i class="fa fa-file-pdf-o"></i>',
                        titleAttr: 'Pdf',
                        // message: 'Project ',
                         // extend: 'pdfHtml5',
                       // download: 'open',// for opening in new tab with preview and more option
                        // title: 'Project List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                     {
                        extend: 'copy',
                        text: '<i class="fa fa-files-o"></i>',
                        titleAttr: 'Copy',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                     {
                        extend: 'colvis',
                        text: '<i class="fa fa-columns"></i>',
                        titleAttr: 'Column Visibility',
                        columnText: function ( dt, idx, title ) {
                            return (idx+1)+': '+title;
                        },
                        postfixButtons: [ 'colvisRestore' ]
                    },
                    
                //   {
                //     extend: 'colvisGroup',
                //     text: 'Individual',
                //     show: [ 1, 2, 3, 8, 12, 20, 23],
                //     hide: [ 4, 5, 6, 7, 9, 10, 11, 13, 14, 15, 16, 17, 18, 19, 21, 22],
                //     className: 'Individual',
                //    },
                // {
                //     extend: 'colvisGroup',
                //     text: 'Group',
                //     className: 'Group',
                //     show: [ 1, 2, 4, 5, 6, 7, 9, 10, 11,  8, 10, 11, 12 ],
                //     hide: [ 3, 5, 7, 9 ]
                // },
                // {
                //     extend: 'colvisGroup',
                //     text: 'Show all',
                //     show: ':hidden',
                //     className: 'showAll active',
                //     // className: ''
                //     }
                 
            ]
        } );
        $("div.toolbar").html('Total Results: '+table.page.info().recordsTotal);
    }


    $('.Individual').on( 'click', function () {
        // alert('Individual called');
        $('.Group').removeClass('active');
        $('.showAll').removeClass('active');
        $('.Individual').addClass('active');
        table
            .columns( 2 )
            .search('Individual')
            .draw();

             new PNotify({
                                  title: 'Individual Data Loaded',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });
    } );

        $('.Group').on( 'click', function () {
            // alert('Group called');
            $('.Individual').removeClass('active');
            $('.showAll').removeClass('active');
            $('.Group').addClass('active');
        
            table
                .columns( 2 )
                .search('Group')
                .draw();

                    new PNotify({
                                  title: 'Group Data Loaded',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });
        } );

        $('.showAll').on( 'click', function () {
            $('.Individual').removeClass('active');
            $('.Group').removeClass('active');
            $('.showAll').addClass('active');

            var val = [];

            val.push("Individual");
            val.push("Group");

            var mergedVal = val.join('|');

            table.column(2).search(mergedVal,true).draw();

               new PNotify({
                                  title: 'All Data Shown',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });

      } );


} );

$(document).ready(function() {
    if ($('#datatable').length != 0) {
        var table =    $('#datatable').DataTable( {
            destroy: true,
            dom: '<"toolbar">Bfr<"table-responsive custom-table"t>ip',

            buttons: [
                    {
                        extend: 'print',
                        text: '<i class="fa fa-print"></i>',
                        titleAttr: 'Print',
                        // message: 'Project ',
                        download: 'open',
                        // title: 'Project List',
                        customize: function ( win ) {
                        $(win.document.body)
                            .css( 'font-size', '10pt' );
     
                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );
                    },
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                        
                    
                    {
                        extend: 'excel',
                        text: '<i class="fa fa-file-excel-o"></i>',
                        titleAttr: 'Excel',
                        // title: 'Project List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    
                    {
                        extend: 'pdf',
                        text: '<i class="fa fa-file-pdf-o"></i>',
                        titleAttr: 'Pdf',
                        // message: 'Project ',
                         // extend: 'pdfHtml5',
                       // download: 'open',// for opening in new tab with preview and more option
                        // title: 'Project List',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                     {
                        extend: 'copy',
                        text: '<i class="fa fa-files-o"></i>',
                        titleAttr: 'Copy',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                     {
                        extend: 'colvis',
                        text: '<i class="fa fa-columns"></i>',
                        titleAttr: 'Column Visibility',
                        columnText: function ( dt, idx, title ) {
                            return (idx+1)+': '+title;
                        },
                        postfixButtons: [ 'colvisRestore' ]
                    },
                    
            ]
        } );
        $("div.toolbar").html('Total Results: '+table.page.info().recordsTotal);
    }
});
