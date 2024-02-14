@use('App\Models\Planet')
@extends('layouts.default')
@section('content')
<main class=main_planet>
   <div class=soustitre_planet>
      <div class=titre_destination>
         <span class=numero>01</span>@lang('CHOISISSEZ VOTRE DESTINATION')
      </div>   
      <div class=contenu_planet>
         <img class=planet_affiche src="data:image/png;base64,{{ $planet->image_path }}" alt="{{ $planet->title }}">
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
                  @if(($planetItem->title)==($planet->title))
                  <div class=box_nav_planet_selected>    
                    {{ $planetItem->title }}
                    </div> 
                  @else
                    <div class=box_nav_planet>    
                    {{ $planetItem->title }}
                    </div>  
                  @endif  
               </a> 
               @endforeach
            </div>                
               <div class=titre_planet>
                  @lang("$planet->title")
               </div>
               <div class=corps_planet>
               @lang("$planet->detail")
               </div>     
               <div class=separateur_planet>

               </div>     
            <div class=infos_planet>
               <div class=titre_info_planet>
                  @lang('DISTANCE')
                  <div class=info_planet>{{ $planet->distance }}</div>
               </div>
               <div class=titre_info_planet>
                  @lang('DURÉE')
                  <div class=info_planet>{{ $planet->duree }}</div>
               </div>
            </div>
         </div>
</main>
@stop