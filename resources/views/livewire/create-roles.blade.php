<div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        {{$header}}
    </h2>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <form wire:submit.prevent="submit">
            <x-input wire:model="name" label="{{$label}}" placeholder="{{$label}}" />
            <div class="mt-4 float-right">        
                <x-button class="rounded-lg mr-2" wire:loading.attr="disabled" wire:click="submit" spinner="submit" primary label="{{$button}}" />
                @isset($andnew)
                    <x-button class="rounded-lg" wire:loading.attr="disabled" wire:click="submitandnew" spinner="submitandnew" primary label="{!! $andnew !!}" />
                @endisset
            </div>

        </form>
    </div>
</div>
