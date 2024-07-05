
$(document).on('change','.location_filters',function(){

    let region = $(this).closest( $(this).data("parent") ).find("[name='region']");
    let province = $(this).closest( $(this).data("parent") ).find("[name='province']");
    let city = $(this).closest( $(this).data("parent") ).find("[name='city']");

    let filter = $(this).data("filter");

    switch(filter){

        case "region":

            province.find('option')
                .remove()
                .end()
                .append('<option value="">Select Province</option>')
                .append('<option value="-">-</option>')
                .val('');

            city.find('option')
                .remove()
                .end()
                .append('<option value="">Select City</option>')
                .append('<option value="-">-</option>')
                .val('');

            $.ajax({
                type: 'post',
                url: "/samsung/register",
                data: form,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                success: function(resp){
                },
                error: function(){
                    console.log("Error in AJAX");
                }
            });


            break;

        case "province":

            city.find('option')
                .remove()
                .end()
                .append('<option value="">Select City</option>')
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
