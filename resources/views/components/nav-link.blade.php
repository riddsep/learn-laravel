@props(['active' => false])

<a
    {{
    $attributes
    }}
    title=""
    class="{{
        $active ? 'text-indigo-600 bg-indigo-50' : 'text-gray-900'
    }} text-base font-medium  transition-all duration-200 hover:text-indigo-600"
>
    {{ $slot }}
</a>
