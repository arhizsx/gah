<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Applications') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div id="gridContainer"></div>
    </x-slot>
</x-app-layout>

<script>

let datasource = '/supervendor/applications/data';
let columns = ['name', 'email'];

$(() => {
  $('#gridContainer').dxDataGrid({
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

    },
    allowColumnResizing: {
        enabled: true
    },
    columns: columns,
    showBorders: true,
  });
});

</script>
