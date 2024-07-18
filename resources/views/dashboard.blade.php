
<style>

    .pvtTable, .pvtUi, .pvtRendererArea, .js-plotly-plot{
        width: 100%;
    }
    table.pvtTable thead tr th{
        background-image: linear-gradient(168deg,#000000,#3f3f3f 98%); color: #ffffff;
    }
    table.pvtTable tbody tr th{
        background-image: linear-gradient(168deg,#e9e6e6,#ffffff 98%); color: #000000;
        width: 15%;
    }
    li.ui-sortable-handle{
        padding: 2px;
        font-size: 12px;
    }

</style>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="border shadow-lg p-3 mx-3 mt-3 mb-5 bg-white rounded">

            <div class="row pivottable_data" data-dashboard_data="">
                <div class="col pivottable_output"  data-dashboard_rows='' data-dashboard_cols=''  data-dashboard_vals='' data-clicked_table_visible="" data-dashboard_aggregator="" >

                </div>
                <div class="col clicked_item_table d-none">
                    <div class="dxgrid_container" style="overflow-x: auto !important;">
                        <div
                            class="dxgrid_box_filtered table_responsive"
                            style="min-width: 93vw !important; overflow-x: auto !important;"
                        >
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </x-slot>
</x-app-layout>

<script>
</script>

