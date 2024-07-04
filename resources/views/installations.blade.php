<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Installations') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div id="gridContainer"></div>
    </x-slot>
</x-app-layout>

<script>

let datagrid = "#gridContainer";
let datasource = '/supervendor/applications/data';
let columns = ['name', 'email', 'action'];

$(() => {

    $(this).setDatagrid( datagrid, datasource, columns );

});

</script>
