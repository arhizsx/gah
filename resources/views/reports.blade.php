<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Reports') }}
        </h2>
    </x-slot>
    <x-slot name="slot">

        <div class="row m-2">
            <div class="col-md-12">
                <button class="btn btn-dark btn-shadow btn-sm pivottable_btn" data-action="show_pivot_controls">Customize Pivot</button>
                <button class="btn btn-dark btn-shadow btn-sm dxdatagrid_btn d-none" data-action="back_to_pivot">Back to Pivot Table</button>
            </div>
        </div>
        <div class="row pivottable_data">
            <div class="col pivottable_output" >

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

        // if(element != undefined){
        //     element.data("action", "show_pivot_controls");
        //     element.text("Customize Pivot");
        // }

    },
    error: function(){
        console.log("Error in AJAX");
    }
});

$(document).on("click", ".pivottable_btn", function(){

    var element = $(this);

    console.log(element);

    if($(this).data("action") == "show_pivot_controls" ){
        doShowPivotControls( $(element) );
    }
    else if($(this).data("action") == "hide_pivot_controls" ){
        doHidePivotControls( $(element) );
    }


    doShowPivotControls($(this));
});

function doShowPivotControls(element){


    $(document).find(".pvtUi .pvtAxisContainer").show();
    $(document).find(".pvtUi .pvtUiCell").show();
    element.data("action", "hide_pivot_controls");
    element.text("Hide Pivot Controls");

}

function doHidePivotControls(element){

    $(document).find(".pvtUi .pvtAxisContainer").hide();
    $(document).find(".pvtUi .pvtUiCell").hide();

    if(element != undefined){
        element.data("action", "show_pivot_controls");
        element.text("Customize Pivot");
    }
}


</script>
