<x-vouchers-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Search') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 350px)">
            <div class="border shadow-lg bg-white p-5 rounded-5 w-100" style="max-width: 600px;">
                <form id="search_form">
                    <label class="mb-3">Mobile Number / Email / Name</label>
                    <input type="text" class="form-control w-100 mb-3" style="font-size: 2em;" name="search">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-secondary rounded-3 px-5 me-3">Clear</button>
                        <button class="btn btn-primary rounded-3 px-5">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-app-layout>

<script>

$("#search_form").on("submit", function(e) {
    e.preventDefault(); // This prevents the page from reloading

    const $form = $(this).serialize(); // Serialize the form data

    $.ajax({
        url: "/vouchers/search",
        method: "POST",
        data: $form,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token
        },
        success: function(resp) {
            console.log(resp); // Handle the response
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error("Error in AJAX:", textStatus, errorThrown); // Log errors
        }
    });
});

$(document).ready(function() {
    // Focus on the search input field when the page is loaded
    $("#search_input").focus();
});


</script>
