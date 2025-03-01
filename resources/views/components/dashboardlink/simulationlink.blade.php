@props(['active' => false])
<a {{ $attributes }}
    class="{{ request()->is('simulation*') ? 'bg-blue-500 text-white' : 'text-gray-300 hover:bg-blue-400 hover:text-white'}}
        block rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ request()->is('simulation*') ? 'page' : false }}">
    {{ $slot }}
</a>
