<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-black text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('Dashboard') }}
            </h2>
            <a class="block rounded-lg shadow bg-ppblue text-white px-3 font-bold p-2 transition ease-in-out delay-150 hover:-translate-y-0.5 hover:scale-105"
                href="#">
                <span> {{ __('Create') }}</span>
            </a>
        </div>

    </x-slot>

    <div class="py-2">
        <div class="bg-white p-4">
            <h1 class="text-xl font-bold mb-2">Puik CMS</h1>
            <p>Een simpel CRM systeem.</p>
        </div>
    </div>
</x-app-layout>
