<x-app-layout title="Roles">
    <div class="container grid px-6 mx-auto">
        <div>    
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Roles
                <div class="float-right">
                    <x-button href="{{route('role.create')}}" icon="plus" label="Create Role" class="rounded-lg" positive/>
                </div>
            </h2>
        </div>
            <livewire:role-table />
</div>
</x-app-layout>