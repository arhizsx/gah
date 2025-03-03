
<x-vouchers-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Search') }}
        </h2>
    </x-slot>
    <style>
    /* Style for the X button */
    #clear_search {
    font-size: 1.5em;
    color: red; /* Make it stand out */
    background: yellow; /* Make it stand out */
    border: 1px solid black; /* Make it stand out */
    z-index: 1000; /* Ensure it's on top */
    }   
    
    #clear_search:hover {
        color: #333;
    }    
    </style>
    <x-slot name="slot">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 350px)">
            <div class="border shadow-lg bg-white px-5 py-3 rounded-5 w-100" style="max-width: 600px;">
                <form id="search_form">
                    <label class="mb-3">Mobile Number / Email / Name </label>
                    <div class="position-relative"> <!-- Container for input and X button -->
                        <input type="text" class="form-control w-100 mb-3 btn-controls" style="font-size: 2em;" name="search" id="search">
                        <button type="button" id="clear_search" class="btn-controls btn btn-link position-absolute end-0 top-50 translate-middle-y" style="display: none;">
                            <i class="fas fa-times fa-lg"></i> <!-- Font Awesome X icon -->
                        </button>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary rounded-3 px-5 btn-controls">
                            <span id="button_text">Search</span>
                            <span id="loading_icon" class="d-none">
                                <i class="fas fa-spinner fa-spin"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>

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
</x-app-layout>

<script>

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


                    // Loop through each item in the response array
                    resp.forEach((item) => {
                        // Create a new element for each item (e.g., a list item)
                        // const listItem = `<div class='p-3'>${JSON.stringify(item)}</div>`; // Customize this as needed
            
                        const listItem = `<div class='result_item container-fluid py-3 border-bottom mb-3''>` + 
                                            `<div class='row'>` +
                                                `<div class='col-3'>` +
                                                    item["Reference Number"] +
                                                `</div>` +
                                                `<div class='col-3'>` +
                                                    item["Full Name"] +
                                                `</div>` +
                                                `<div class='col-3'>` +
                                                    item["Mobile Number"] +
                                                `</div>` +
                                                `<div class='col-3'>` +
                                                    item["Email"] +
                                                `</div>` +
                                            `</div>` +

                                            `<div class='row mt-3'>` +
                                                `<div class='col-2 border'>` +
                                                    `<div><small>Purchased At (Date+Time)</small></div>` +
                                                    `<div>` + item["Product SKU"] + `</div>` +
                                                `</div>` +
                                                `<div class='col-2 border'>` +
                                                    `<div><small>Purchased At (Date+Time)</small></div>` +
                                                    `<div>` + item["Purchased At (Date+Time)"] + `</div>`+
                                                `</div>` +
                                                `<div class='col-2 border'>` +
                                                    `<div><small>Purchased At (Date+Time)</small></div>` +
                                                    `<div>` + item["Payment Method"] + `</div>` +
                                                `</div>` +
                                                `<div class='col-2 border'>` +
                                                    `<div><small>Purchased At (Date+Time)</small></div>` +
                                                    `<div>` + item["Payment Status"] + `</div>` +
                                                `</div>` +
                                                `<div class='col-2 border'>` +
                                                    `<div><small>Purchased At (Date+Time)</small></div>` +
                                                    `<div>` + item["Payment Transaction ID"] + `</div>` +
                                                `</div>` +
                                                `<div class='col-2 border'>` +
                                                    `<div><small>Purchased At (Date+Time)</small></div>` +
                                                    `<div>` + item["Revenue"] + `</div>` +
                                                `</div>` +
                                            `</div>` +
                                            `<div class='row mt-3' style='font-size: 0.8em'>` +
                                                `<div class='col-12'>` +
                                                    JSON.stringify(item) +
                                                `</div>` +
                                            `</div>` +
                                        `</div>`;



                        // Append the new element to the results list
                        $results.find("#results_list").append(listItem);
                    });


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
