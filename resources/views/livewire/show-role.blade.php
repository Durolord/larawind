<div class="container grid grid-cols-2 gap-4 px-6  mx-auto">
    <div class="col-span-2">
        <h2 class="my-6 text-2xl font-bold text-gray-700 dark:text-gray-200">
        {{$role->name}} Role
        </h2>
    </div>
    <div class="mb-2">        
            <livewire:add-user :id="$role->id"/>
    </div>
    <div class="mb-2">        
            <livewire:add-permission :id="$role->id"/>
    </div>

    <div class="mb-2">

        <x-card title="Users">
            <livewire:view-role-users :role="$role->id"/>
        </x-card>
    </div>
    <div class="mb-2">
        <x-card title="Permissions">
            <livewire:role-permissons :role="$role->name"/>
        </x-card>  
    </div>

</div>
