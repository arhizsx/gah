
$(document).on('change','.location_filters',function(){

    let region = $(this).closest( $(this).data("parent") ).find("[name='region']");
    let province = $(this).closest( $(this).data("parent") ).find("[name='province']");
    let city = $(this).closest( $(this).data("parent") ).find("[name='city']");


    let value = $(this).val();
    let filter = $(this).data("filter");

    switch(filter){

        case "region":

            $.ajax({
                url: "/supervendor/ajax",
                method: "POST",
                data: {
                    "action" : "provinces",
                    "value": value
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(resp){

                    province.find('option')
                    .remove()
                    .end()
                    .append('<option value="">Select Province</option>');

                    $.each(resp, function(k, v){
                        province.append('<option value="' + v.PROVINCE +'" data-region="' + v.REGION +'">' + v.PROVINCE +'</option>')
                    });

                },
                error: function(){
                    console.log("Error in AJAX");
                }
            });


            city.find('option')
                .remove()
                .end()
                .append('<option value="">Select City</option>')
                .append('<option value="-">-</option>')
                .val('');




            break;



        case "province":

            city.find('option')
                .remove()
                .end()
                .append('<option value="">Select City</option>')
                .append('<option value="-">-</option>')
                .val('');

            break;

        case "city":
            break;

        default:
            console.log("Unknown location filter");

    }

    console.log( region );
    console.log( province );
    console.log( city );

});
