<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-black text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('Customers') }} <span class="text-ppblue font-normal text-lg">{{$item->name}}</span>
            </h2>
            <a class="btn-primary"
                href="#">
                <span> {{ __('Save') }}</span>
            </a>
        </div>

    </x-slot>

    <div class="py-2 grid grid-cols-3 gap-4">
        <div class="bg-white p-4">
          <livewire:customers.update-customer :customer="$item" />
        </div>

        <div class="col-span-2 flex flex-col gap-4">
          <div id="notes" class="bg-white p-4">
            <h1 class="text-xl font-bold mb-2">Notities</h1>
            <p>{{$item->name}}</p>
          </div>
  
          <div id="projects" class="bg-white p-4 col-span-2 ">
            <h1 class="text-xl font-bold mb-2">Projecten</h1>
            <p>{{$item->name}}</p>
          </div>

          <div  id="tasks" class="bg-white p-4 col-span-2 ">
            <h1 class="text-xl font-bold mb-2">Taken</h1>
            <p>{{$item->name}}</p>
          </div>

        </div>


    </div>
</x-app-layout>
