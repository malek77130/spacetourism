<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Show a planet')
        </h2>
    </x-slot>
    <x-planets-card>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Title')</h3>
        <p>{{ $planet->title }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Detail')</h3>
        <p>{{ $planet->detail }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Distance')</h3>
        <p>{{ $planet->distance }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Duree')</h3>
        <p>{{ $planet->duree }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Image')</h3>
        <p>{{ $planet->image_path }}</p>
        <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Date creation')</h3>
        <p>{{ $planet->created_at->format('d/m/Y') }}</p>
        @if($planet->created_at != $planet->updated_at)
          <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Last update')</h3>
          <p>{{ $planet->updated_at->format('d/m/Y') }}</p>
        @endif
    </x-planets-card>
</x-app-layout>