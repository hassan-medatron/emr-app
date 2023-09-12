@props(['title' => ''])

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard {{ empty($title) ? '' : '/' }}
    </span>{{ $title }}</h4>
