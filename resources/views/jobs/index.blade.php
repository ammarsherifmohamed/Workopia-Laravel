<x-header />

<x-layout>

    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="subtitle">{{ $subtitle }}</x-slot>

    <x-slot name="jobs">
        <ul>
            @forelse ($jobs as $job)
                <li>
                    {{ $loop->iteration }}-{{ $job }}
                </li>
            @empty
                <p>No jobs available.</p>
            @endforelse

        </ul>
    </x-slot>

</x-layout>
