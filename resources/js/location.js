
$(document).on('change','.location_filters',function(){

    let region = $(this).closest( $(this).data("parent") ).find("[name='region']");
    let province = $(this).closest( $(this).data("parent") ).find("[name='province']");
    let city = $(this).closest( $(this).data("parent") ).find("[name='city']");

    let filter = $(this).data("filter");

    switch(filter){

        case "region":

            $.ajax({
                type: 'get',
                url: "/supervendor/data/provinces",
                success: function(resp){

                    province.find('option')
                    .remove()
                    .end()
                    .append('<option value="">Select Province</option>');

                    var data = JSON.parse(resp) ;

                    $.each(data, function(k, v){
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
