@use('App\Models\Technologie')
@extends('layouts.default')
@section('content')
   <div class=main_technologie>
      <div class=titre_lancement>
         <span class=numero>03</span>@lang('LANCEMENT SPATIAL') 101
      </div>
      <div class=ensemble_technologie>
         <div class=boutons_technologie>
            <a href='{{route("technologie",["locale"=>App::getLocale()])}}' class=bouton_techno><div class=numero_boutons>1</div></a>
            <a href='{{route("technologiePage2",["locale"=>App::getLocale()])}}' class=bouton_techno><div class=numero_boutons>2</div></a>
            <a href='{{route("technologiePage3",["locale"=>App::getLocale()])}}' class=bouton_techno><div class=numero_boutons>3</div></a>
            @foreach(Technologie::all() as $technologieItem)
            @if(($technologieItem->title)==($technologie->title))
            <a href='{{route("technologieAutre",["locale"=>App::getLocale(),"technologieName"=>$technologieItem->title])}}' class=bouton_techno_selected><div class=numero_boutons>{{ $loop->index +4}}</div></a>
            @else
            <a href='{{route("technologieAutre",["locale"=>App::getLocale(),"technologieName"=>$technologieItem->title])}}' class=bouton_techno><div class=numero_boutons>{{ $loop->index +4}}</div></a>
            @endif
            @endforeach
         </div>
         <div class=texte_technologie>
            <div class=titre_technologie>
            @lang("$technologie->title")
            </div>
            <div class=corps_technologie>
            @lang("$technologie->detail")</div>
         </div>
         <div class=image_technologie>
            <img src="data:image/png;base64,{{ $technologie->image_path }}" alt="{{ $technologie->title}}">
         </div>
      </div>
   </div>
@stop