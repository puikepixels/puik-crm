<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Puik CRM') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=albert-sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100 flex">
            <div class="sidebar w-64 bg-white border-r m-2 p-2 rounded text-white">
                <a class="flex justify-center my-3" href="{{ route('dashboard') }}">
                    <x-application-mark class="block h-9 w-auto" />
                </a>
                <div class=" p-3 my-3 flex-col flex gap-1">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('customers.index') }}" :active="request()->routeIs('customers*')">
                        {{ __('Customers') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('customers.index') }}" :active="request()->routeIs('customers*')">
                        {{ __('Projects') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('customers.index') }}" :active="request()->routeIs('customers*')">
                        {{ __('Tasks') }}
                    </x-nav-link>
                </div>

            </div>
            <div class="flex-grow">


            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white m-2">
                    <div class="max-w-7xl mx-auto py-6 px-2 sm:px-2 lg:px-4">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="m-2">
                {{ $slot }}
            </main>
        </div>

        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
