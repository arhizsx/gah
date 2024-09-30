<!doctype html>
<html lang="en">
    <head>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/pivottable/2.23.0/pivot.min.js" integrity="sha512-XgJh9jgd6gAHu9PcRBBAp0Hda8Tg87zi09Q2639t0tQpFFQhGpeCgaiEFji36Ozijjx9agZxB0w53edOFGCQ0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.plot.ly/plotly-basic-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pivottable/2.23.0/plotly_renderers.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>

    </head>
    <body>
        <div class="pivottable_output" >
        </div>
        <script>



            var renderers = {};

            $.extend(renderers, $.pivotUtilities.renderers, $.pivotUtilities.plotly_renderers);

            var rows = ["campaign"];
            var cols = ["status"];
            var vals = ["id"];
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

                },
                error: function(){
                    console.log("Error in AJAX");
                }
            });



        </script>
    </body>
</html>
