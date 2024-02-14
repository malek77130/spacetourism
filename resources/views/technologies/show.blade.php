<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Show a technologie')
        </h2>
    </x-slot>
    <x-planets-card>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Title')</h3>
        <p>{{ $technology->title }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Detail')</h3>
        <p>{{ $technology->detail }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Image')</h3>
        <p>{{ $technology->image_path }}</p>
    </x-planets-card>
</x-app-layout>