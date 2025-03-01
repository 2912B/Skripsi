@props(['active' => false])
<a {{ $attributes }}
    class="card feature-card text-decoration-none text-white"
    aria-current="{{ request()->is('/') ? 'page' : false }}">
    {{ $slot }}
</a>
