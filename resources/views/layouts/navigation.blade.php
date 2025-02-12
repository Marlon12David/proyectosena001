<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            @auth
                @if (auth()->user()->rol == 'admin')
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('welcome') }}">
                                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                            </a>
                        </div>

                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                            <x-nav-link :href="route('categorias.index')" :active="request()->routeIs('categorias.index')">
                                {{ __('Categorias') }}
                            </x-nav-link>
                            <x-nav-link :href="route('pizzas.index')" :active="request()->routeIs('pizzas.index')">
                                {{ __('Pizzas') }}
                            </x-nav-link>
                            <x-nav-link :href="route('pedidos.index')" :active="request()->routeIs('pedidos.index')">
                                {{ __('Pedidos') }}
                            </x-nav-link>
                            {{-- <x-nav-link :href="route('menu')" :active="request()->routeIs('menu')">
                                {{ __('Bebidas') }}
                            </x-nav-link>
                            <x-nav-link :href="route('combos')" :active="request()->routeIs('combos')">
                                {{ __('Combos') }}
                            </x-nav-link>
                            <x-nav-link :href="route('promos')" :active="request()->routeIs('promos')">
                                {{ __('Promos') }}
                            </x-nav-link> --}}
                        </div>
                    </div>

                    @else 
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <a href="{{ route('welcome') }}">
                                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                                </a>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                <x-nav-link :href="route('pizzas.index')" :active="request()->routeIs('pizzas.index')">
                                    {{ __('Pizzas') }}
                                </x-nav-link>
                                <x-nav-link :href="route('combos')" :active="request()->routeIs('combos')">
                                    {{ __('Combos') }}
                                </x-nav-link>
                                <x-nav-link :href="route('promos')" :active="request()->routeIs('promos')">
                                    {{ __('Promos') }}
                                </x-nav-link>
                                <x-nav-link :href="route('aboutus')" :active="request()->routeIs('aboutus')">
                                    {{ __('About Us') }}
                                </x-nav-link>
                            </div>
                        </div>
                @endif
                    
                @else
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('welcome') }}">
                                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                            </a>
                        </div>

                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                            <x-nav-link :href="route('pizzas.index')" :active="request()->routeIs('pizzas.index')">
                                {{ __('Pizzas') }}
                            </x-nav-link>
                            <x-nav-link :href="route('combos')" :active="request()->routeIs('combos')">
                                {{ __('Combos') }}
                            </x-nav-link>
                            <x-nav-link :href="route('promos')" :active="request()->routeIs('promos')">
                                {{ __('Promos') }}
                            </x-nav-link>
                            <x-nav-link :href="route('aboutus')" :active="request()->routeIs('aboutus')">
                                {{ __('About Us') }}
                            </x-nav-link>
                        </div>
                    </div>
            @endauth

            <!-- Settings Dropdown -->
            @if (Route::has('login'))
                @auth
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <div class="shrink-0 flex items-center">
                                <a href="{{ route('carrito.index') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                      </svg>
                                                                          
                                </a>
                                <span class="mx-1">{{ Cart::count() }}</span>  
                            </div>
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>
                                            <div class="ms-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
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
                    @else
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                        <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                        </div>
                        
                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>
                        
                                <x-slot name="content">
                                    <x-dropdown-link :href="route('login')">
                                        {{ __('Login') }}
                                    </x-dropdown-link>
                                @if (Route::has('register')) 
                                        <x-dropdown-link :href="route('register')">
                                        {{ __('Register') }}
                                        </x-dropdown-link>
                                @endif
                                </x-slot>
                            </x-dropdown>
                        </div>
                @endauth
            @endif

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    @if (Route::has('login'))
        @auth
            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link :href="route('pizzas.index')" :active="request()->routeIs('pizzas.index')">
                        {{ __('Pizzas') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('combos')" :active="request()->routeIs('combos')">
                        {{ __('Combos') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('promos')" :active="request()->routeIs('promos')">
                        {{ __('Promos') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('aboutus')" :active="request()->routeIs('aboutus')">
                        {{ __('About Us') }}
                    </x-responsive-nav-link>
                </div>

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
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
        

            @else
                <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <x-responsive-nav-link :href="route('pizzas.index')" :active="request()->routeIs('pizzas.index')">
                            {{ __('Pizzas') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('combos')" :active="request()->routeIs('combos')">
                            {{ __('Combos') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('promos')" :active="request()->routeIs('promos')">
                            {{ __('Promos') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('aboutus')" :active="request()->routeIs('aboutus')">
                            {{ __('About Us') }}
                        </x-responsive-nav-link>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-2 pb-1 border-t border-gray-200 dark:border-gray-600">
                        <div class="space-y-1">
                            <x-responsive-nav-link :href="route('login')">
                                {{ __('Login') }}
                            </x-responsive-nav-link>

                            <x-responsive-nav-link :href="route('register')">
                                {{ __('Register') }}
                            </x-responsive-nav-link>

                            <!-- Authentication -->
                            
                        </div>
                    </div>
                </div>
        @endauth
    @endif
</nav>
