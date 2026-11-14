@props(['url' => '/', 'active' => false, 'icon' => null, 'mobile' => null])

@if ($mobile)
    <a href="{{$url}}" class="block px-4 py-2 hover:bg-blue-700 {{ $active ? 'font-bold text-yellow-200' : '' }}">
        @if ($icon)
            <i class="fa fa-{{ $icon }}"></i>
        @endif
        {{ $slot }}
    </a>

@else

<a {{ $attributes }} href = "{{ $url }}"
    class="{{ $active ? 'font-bold text-yellow-200' : 'text-white hover:underline py-2' }}">
    @if ($icon)
        <i class="fa fa-{{ $icon }}"></i>
    @endif
    {{ $slot }}
</a>

@endif