<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Reports') }}
        </h2>
    </x-slot>
    <x-slot name="slot">

        <div class="pivottable_output" >

        </div>

    </x-slot>

</x-app-layout>

<script>



var renderers = {};

$.extend(renderers, $.pivotUtilities.renderers, $.pivotUtilities.plotly_renderers);

var rows = ["campaign"];
var cols = ["status"];
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
            }
        });

        $(document).find(".pvtUi .pvtAxisContainer").hide();
        $(document).find(".pvtUi .pvtUiCell").hide();

        if(element != undefined){
            element.data("action", "show_pivot_controls");
            element.text("Customize Pivot");
        }

    },
    error: function(){
        console.log("Error in AJAX");
    }
});



</script>
