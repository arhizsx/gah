<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Reports') }}
        </h2>
    </x-slot>
    <x-slot name="slot">

        <div class="row pivottable_data d-none">
            <div class="col-md-12 ps-3">
                <button class="btn btn-dark btn-shadow btn-sm pivottable_btn  mt-3" data-action="show_pivot_controls">Customize Pivot</button>
                <button class="btn btn-dark btn-shadow btn-sm dxdatagrid_btn d-none  mt-3" data-action="back_to_pivot">Back to Pivot Table</button>
            </div>
        </div>
        <div class="row pivottable_data  d-none">
            <div class="col pivottable_output" >

            </div>
        </div>
        <div class="row pivottable_loading">
            <div class="col text-center p-5">
                Loading Data...
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

$(document).find(".pivottable_data").addClass("d-none");
$(document).find(".pivottable_loading").removeClass("d-none");

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

        $(document).find(".pivottable_data").removeClass("d-none");
        $(document).find(".pivottable_loading").addClass("d-none");


    },
    error: function(){
        console.log("Error in AJAX");
    }
});

$(document).on("click", ".pivottable_btn", function(){

    var element = $(this);


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

    element.attr("data-action", "hide_pivot_controls");
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
