<div>
    <form wire:submit="save">

        <div class="mb-2">
            <label class="label">Name</label>
            <input class="w-full border-gray-300 border-2 rounded-lg" type="text" wire:model="form.name">
            <div>
                @error('form.name')
                    <span class="error-label">{{ $message }}</span>
                @enderror
            </div>
        </div>


        <div class="mb-2">
            <label class="label">Email</label>
            <input class="w-full border-gray-300 border-2 rounded-lg" type="text" wire:model="form.email">
            <div>
                @error('form.email')
                    <span class="error-label">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mb-2">
            <label class="label">Phone</label>
            <input class="w-full border-gray-300 border-2 rounded-lg" type="text" wire:model="form.phone">
            <div>
                @error('form.phone')
                    <span class="error-label">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mb-2">
            <label class="label">Mobil</label>
            <input class="w-full border-gray-300 border-2 rounded-lg" type="text" wire:model="form.mobil">
            <div>
                @error('form.mobil')
                    <span class="error-label">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button
            class="btn-primary"
            type="submit">Update</button>
    </form>

</div>
