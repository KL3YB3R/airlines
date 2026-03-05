<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>

    <nav class="bg-white border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                
                <!-- Logotipo / Nombre -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="text-xl font-bold text-indigo-600" wire:navigate>
                        MiProyecto
                    </a>
                </div>

                <!-- Navegación -->
                <div class="hidden space-x-8 sm:flex">
                    <a href="{{ route('dashboard') }}" 
                    class="text-gray-600 hover:text-gray-900" wire:navigate>
                        Dashboard
                    </a>
                </div>

                <!-- Acciones de Usuario (Auth) -->
                <div class="flex items-center space-x-4">
                    @auth
                        <span class="text-sm text-gray-500">Hola, {{ auth()->user()->name }}</span>
                        
                        <!-- Botón de Logout (Tradicional) -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-sm text-red-600 hover:underline">
                                Salir
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline" wire:navigate>Entrar</a>
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline" wire:navigate>Registro</a>
                    @endauth
                </div>
                
            </div>
        </div>
    </nav>
</html>