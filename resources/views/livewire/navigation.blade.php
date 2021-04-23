<nav class="bg-blue-500 fixed top-0 w-full z-50 h-16" x-data={open:false}>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">

        <!-- Mobile menu button-->
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

          <button x-on:click="open = true" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!-- Icon when menu is closed. -->
            <!--
              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!-- Icon when menu is open. -->
            <!--
              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
            {{-- logotipo --}}
          <a href="/" class="flex-shrink-0 flex items-center">

            <img class="block lg:hidden h-8 w-auto" src="{{Storage::url('index/logo.png')}}" alt="Workflow">
            <img class="hidden lg:block h-8 w-auto" src="{{Storage::url('index/logo.png')}}" alt="Workflow">

            </a>
          {{-- menu-lg --}}
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4 items-center" x-data="{open:false}">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              {{-- <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a> --}}
              <a href="/" class="link-nav text-white px-3 py-2 rounded-md text-sm font-medium"><i class="fas fa-home mr-1"></i>INICIO</a>
              <a href="#"  x-on:click="open = true" class="link-nav text-white px-3 py-2 rounded-md text-sm font-medium"><i class="fas fa-caret-down mr-1"></i>CIUDADES</a>
              <div x-show="open" x-on:click.away="open = false" class="origin-top-left absolute left-52 mt-28 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <a href="{{route('profile.show')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Huancayo</a>
                <a href="{{route('admin.home')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Lima</a>
              </div>
              <a href="#" class="link-nav text-white px-3 py-2 rounded-md text-sm font-medium"><i class="fas fa-plus mr-1"></i>RUBROS</a>
              <a href="#" class="link-nav text-white px-3 py-2 rounded-md text-sm font-medium"><i class="fas fa-star mr-1"></i>CONTACTO</a>
            </div>
          </div>
        </div>

        @auth
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            {{-- botton-notificacion --}}
        <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
        <span class="sr-only">View notifications</span>
        <!-- Heroicon name: outline/bell -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
        </svg>
      </button>

      <!-- Profile dropdown -->
      <div class="ml-3 relative" x-data="{open:false}">
        <div>
          <button x-on:click="open = true" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-haspopup="true">
            <span class="sr-only">Open user menu</span>
            <img class="h-8 w-8 rounded-full" src="{{auth()->user()->profile_photo_url}}" alt="">
          </button>
        </div>
        <!--
          Profile dropdown panel, show/hide based on dropdown state.

          Entering: "transition ease-out duration-100"
            From: "transform opacity-0 scale-95"
            To: "transform opacity-100 scale-100"
          Leaving: "transition ease-in duration-75"
            From: "transform opacity-100 scale-100"
            To: "transform opacity-0 scale-95"
        -->
        <div x-show="open" x-on:click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
          <a href="{{route('profile.show')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Tu perfil</a>
          <a href="{{route('admin.home')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Dashboard</a>
          <a href="{{route('landing')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Mi Landing</a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                   this.closest('form').submit();"class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
              Salir
            </a>
          </form>
        </div>
      </div>
    </div>
        @else

        <div class="">
            <a href="{{route('login')}}" class="bg-blue-900 text-white px-3 py-3 rounded-md text-sm font-medium">Anuncia Ya!</a>
        </div>

        @endauth

      </div>
    </div>

    <!--
      Mobile menu
    -->
    <div class="sm:hidden"  x-show="open" x-on:click.away="open = false">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        {{-- <a href="/" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Inicio</a> --}}
        <a href="/" class="bg-blue-500 text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Inicio</a>
        <a href="#" class="bg-blue-500 text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Buscar</a>
        <a href="#" class="bg-blue-500 text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Rubros</a>
        <a href="#" class="bg-blue-500 text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contacto</a>

      </div>
    </div>
  </nav>
