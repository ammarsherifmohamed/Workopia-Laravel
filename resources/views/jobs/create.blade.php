<x-layout>

    <x-slot name="title">Crete a job</x-slot>
    <form method="POST" class="mb-4 block mx-5 md:mx-auto">
        @csrf
        <input type="text" name="title" placeholder="Keywords"
            class="w-full md:w-auto mb-2 px-4 py-2 focus:outline-none bg-blue-300" />
        <input type="text" name="description" placeholder="Location"
            class="w-full md:w-auto mb-2 px-4 py-2 focus:outline-none bg-blue-300" />
        <button type="submit" class="w-full md:w-auto bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 focus:outline-none">
            <i class="fa fa-search"></i> Search
        </button>
    </form>
</x-layout>
