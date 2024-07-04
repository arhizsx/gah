
$.fn.setDatagrid = function( modal, datasource, columns){

    let whatmodal = modal;

    $( this ).dxDataGrid({
        dataSource: datasource,
        rowAlternationEnabled: true,
        selection: {
            mode: 'single',
        },
        showBorders: true,
        columnAutoWidth: false,
        export: {
            enabled: true,
        },
        columnFixing:{
                enabled: false
        },
        onContentReady: function(e){
        },
        searchPanel: {
            visible: true,
            highlightCaseSensitive: true,
        },
        columnChooser: {
            enabled: true,
            mode: "select",
            allowSearch: true,
        },
        scrolling: {
            rowRenderingMode: 'virtual',
        },
        paging: {
            pageSize: 50,
        },
        pager: {
            visible: true,
            allowedPageSizes: [10, 20, 50, 'all'],
            showPageSizeSelector: true,
            showInfo: true,
            showNavigationButtons: true,
        },
        columnsAutoWidth: true,
        showBorders: true,
        filterRow: {
            visible: false,
            applyFilter: 'auto',
        },
        headerFilter: {
            visible: true,
        },
        onRowClick: function(e) {

            $(this).openModal( whatmodal, e.data );

        },
        allowColumnResizing: {
            enabled: true
        },
        columns: columns,
        showBorders: true,
    });
}


$.fn.openModal = function( modal, data ){

    console.log( modal );
    console.log( data );

};

