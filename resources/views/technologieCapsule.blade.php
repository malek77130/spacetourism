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
            <a href='{{route("technologiePage3",["locale"=>App::getLocale()])}}' class=bouton_techno_selected><div class=numero_boutons>3</div></a>
            @foreach(Technologie::all() as $technologieItem)
            <a href="{{route('technologieAutre',['locale'=>App::getLocale(),'technologieName'=>$technologieItem->title])}}" class=bouton_techno><div class=numero_boutons>{{ $loop->index +4}}</div></a>
            @endforeach
         </div>
         <div class=texte_technologie>
            <div class=titre_technologie>
               @lang("LA CAPSULE SPATIALE")
            </div>
            <div class=corps_technologie>
            @lang("Une capsule spatiale est un engin spatial habitable qui utilise une capsule à corps émoussé pour rentrer dans l'atmosphère terrestre sans ailes. Notre capsule est l'endroit où vous passerez votre temps pendant le vol. Il comprend une salle de gym, un cinéma et de nombreuses autres activités pour vous divertir")           
          </div>
         </div>
         <div class=image_technologie>
            <img src="{{ asset('/images/Soyuz_Tma-5_launch3.jpg')}}" alt="Launch3">
         </div>
      </div>
   </div>
@stop