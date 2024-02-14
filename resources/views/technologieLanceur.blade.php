@use('App\Models\Technologie')
@extends('layouts.default')
@section('content')
   <div class=main_technologie>
      <div class=titre_lancement>
         <span class=numero>03</span>@lang('LANCEMENT SPATIAL') 101
      </div>
      <div class=ensemble_technologie>
         <div class=boutons_technologie>
            <a href='{{route("technologie",["locale"=>App::getLocale()])}}' class=bouton_techno_selected><div class=numero_boutons>1</div></a>
            <a href='{{route("technologiePage2",["locale"=>App::getLocale()])}}' class=bouton_techno><div class=numero_boutons>2</div></a>
            <a href='{{route("technologiePage3",["locale"=>App::getLocale()])}}' class=bouton_techno><div class=numero_boutons>3</div></a>
            @foreach(Technologie::all() as $technologieItem)
            <a href="{{route('technologieAutre',['locale'=>App::getLocale(),'technologieName'=>$technologieItem->title])}}" class=bouton_techno><div class=numero_boutons>{{ $loop->index +4}}</div></a>
            @endforeach
         </div>
         <div class=texte_technologie>
            <div class=titre_technologie>
               @lang("LE LANCEUR")
            </div>
            <div class=corps_technologie>
            @lang("Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l'espace, habituellement vers l'orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !")
            </div>
         </div>
         <div class=image_technologie>
            <img src="{{ asset('/images/Soyuz_TMA-5_launch.jpg') }}" alt="Launch1">
         </div>
      </div>
   </div>
@stop