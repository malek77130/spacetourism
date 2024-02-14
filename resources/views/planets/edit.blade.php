<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit a crew') }}
        </h2>
    </x-slot>
    <x-planets-card>
        <!-- Message de réussite -->
        @if (session()->has('message'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('planets.update', $planet->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <!-- Titre -->
            <div>
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $planet->title)" required autofocus />
            
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            <!-- Détail -->
            <div class="mt-4">
                <x-input-label for="detail" :value="__('Detail')" />
                <x-textarea class="block mt-1 w-full" id="detail" name="detail">{{ old('detail', $planet->detail) }}</x-textarea>
                
                <x-input-error :messages="$errors->get('detail')" class="mt-2" />            
            </div>
            <div class="mt-4">
                <x-input-label for="distance" :value="__('distance')" />
                <x-textarea class="block mt-1 w-full" id="distance" name="distance">{{ old('distance', $planet->distance) }}</x-textarea>
                
                <x-input-error :messages="$errors->get('distance')" class="mt-2" />            
            </div>
            <div class="mt-4">
                <x-input-label for="duree" :value="__('duree')" />
                <x-textarea class="block mt-1 w-full" id="duree" name="duree">{{ old('duree', $planet->duree) }}</x-textarea>
                
                <x-input-error :messages="$errors->get('duree')" class="mt-2" />            
            </div>
            <!-- Tâche accomplie -->
            <div class="mt-4">
                <x-input-label for="image_path" :value="__('Planet Pic')" />
                <x-text-input class="block mt-1 w-full" id="image_path" type="file" name="image_path">{{ old('image_path', $planet->image_path) }}</x-textarea>
                
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