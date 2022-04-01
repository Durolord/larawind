<div wire:poll>
    <x-card title="Add Users">
            <x-select label="Select Users" placeholder="Select Users" multiselect wire:model.defer="user" >
            @foreach ($users as $user)
                <x-select.option label="{{$user->name}}" value="{{$user->id}}" />
            @endforeach
        </x-select>
        <div class="mt-2">
            <x-button class="rounded-lg mr-2" wire:loading.attr="disabled" wire:click="add" spinner="add" primary label="Add" />
        </div>
    </x-card>
</div>
