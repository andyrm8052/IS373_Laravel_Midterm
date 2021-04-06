<x-app-layout>
    <x-slot name="header">

        <div class="float-right">
                <span class="mr-10 d-inline">
                    <label class="inline-flex items-center">
                        <a href="post" wire:model="view" value="1"><span class="ml-2">Published Posts</span>
                        </a>
                    </label>
                </span>
        </div>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
