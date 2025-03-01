@props(['active' => false])
<a {{ $attributes }}
    class="navbar-logo"
    aria-current="{{ request()->is('/') ? 'page' : false }}">
    {{ $slot }}
</a>
