
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
            <div class="border shadow-lg bg-white p-5 rounded-5 w-100" style="max-width: 600px;">
                <form id="search_form">
                    <label class="mb-3">Mobile Number / Email / Name</label>
                    <div class="position-relative"> <!-- Container for input and X button -->
                        <input type="text" class="form-control w-100 mb-3" style="font-size: 2em;" name="search" id="search">
                        <button type="button" id="clear_search" class="btn btn-link position-absolute end-0 top-50 translate-middle-y">
                            <i class="fas fa-times"></i> <!-- Font Awesome X icon -->
                        </button>                    
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary rounded-3 px-5 me-3">Clear</button>
                        <button type="submit" class="btn btn-primary rounded-3 px-5">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-app-layout>

<script>

$("#search_form").on("submit", function(e) {
    e.preventDefault(); // Prevent the form from submitting the traditional way

    const $form = $(this); // Cache the form element
    const $submitButton = $form.find('button[type="submit"]'); // Find the submit button

    // Disable the submit button to prevent multiple submissions
    $submitButton.prop("disabled", true);

    // Serialize the form data
    const formData = $form.serialize();

    // Create a Promise for the AJAX request
    const ajaxPromise = new Promise((resolve, reject) => {
        $.ajax({
            url: "/vouchers/search",
            method: "POST",
            data: formData,
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
        })
        .catch((error) => {
            console.error("Error:", error.message); // Handle the error
        })
        .finally(() => {
            // Re-enable the submit button after the request is complete
            $submitButton.prop("disabled", false);
        });
});


$(document).ready(function() {
    const $searchInput = $("#search");
    const $clearButton = $("#clear_search");

    // Focus on the search input field when the page is loaded
    $searchInput.focus();


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

$(document).ready(function() {
});

</script>
