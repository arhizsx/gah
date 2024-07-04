<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Applications') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="border shadow-lg p-3 mx-3 mt-3 mb-5 bg-white rounded">
            <div id="gridContainer"></div>
        </div>
    </x-slot>
</x-app-layout>

<script>

$(() => {
  $('#gridContainer').dxDataGrid({
    dataSource: '/supervendor/applications/data',
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
    columns: ['name', 'email'],
    showBorders: true,
  });
});

</script>
