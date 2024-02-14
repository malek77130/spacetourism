@use('App\Models\Planet')
@extends('layouts.default')
@section('content')
<main class=main_planet>
   <div class=soustitre_planet>
      <div class=titre_destination>
         <span class=numero>01</span>@lang('CHOISISSEZ VOTRE DESTINATION')
      </div>   
      <div class=contenu_planet>
         <img class=planet_affiche src="{{ asset('/images/Mars.png') }}" alt=mars>
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
                    <div class=box_nav_planet_selected>
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
                  MARS
               </div>
               <div class=corps_planet>
               @lang("N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demie la taille de l'Everest !")
               </div>     
               <div class=separateur_planet>

               </div>     
            <div class=infos_planet>
               <div class=titre_info_planet>
                  @lang('DISTANCE')
                  <div class=info_planet>225GM</div>
               </div>
               <div class=titre_info_planet>
                  @lang('DURÉE')
                  <div class=info_planet>9 @lang('MOIS')</div>
               </div>
            </div>
         </div>
</main>
@stop