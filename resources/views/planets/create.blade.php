<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a planet') }}
        </h2>
    </x-slot>
    <x-planets-card>
        <!-- Message de réussite -->
        @if (session()->has('message'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif
        <form id=formulaire action="{{ route('planets.store') }}" method="post" enctype="multipart/form-data">
            @csrf
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
            <!-- distance -->
            <div>
                <x-input-label for="distance" :value="__('Distance')" />
                <x-text-input  id="distance" class="block mt-1 w-full" type="text" name="distance" :value="old('distance')" required autofocus />
                <x-input-error :messages="$errors->get('distance')" class="mt-2" />
            </div>
            <!-- duree -->
            <div>
                <x-input-label for="duree" :value="__('Duree')" />
                <x-text-input  id="duree" class="block mt-1 w-full" type="text" name="duree" :value="old('duree')" required autofocus />
                <x-input-error :messages="$errors->get('duree')" class="mt-2" />
            </div>
            <div class="row mb-3">
                <x-input-label for="image_path" :value="__('Planet Pic')" />
                <x-text-input  id="image_path" class="block mt-1 w-full" type="file" name="image_path" required autofocus />
                <x-input-error :messages="$errors->get('image_path')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button id="buttonSend" class="ml-3">
                    {{ __('Send') }}
                </x-primary-button>
            </div>
        </form>
    </x-planets-card>
</x-app-layout>
<script>
    let buttonSend = document.getElementById("buttonSend")
    let formulaire = document.getElementById("formulaire")
    let data = new FormData(formulaire)
    let planetData = {}

    buttonSend.addEventListener("onclick", async(e)=>{
        e.preventDefault()
        for (const [key, value] of data) {
            planetData[key]=value
        }
        planetData = JSON.stringify(planetData)
        const response = await fetch(formulaire.action,{
            method:"POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: planetData
        })
        if (response.status=200){
            window.location.href = "http://spacetourism.test/planets"
        }
    })
    
</script>