<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-black text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('Taskstatus') }} <span class="text-ppblue font-normal text-lg">{{ $item->name }}</span>
            </h2>

            @can('taskstatus:edit')
                <a class="btn-primary" href="{{ route($model . 's.edit', $item->id) }}">
                    <span> {{ __('Edit') }}</span>
                </a>
            @endcan
        </div>
    </x-slot>
    <div class="bg-white p-4 w-full">

        <label class="label">{{ __('Title') }}</label>
        <p>{{ $item->title }}</p>

    </div>

</x-app-layout>