<x-vouchers-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Search') }}
        </h2>
    </x-slot>

    <x-slot name="slot">

        <style>
        /* Style for the X button */
        #clear_search {
        font-size: 1.3em;
        color: blue; /* Make it stand out */
        z-index: 1000; /* Ensure it's on top */
        }   
        
        #clear_search:hover {
            color: #333;
        }    
        .search_info {
            font-size: 1.2em;
        }
        </style>
        <div class="container d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 30vh)">
            <x-dynamic-component :component="'search-' . $position" />
        </div>

        <div id="results_box" class="container-fluid d-none">
            <div class="border shadow-lg bg-white p-4 rounded-4 w-100 mb-4">
                <div class="row">
                    <div class="col border-bottom">
                        <H1 style="font-size: 2em; font-weight: bolder;">Result(s)</H1>
                    </div>
                </div>
                <div class="row" id="results_list">

                </div>
            </div>
        </div>
    </x-slot>

    
    <!-- Modal -->
    <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModallLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="serviceModallLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>


</x-vouchers-layout>

<script>

$(document).on("click", ".serviceButton", function(e) {

    e.preventDefault();
    
    console.log("Service Button");

    $("#serviceModal").modal("show");

});


$("#search_form").on("submit", function(e) {

    e.preventDefault(); // Prevent the form from submitting the traditional way

    const $form = $(this); // Cache the form element

    const $controls = $form.find('.btn-controls'); // Find the submit button

    // Disable the submit button to prevent multiple submissions
    $controls.prop("disabled", true);

    const $submitButton = $form.find('button[type="submit"]'); // Find the submit button

    $submitButton.find("#loading_icon").removeClass("d-none");
    $submitButton.find("#button_text").addClass("d-none");

    const $results = $(document).find('#results_box'); // Find the submit button
    
    $results.addClass("d-none");
    
    const searchValue = $("#search").val().trim();
    const data = {
        search: searchValue, // Manually include the search value
    };            

    // Create a Promise for the AJAX request
    const ajaxPromise = new Promise((resolve, reject) => {

        $.ajax({
            url: "/vouchers/search",
            method: "POST",
            data: data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token
            },
            success: function(resp) {
                resolve(resp); // Resolve the Promise with the response
            },
            error: function(jqXHR, textStatus, errorThrown) {
                reject(new Error(`AJAX Error: ${textStatus} - ${errorThrown}`)); // Reject the Promise with an error
            }
        });
    });

    // Handle the Promise
    ajaxPromise
        .then((resp) => {
            console.log("Response:", resp); // Handle the successful response


            // Clear the existing content in the results list
            $results.find("#results_list").html("");

            // Check if the response is an array
            if (Array.isArray(resp)) {

                    if( resp.length > 0 ){

                        // Loop through each item in the response array
                        resp.forEach((item) => {
                            // Create a new element for each item (e.g., a list item)
                            // const listItem = `<div class='p-3'>${JSON.stringify(item)}</div>`; // Customize this as needed
                
                            const listItem = `<div class='result_item container-fluid py-3 border mb-4 p-5''>` + 
                                                `<div class='row mt-3' style="font-size: 1.2em; font-weight: bolder;">` +
                                                    'Customer Information' +
                                                `</div>` +
                                                `<div class='row'>` +
                                                    `<div class='col-xl-3 border'>` +
                                                        `<div><small>Reference Number</small></div>` +
                                                        `<div class='search_info'>` + item["Reference Number"] + `</div>` +
                                                    `</div>` +
                                                    `<div class='col-xl-3 border'>` +
                                                        `<div><small>Full Name</small></div>` +
                                                        `<div class='search_info'>` + item["Full Name"] +`</div>` +                                                    
                                                    `</div>` +
                                                    `<div class='col-xl-3 border'>` +
                                                        `<div><small>Mobile Number</small></div>` +
                                                        `<div class='search_info'>` + item["Mobile Number"] +`</div>` +
                                                    `</div>` +
                                                    `<div class='col-xl-3 border'>` +
                                                        `<div><small>Email</small></div>` +
                                                        `<div class='search_info'>` + item["Email"] +`</div>` +
                                                    `</div>` +
                                                `</div>` +
                                                `<div class='row mt-3' style="font-size: 1.2em; font-weight: bolder;">` +
                                                    'Transaction Information' +
                                                `</div>` +
                                                `<div class='row'>` +
                                                    `<div class='col-xl-2 border'>` +
                                                        `<div><small>Product SKU</small></div>` +
                                                        `<div class='search_info'>` + item["Product SKU"] + `</div>` +
                                                    `</div>` +
                                                    `<div class='col-xl-2 border'>` +
                                                        `<div><small>Purchased At (Date+Time)</small></div>` +
                                                        `<div class='search_info'>` + item["Purchased At (Date+Time)"] + `</div>`+
                                                    `</div>` +
                                                    `<div class='col-xl-2 border'>` +
                                                        `<div><small>Payment Method</small></div>` +
                                                        `<div class='search_info'>` + item["Payment Method"] + `</div>` +
                                                    `</div>` +
                                                    `<div class='col-xl-2 border'>` +
                                                        `<div><small>Payment Status</small></div>` +
                                                        `<div class='search_info'>` + item["Payment Status"] + `</div>` +
                                                    `</div>` +
                                                    `<div class='col-xl-2 border'>` +
                                                        `<div><small>Payment Transaction ID</small></div>` +
                                                        `<div class='search_info'>` + item["Payment Transaction ID"] + `</div>` +
                                                    `</div>` +
                                                    `<div class='col-xl-2 border'>` +
                                                        `<div><small>Revenue</small></div>` +
                                                        `<div class='search_info'>` + item["Revenue"] + `</div>` +
                                                    `</div>` +
                                                `</div>` +
                                                `<div class='row mt-3' style="font-size: 1.2em; font-weight: bolder;">` +
                                                    'Voucher Information' +
                                                `</div>` +
                                                `<div class='row'>` +
                                                    `<div class='col-xl-3 border'>` +
                                                        `<div><small>Voucher Type</small></div>` +
                                                        `<div class='search_info'>` + item["Voucher Type"] + `</div>` +
                                                    `</div>` +
                                                    `<div class='col-xl-3 border'>` +
                                                        `<div><small>Voucher Assigned</small></div>` +
                                                        `<div class='search_info'>` + item["Voucher Assigned"] + `</div>`+
                                                    `</div>` +
                                                    `<div class='col-xl-3 border'>` +
                                                        `<div><small>Redemption Date</small></div>` +
                                                        `<div class='search_info'>` + item["Redemption Date"] + `</div>`+
                                                    `</div>` +
                                                    `<div class='col-xl-3 border'>` +
                                                        `<a class="btn btn-primary form-control mt-2 serviceButton" data-id="` + item['id'] + `">RESEND VOUCHER</a>` +
                                                    `</div>` +
                                                `</div>` +
                                            `</div>`;

                            // Append the new element to the results list
                            $results.find("#results_list").append(listItem);


                        });

                    } else {

                        $results.find("#results_list").append("<div class='mt-3'>Nothing Found</div>");

                    }



            } else if (typeof resp === 'object' && resp !== null) {
                // If the response is an object, loop through its keys and values
                for (const [key, value] of Object.entries(resp)) {
                    const listItem = `<li><strong>${key}:</strong> ${JSON.stringify(value)}</li>`; // Customize this as needed
                    $results.find("#results_list").append(listItem);
                }
            } else {
                // Handle cases where the response is not an array or object
                $results.find("#results_list").html("<li>No data found or invalid response format.</li>");
                alert("S");
            }            

        })
        .catch((error) => {
            console.error("Error:", error.message); // Handle the error
        })
        .finally(() => {
            // Re-enable the submit button after the request is complete
            $controls.prop("disabled", false);

            $submitButton.find("#loading_icon").addClass("d-none");
            $submitButton.find("#button_text").removeClass("d-none");

            $results.removeClass("d-none");


        });
});


$(document).ready(function() {

    const $searchInput = $("#search");
    const $clearButton = $("#clear_search");
    

    // Focus on the search input field when the page is loaded
    $searchInput.focus();

    if ($searchInput.val().trim() !== "") {
        $clearButton.show();
    } else {
        $clearButton.hide();
    }


    // Show/hide the X button based on input value
    $searchInput.on("input", function() {
        if ($(this).val().trim() !== "") {
            $clearButton.show();
        } else {
            $clearButton.hide();
        }
    });

    // Clear the input and hide the X button when clicked
    $clearButton.on("click", function() {
        $searchInput.val("").focus(); // Clear input and set focus
        $clearButton.hide();
    });

    // Clear the input and hide the X button when the "Clear" button is clicked
    $(".btn-secondary").on("click", function() {
        $searchInput.val("").focus(); // Clear input and set focus
        $clearButton.hide();
    });

});

</script>
