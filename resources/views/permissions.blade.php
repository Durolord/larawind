<x-app-layout title="Permissions">
    <div class="container grid px-6 mx-auto">
        <div>    
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Permissions
                <div class="float-right">
                    <x-button href="{{route('permission.create')}}" icon="plus" label="Create Permission" class="rounded-lg" positive/>
                </div>
            </h2>
        </div>
            <livewire:permission-table />
</div>
</x-app-layout>