<div>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Create Roles
    </h2>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <form wire:submit.prevent="submit">
            <x-input wire:model="name" label="Name" placeholder="Role Name" />
            @error('name') <span class="error">{{ $message }}</span> @enderror
            <div class="mt-4">        
                <x-button class="rounded-lg" wire:click="submit" spinner="submit" primary label="Create Role" />
            </div>
        </form>
    </div>
</div>
