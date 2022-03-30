<x-app-layout title="Roles">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Roles
        </h2>
        <livewire:create-roles/>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <livewire:role-table />
        </div>

</div>
</x-app-layout>