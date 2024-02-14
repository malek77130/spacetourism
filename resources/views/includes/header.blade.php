@php
$param=Route::current()->parameters();
unset($param["locale"]);
$paramObject=new ArrayObject($param);
$en=$paramObject->getArrayCopy();
$fr=$paramObject->getArrayCopy();
$en["locale"]="en";
$fr["locale"]="fr";
@endphp
<nav class=header>
    <div class=box_logo>
            <a href='/'>
                <img src="{{ asset('\images\Logo.png') }}" alt="logo"/>
            </a>
    </div>
    <nav role="navigation">
            <div id="menuToggle">
              <!--
              A fake / hidden checkbox is used as click reciever,
              so you can use the :checked selector on it.
              -->
              <input type="checkbox" />
              
              <!--
              Some spans to act as a hamburger.
              
              They are acting like a real hamburger,
              not that McDonalds stuff.
              -->
              <span></span>
              <span></span>
              <span></span>
              
              <!--
              Too bad the menu has to be inside of the button
              but hey, it's pure CSS magic.
              -->
              <ul id="menu">
                <a href='{{route("home",["locale"=>App::getLocale()])}}'><li>00 @lang('ACCUEIL')</li></a>
                <a href='{{route("moon",["locale"=>App::getLocale()])}}'><li>01 DESTINATION</li></a>
                <a href='{{route("equipages",["locale"=>App::getLocale()])}}'><li>02 @lang('EQUIPAGE')</li></a>
                <a href='{{route("technologie",["locale"=>App::getLocale()])}}'><li>03 @lang('TECHNOLOGIE')</li></a>
                <div id="language">
                  <a href="{{route(Route::current()->getName(), $en)}}" title="English"><img src="http://upload.wikimedia.org/wikipedia/commons/0/07/Icons-flag-uk.png" alt="English" /></a>
                  <a href="{{route(Route::current()->getName(), $fr)}}" title="French"><img src="https://cdn1.iconfinder.com/data/icons/famfamfam_flag_icons/fr.png" alt="French" /></a>
                </div>
              </ul>
            </div>
        </nav><!-- Primary Navigation Menu -->
    <div class=decoration_header></div>
    <div class=background_header>
        <div class=container_header>
                <!-- Navigation Links -->
                <a aria-label="Accueil" href='{{route("home",["locale"=>App::getLocale()])}}'>
                    <div class=box_nav>
                       <span class=bold>00</span> {{ __('ACCUEIL') }}
                    </div>               
                </a>  
                 <!-- Lien pour la création d'une tâche -->
                    <a aria-label="Destination" href='{{route("moon",["locale"=>App::getLocale()])}}'>
                    <div class=box_nav>
                        <span class=bold>01</span> DESTINATION
                    </div>    
                    </a>
                    <!-- Lien pour la liste des tâches -->
                <a aria-label="Equipage" href='{{route("equipages",["locale"=>App::getLocale()])}}'>
                    <div class=box_nav>
                        <span class=bold>02</span> {{ __('EQUIPAGE') }}
                    </div>    
                </a>       
                <a aria-label="Technologie" href='{{route("technologie",["locale"=>App::getLocale()])}}'>
                    <div class=box_nav>    
                        <span class=bold>03</span> {{ __('TECHNOLOGIE') }}
                    </div>    
                </a>     
                <div id="language">

                  <a href="{{route(Route::current()->getName(), $en)}}" id="englishButton" title="English"><img src="http://upload.wikimedia.org/wikipedia/commons/0/07/Icons-flag-uk.png" alt="English" /></a>
                  <a href="{{route(Route::current()->getName(), $fr)}}" id="frenchButton" title="French"><img src="https://cdn1.iconfinder.com/data/icons/famfamfam_flag_icons/fr.png" alt="French" /></a>
                </div>
        </div>                
    </div>   
</nav>
