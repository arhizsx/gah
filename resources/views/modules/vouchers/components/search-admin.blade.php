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
    <div class="pt-4"><small><strong>Warning:</strong> Please be aware that all activities on this portal—including page views, clicks, and other interactions—are actively tracked and recorded. This tracking is implemented to enhance user experience, improve website performance, and ensure security.</small></div>
    <div class="d-none error-message"></div>
</div>
