
$(document).on('change','.location_filters',function(){

    let region = $(this).closest( $(this).data("parent") ).find("[name='region']");
    let province = $(this).closest( $(this).data("parent") ).find("[name='province']");
    let city = $(this).closest( $(this).data("parent") ).find("[name='city']");

    console.log( region );
    console.log( province );
    console.log( city );

});
