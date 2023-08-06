<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center">
            <h2 class="font-black text-2xl text-gray-800 leading-tight flex-grow">
                {{ __('Customers') }} <span class="text-ppblue font-normal text-lg">{{ $item->name }}</span>
            </h2>
            <button type="submit" class="btn-primary" form="customergroup">
                <span> {{ __('Save') }}</span>
          </button>
        </div>

    </x-slot>
    <div class="bg-white p-4 w-full">

        <form action="{{ route('customergroups.update', $item) }}" id="customergroup" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-2">
                <label class="label">{{ __('Name') }}</label>
                <input value="{{ old('name') ?? ($item->name ?? '') }}" type="text" name="name"
                    class="w-full border-gray-300 border-2 rounded-lg"
                    placeholder="{{ __('customergroup') }} {{ __('name') }}">
                <div>
                    @error('name')
                        <span class="error-label">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </form>

    </div>

</x-app-layout>
