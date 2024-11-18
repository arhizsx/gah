
$(document).on('change', '.location_filters', function () {

    let region = $(this).closest($(this).data("parent")).find("[data-filter='region']");
    let province = $(this).closest($(this).data("parent")).find("[data-filter='province']");
    let city = $(this).closest($(this).data("parent")).find("[data-filter='city']");
    let brgy = $(this).closest($(this).data("parent")).find("[data-filter='brgy']");

    console.log(region);
    console.log(province);
    console.log(city);
    console.log(brgy);

    let value = $(this).val();
    let filter = $(this).data("filter");

    switch (filter) {

        case "region":

            $.ajax({
                url: "/supervendor/locations",
                method: "POST",
                data: {
                    "action": "provinces",
                    "value": value
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (resp) {

                    console.log(resp);
                    province.find('option')
                        .remove()
                        .end()
                        .append('<option value="">Select Province</option>');

                    $.each(resp, function (k, v) {
                        province.append('<option value="' + v.PROVINCE + '" data-region="' + v.REGION + '">' + v.PROVINCE + '</option>')
                    });

                },
                error: function () {
                    console.log("Error in AJAX");
                }
            });


            city.find('option')
                .remove()
                .end()
                .append('<option value="">Select City</option>')
                .val('');

            brgy.find('option')
                .remove()
                .end()
                .append('<option value="">Select Brgy</option>')
                .val('');

            break;

        case "province":

            city.find('option')
                .remove()
                .end()
                .append('<option value="">Please wait...</option>');

            $.ajax({
                url: "/supervendor/locations",
                method: "POST",
                data: {
                    "action": "cities",
                    "value": value,
                    "region": region.val()
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (resp) {

                    console.log(resp);

                    city.find('option')
                        .remove()
                        .end()
                        .append('<option value="">Select City</option>');

                    $.each(resp, function (k, v) {
                        city.append('<option value="' + v.CITY + '" data-region="' + v.REGION + '" data-province="' + v.PROVINCE + '">' + v.CITY + '</option>')
                    });

                },
                error: function () {
                    console.log("Error in AJAX");
                }
            });

            brgy.find('option')
                .remove()
                .end()
                .append('<option value="">Select Brgy</option>')
                .val('');

            break;

        case "city":

            $.ajax({
                url: "/supervendor/locations",
                method: "POST",
                data: {
                    "action": "brgy",
                    "value": value,
                    "region": region.val(),
                    "province": province.val()
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (resp) {

                    brgy.find('option')
                        .remove()
                        .end()
                        .append('<option value="">Select Barangay</option>');

                    $.each(resp, function (k, v) {
                        city.append('<option value="' + v.BRGY + '" data-region="' + v.REGION + '" data-province="' + v.PROVINCE + '" data-city="' + v.CITY + '">' + v.BRGY + '</option>')
                    });

                },
                error: function () {
                    console.log("Error in AJAX");
                }
            });

            break;

        case "brgy":

            break;

        default:

            console.log("Unknown location filter");

    }

});
