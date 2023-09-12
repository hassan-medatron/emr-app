@props(['title'])

@include('partials._guest-header', ['title' => $title])

<!-- Content -->
{{ $slot }}
<!-- / Content -->

@include('partials._guest-footer')
