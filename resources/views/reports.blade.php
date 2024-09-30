<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Reports') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="border shadow-lg p-3 mx-3 mt-3 mb-5 bg-white rounded">

            <div class="row pivottable_data">
                <div class="col pivottable_output" >

                </div>
            </div>

        </div>
    </x-slot>

</x-app-layout>

<script>



var renderers = {};

$.extend(renderers, $.pivotUtilities.renderers, $.pivotUtilities.plotly_renderers);

var rows = [];
var cols = [];
var vals = [];
var aggregator = "Count";

$.ajax({

    url: "/supervendor/data/reports",
    method: "GET",
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function(resp){        

        $(document).find(".pivottable_output").pivotUI(resp, {
            rows: rows,
            cols: cols,
            aggregatorName: aggregator,
            vals: vals,
            renderers: renderers,
            rendererName: "Table",
            rendererOptions: {
                table: {
                    clickCallback: function(e, value, filters, pivotData){
                        showClickedCell(e, value, filters, pivotData, clicked_table_visible);
                    },
                    rowTotals: true,
                    colTotals: true
                }
            }
        });

    },
    error: function(){
        console.log("Error in AJAX");
    }
});



</script>
