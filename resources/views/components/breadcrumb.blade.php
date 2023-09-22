@props(['title' => ''])

<h4 class="fw-bold"><span class="text-muted fw-light">Dashboard {{ empty($title) ? '' : '/' }}
    </span>{{ $title }}</h4>
