<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="flex justify-center max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Back-Office') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <div
	                class='h-full w-full flex justify-center items-center'>
	                <div class='relative'>
	                	<button class="bg-gray-600 p-2 font-bold text-gray-100 rounded-md peer focus:bg-gray-400 focus:text-gray-200 transition-all duration-200  ">Planets</button>
	                	<div class=' w-40 absolute top-5 z-10
	                	after:content-[""] after:inline-block after:absolute after:top-0 after:bg-white/40
	                	after:w-full after:h-full after:-z-20 after:blur-[2px] after:rounded-lg
                    peer-focus:top-12 peer-focus:opacity-100 peer-focus:visible 
                    transition-all duration-300 invisible  opacity-0 
                    '>
			<ul class='py-6 px-3 flex flex-col gap-3'>
				<li class='cursor-pointer bg-gray-600 p-3 rounded-md hover:opacity-90 text-white'>
                <x-nav-link class="text-white hover:text-white " :href="route('planets.create')" :active="request()->routeIs('planets.create')">
                    <div class=" sm:flex">
                        {{ __('Create a planet') }}                 
                    </div>
                </x-nav-link>
                </li>
				<li class='cursor-pointer bg-gray-600 p-3 rounded-md hover:opacity-90 text-white'>
                <x-nav-link class="text-white hover:text-white " :href="route('planets.index')" :active="request()->routeIs('planets.index')">
                    <div class=" sm:flex">
                    {{ __('Planets list') }}                 
                    </div>
                </x-nav-link>
                </li>	
			</ul>
		</div>
	</div>
</div>
</div>
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <div
	                class='h-full w-full flex justify-center items-center'>
	                <div class='relative'>
	                	<button class="bg-gray-600 p-2 font-bold text-gray-100 rounded-md peer focus:bg-gray-400 focus:text-gray-200 transition-all duration-200  ">Crew</button>
	                	<div class=' w-40 absolute top-5 z-10
	                	after:content-[""] after:inline-block after:absolute after:top-0 after:bg-white/40
	                	after:w-full after:h-full after:-z-20 after:blur-[2px] after:rounded-lg
                    peer-focus:top-12 peer-focus:opacity-100 peer-focus:visible 
                    transition-all duration-300 invisible  opacity-0 
                    '>
			<ul class='py-6 px-3 flex flex-col gap-3'>
				<li class='cursor-pointer bg-gray-600 p-3 rounded-md hover:opacity-90 text-white'>
                <x-nav-link class="text-white hover:text-white " :href="route('crews.create')" :active="request()->routeIs('crews.create')">
                    <div class=" sm:flex">
                    {{ __('Create a crew') }}                 
                    </div>
                </x-nav-link>
                </li>
				<li class='cursor-pointer bg-gray-600 p-3 rounded-md hover:opacity-90 text-white'>
                <x-nav-link class="text-white hover:text-white " :href="route('crews.index')" :active="request()->routeIs('crews.index')">
                    <div class=" sm:flex">
                    {{ __('Crew list') }}                 
                    </div>
                </x-nav-link>
                </li>	
			</ul>
		</div>
	</div>
</div>
</div>
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <div
	                class='h-full w-full flex justify-center items-center'>
	                <div class='relative'>
	                	<button class="bg-gray-600 p-2 font-bold text-gray-100 rounded-md peer focus:bg-gray-400 focus:text-gray-200 transition-all duration-200  ">Technologies</button>
	                	<div class=' w-40 absolute top-5 z-10
	                	after:content-[""] after:inline-block after:absolute after:top-0 after:bg-white/40
	                	after:w-full after:h-full after:-z-20 after:blur-[2px] after:rounded-lg
                    peer-focus:top-12 peer-focus:opacity-100 peer-focus:visible 
                    transition-all duration-300 invisible  opacity-0 
                    '>
			<ul class='py-6 px-3 flex flex-col gap-3'>
				<li class='cursor-pointer bg-gray-600 p-3 rounded-md hover:opacity-90 text-white'>
                <x-nav-link class="text-white hover:text-white " :href="route('technologies.create')" :active="request()->routeIs('technologies.create')">
                    <div class=" sm:flex">
                    {{ __('Create a technologie') }}                
                    </div>
                </x-nav-link>
                </li>
				<li class='cursor-pointer bg-gray-600 p-3 rounded-md hover:opacity-90 text-white'>
                <x-nav-link class="text-white hover:text-white " :href="route('technologies.index')" :active="request()->routeIs('technologies.index')">
                    <div class=" sm:flex">
                    {{ __('Technologie list') }}                 
                    </div>
                </x-nav-link>
                </li>	
			</ul>
		</div>
	</div>
</div>
</div>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
