@props([
    'url' => '/',
    'bgClass' => 'bg-yellow-500',
    'textClass' => 'text-black',
    'hoverClass' => 'hover:bg-yellow-600',
    'icon' => null,
    'mobile' => null,
])

@if ($mobile)
    <a href=$url {{$attributes->merge([
        'class' => '$bgClass $hoverClass $textHover',
    ]) }}>

        @if ($icon)
            <i class="fa fa-{{ $icon }}"></i>
        @endif
        {{ $slot }}
    </a>
@else
    <a href="{{ $url }}" {{ $attributes->merge(['class' => "$bgClass $textClass $hoverClass "]) }}>

        @if ($icon)
            <i class="fa fa-{{ $icon }}"></i>
        @endif

        {{ $slot }}
    </a>
@endif
