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
            <a href='{{route("technologiePage2",["locale"=>App::getLocale()])}}' class=bouton_techno_selected><div class=numero_boutons>2</div></a>
            <a href='{{route("technologiePage3",["locale"=>App::getLocale()])}}' class=bouton_techno><div class=numero_boutons>3</div></a>
            @foreach(Technologie::all() as $technologieItem)
            <a href="{{route('technologieAutre',['locale'=>App::getLocale(),'technologieName'=>$technologieItem->title])}}" class=bouton_techno><div class=numero_boutons>{{ $loop->index +4}}</div></a>
            @endforeach
         </div>
         <div class=texte_technologie>
            <div class=titre_technologie>
               @lang('LE SPATIOPORT')
            </div>
            <div class=corps_technologie>
            @lang("Un spatioport ou cosmodrome est un site de lancement (ou de réception) d'engins spatiaux, par analogie avec le port maritime pour les navires ou l'aéroport pour les aéronefs. Basé au célèbre Cap Canaveral, notre spatioport est idéalement situé pour profiter de la rotation de la Terre pour le lancement.")        
            </div>
         </div>
         <div class=image_technologie>
            <img src="{{ asset('/images/Soyuz_TMA-5_launch2.jpg') }}" alt="Launch2">
         </div>
      </div>
   </div>
@stop