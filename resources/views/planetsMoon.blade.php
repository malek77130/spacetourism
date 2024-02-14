@use('App\Models\Planet')
@extends('layouts.default')
@section('content')
<main class=main_planet>
   <div class=soustitre_planet>
      <div class=titre_destination>
         <span class=numero>01</span>@lang('CHOISISSEZ VOTRE DESTINATION')
      </div>   
      <div class=contenu_planet>
         <img class=planet_affiche src="{{ asset('/images/moon.png') }}" alt=@lang('LUNE')>
      </div>
   </div>
        <div class=text_planet>           
            <div class=navigation_planets>
                <!-- Navigation Links -->
                <a href='{{route("moon",["locale"=>App::getLocale()])}}'>
                    <div class=box_nav_planet_selected>
                       @lang('LUNE')
                    </div>               
                </a>  
                 <!-- Lien pour la création d'une tâche -->
                    <a href='{{route("mars",["locale"=>App::getLocale()])}}'>
                    <div class=box_nav_planet>
                        MARS
                    </div>    
                    </a>
                    <!-- Lien pour la liste des tâches -->
                <a href='{{route("europa",["locale"=>App::getLocale()])}}'>
                    <div class=box_nav_planet>
                        @lang('EUROPE')
                    </div>    
                </a>       
                <a href='{{route("titan",["locale"=>App::getLocale()])}}'>
                    <div class=box_nav_planet>    
                        TITAN
                    </div>    
                </a>      
               @foreach(Planet::all() as $planetItem)
               <a href="{{route('planet',['locale'=>App::getLocale(),'planetName'=>$planetItem->title])}}">
                    <div class=box_nav_planet>    
                    {{ $planetItem->title }}
                    </div>    
               </a> 
               @endforeach
            </div>                
               <div class=titre_planet>
                  @lang('LUNE')
               </div>
               <div class=corps_planet>
               @lang("Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voayage de détente pour vous aider à prendre du recul et revenir requinquer. Pendant que vous y êtes, plangez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.")
               </div>     
               <div class=separateur_planet>

               </div>     
            <div class=infos_planet>
               <div class=titre_info_planet>
                  @lang('DISTANCE')
                  <div class=info_planet>384 000 KM</div>
               </div>
               <div class=titre_info_planet>
                  @lang('DURÉE')
                  <div class=info_planet>3 @lang('JOURS')</div>
               </div>
            </div>
         </div>
</main>
@stop