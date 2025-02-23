<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leads List') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="border shadow-lg p-3 mx-3 mt-3 mb-5 bg-white rounded">

        <div id="gridContainer"></div>

        </div>
    </x-slot>
</x-app-layout>

<script> 

let x= "";
let modal = "";
let datagrid = "#gridContainer";
let datasource = '/supervendor/data/leadslist';
let columns = [
    {
        dataField: 'id',
        caption: 'ID',
        width: '60',
    },
    {
        dataField: 'campaign',
        caption: 'campaign',
        width: '100',
    },
    {
        dataField: 'source',
        caption: 'source',
        width: '100',
    },
    {
        dataField: 'complete_name',
        caption: 'Complete Name',
        width: '250',
        cellTemplate(container, options) {
            if (options.data != null)  {

                $('<div>')
                        .css({
                            "white-space": "normal",  // Allows wrapping to new lines
                            "word-wrap": "break-word", // Breaks long words
                            "overflow": "visible",     // No overflow restriction
                        })
                        .append(`${options.data.complete_name} `)
                        .appendTo(container);
            }
        },
    },
    {
        dataField: 'mobile_number',
        caption: 'Mobile No',
        width: '120',
        cellTemplate(container, options) {
            if (options.data != null)  {

                $('<div>')
                        .css({
                            "white-space": "normal",  // Allows wrapping to new lines
                            "word-wrap": "break-word", // Breaks long words
                            "overflow": "visible",     // No overflow restriction
                        })
                        .append(`${options.data.mobile_number} `)
                        .appendTo(container);
            }
        },
    },
    {
        dataField: 'province',
        caption: 'Province',
        width: '189',
        cellTemplate(container, options) {
            if (options.data != null)  {

                $('<div>')
                        .css({
                            "white-space": "normal",  // Allows wrapping to new lines
                            "word-wrap": "break-word", // Breaks long words
                            "overflow": "visible",     // No overflow restriction
                        })
                        .append(`${options.data.province} `)
                        .appendTo(container);
            }
        },
    },
    {
        dataField: 'city',
        caption: 'City',
        width: '189',
        cellTemplate(container, options) {
            if (options.data != null)  {

                $('<div>')
                        .css({
                            "white-space": "normal",  // Allows wrapping to new lines
                            "word-wrap": "break-word", // Breaks long words
                            "overflow": "visible",     // No overflow restriction
                        })
                        .append(`${options.data.city} `)
                        .appendTo(container);
            }
        },
    },
    {
        dataField: "street",
        caption: "Street",
        visible: false,
    },
    {
        dataField: "brgy_village",
        caption: "Brgy / Village",
        visible: false,
    },
    {
        dataField: "house_floor_bldg",
        caption: "House Flr / Bldg",
        visible: false,
    },
    {
        dataField: 'status',
        caption: 'Status',
        width: '180',
        cellTemplate(container, options) {
            if (options.data != null)  {

                $('<div>')
                        .css({
                            "white-space": "normal",  // Allows wrapping to new lines
                            "word-wrap": "break-word", // Breaks long words
                            "overflow": "visible",     // No overflow restriction
                        })
                        .append(`${options.data.status} `)
                        .appendTo(container);
            }
        },
    },
    {
        dataField: 'vendor',
        caption: 'Vendor',
        width: '190',
        cellTemplate(container, options) {
            if (options.data != null)  {

                $('<div>')
                        .css({
                            "white-space": "normal",  // Allows wrapping to new lines
                            "word-wrap": "break-word", // Breaks long words
                            "overflow": "visible",     // No overflow restriction
                        })
                        .append(`${options.data.vendor} `)
                        .appendTo(container);
            }
        },
    },
    {
        dataField: 'SGT Name',
        caption: 'Area Head',
        width: '190',
        cellTemplate(container, options) {
            if (options.data != null)  {

                $('<div>')
                        .css({
                            "white-space": "normal",  // Allows wrapping to new lines
                            "word-wrap": "break-word", // Breaks long words
                            "overflow": "visible",     // No overflow restriction
                        })
                        .append(`${options.data['SGT Name']} `)
                        .appendTo(container);
            }
        },
    },

    'Registration Date', 
    'Last Update', 
    "Aging",
];

$(() => {

    $(datagrid).setDatagrid( modal, datasource, columns );

});



</script>
