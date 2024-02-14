<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a crew') }}
        </h2>
    </x-slot>
    <x-planets-card>
        <!-- Message de réussite -->
        @if (session()->has('message'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('crews.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <x-input-label for="role" :value="__('Role')" />
                <x-text-input  id="role" class="block mt-1 w-full" type="text" name="role" :value="old('role')" required autofocus />
                <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div>
            <!-- Titre -->
            <div>
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input  id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            <!-- Détail -->
            <div class="mt-4">
                <x-input-label for="detail" :value="__('Detail')" />
                <x-textarea class="block mt-1 w-full" id="detail" name="detail">{{ old('detail') }}</x-textarea>
                <x-input-error :messages="$errors->get('detail')" class="mt-2" />
            </div>
            <div class="row mb-3">
                <x-input-label for="image_path" :value="__('Crew Pic')" />
                <x-text-input  id="image_path" class="block mt-1 w-full" type="file" name="image_path" required autofocus />
                <x-input-error :messages="$errors->get('image_path')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3">
                    {{ __('Send') }}
                </x-primary-button>
            </div>
        </form>
    </x-planets-card>
</x-app-layout>