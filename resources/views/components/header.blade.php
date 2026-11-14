<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{ url('/') }}">Workopia</a>
        </h1>

        <nav class="hidden md:flex items-center space-x-4">

            <x-nav-links url="/" :active="request()->is('/')">Home</x-nav-links>
            <x-nav-links url="/jobs" :active="request()->is('jobs')">All Jobs</x-nav-links>
            <x-nav-links url="/jobs/saved" :active="request()->is('jobs/saved')">Saved Jobs</x-nav-links>
            <x-nav-links url="/login" :active="request()->is('login')">Login</x-nav-links>
            <x-nav-links url="/register" :active="request()->is('register')">Register</x-nav-links>
            <x-nav-links url="/dashboard" :active="request()->is('dashboard')" icon="edit">Dashboard</x-nav-links>

            <x-button-link type="button" url="/jobs/create" 
            class="px-4 py-2 rounded hover:shadow-md transition duration-300" icon="edit">
                Create Job
            </x-button-link>
        </nav>

        <button id="hamburger" class="text-white md:hidden flex items-center">
            <i class="fa fa-bars text-2xl"></i>
        </button>

    </div>
    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">

        <x-nav-links url="/jobs" :active="request()->is('jobs')" :mobile="true">All Jobs</x-nav-links>
        <x-nav-links url="/jobs/saved" :active="request()->is('jobs/saved')" :mobile="true">Saved Jobs </x-nav-links>
        <x-nav-links url="/login" :active="request()->is('login')" :mobile="true">login</x-nav-links>
        <x-nav-links url="/register" :active="request()->is('register')" :mobile="true">Register</x-nav-links>
        <x-nav-links url="/Dashboard" :active="request()->is('Dasbhboard')" :mobile="true">Dashboard</x-nav-links>

        <x-button-link class="block px-4 py-2" icon="edit">Create Job</x-button-link>
    </nav>
</header>
