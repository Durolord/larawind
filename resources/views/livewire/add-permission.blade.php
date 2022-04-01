<div wire:poll>
    <x-card title="Add Permissions">
            <x-select label="Select Permissions" placeholder="Select Permissions" multiselect wire:model.defer="permission" >
            @foreach ($permissions as $permission)
                <x-select.option label="{{$permission->name}}" value="{{$permission->name}}" />
            @endforeach
                            <x-select.option label="" value="" />

        </x-select>
        <div class="mt-2">
            <x-button class="rounded-lg mr-2" wire:loading.attr="disabled" wire:click="add" spinner="add" primary label="Add" />
        </div>
    </x-card>
</div>
