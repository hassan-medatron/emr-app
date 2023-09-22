@php
    use Carbon\Carbon;

    $currentYear = Carbon::now()->year;
@endphp


<footer class="content-footer footer bg-footer-theme">
    <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            © {{ $currentYear }}, made with ❤️ by Medatron Pvt Ltd.
        </div>
        <div>
            <a href="#" class="footer-link me-4" target="_blank">Help & Support</a>
            <a href="#" target="_blank" class="footer-link me-4">Report A Bug</a>
            <a href="#" target="_blank" class="footer-link me-4">Documentation</a>
            <a href="#" target="_blank" class="footer-link me-4">Talk to our Agent</a>
        </div>
    </div>
</footer>
