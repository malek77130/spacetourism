@use('App\Models\Planet')
@extends('layouts.default')
@section('content')
<main class=main_planet>
   <div class=soustitre_planet>
      <div class=titre_destination>
         <span class=numero>01</span>@lang('CHOISISSEZ VOTRE DESTINATION')
      </div>   
      <div class=contenu_planet>
         <img class=planet_affiche src="{{ asset('/images/Europa.png ') }}" alt=europa>
      </div>
   </div>
        <div class=text_planet>           
            <div class=navigation_planets>
                <!-- Navigation Links -->
                <a href='{{route("moon",["locale"=>App::getLocale()])}}'>
                    <div class=box_nav_planet>
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
                    <div class=box_nav_planet_selected>
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
                  @lang('EUROPE')
               </div>
               <div class=corps_planet>
               @lang("La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, europe est le rêve des amoureux de  l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détentre dans votre confortable chalet hivernal.")           </div>     
               <div class=separateur_planet>

               </div>     
            <div class=infos_planet>
               <div class=titre_info_planet>
                  @lang('DISTANCE')
                  <div class=info_planet>628 GM</div>
               </div>
               <div class=titre_info_planet>
                  @lang('DURÉE')
                  <div class=info_planet>3 @lang('ANS')</div>
               </div>
            </div>
         </div>
</main>
@stop