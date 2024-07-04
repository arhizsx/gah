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

$(() => {
  $('#gridContainer').dxDataGrid({
    dataSource: '/supervendor/applications/data',
    columns: ['id', 'name', 'email'],
    showBorders: true,
  });
});

</script>
