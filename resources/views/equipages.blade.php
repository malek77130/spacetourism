@extends('layouts.default')
@section('content')
<div id="slider-wrapper">
  <div class="inner-wrapper">
    <input checked type="radio" name="slide" class="control" id="Slide1" />
    <label for="Slide1" id="s1"></label>
    <input type="radio" name="slide" class="control" id="Slide2" />
    <label for="Slide2" id="s2"></label>
    <input type="radio" name="slide" class="control" id="Slide3" />
    <label for="Slide3" id="s3"></label>
    <input type="radio" name="slide" class="control" id="Slide4" />
    <label for="Slide4" id="s4"></label>
    @foreach($crews as $crew)
    <input type="radio" name="slide" class="control" id="Slide{{ $loop->index +5}}" />
    <label for="Slide{{ $loop->index +5}}" id="s{{ $loop->index +5}}"></label>
    @endforeach
    <div class="overflow-wrapper">
      <div class="slides"><div class="slide" href="">
<div class=equipage1>
   <div class=main_equipage>
      <div class=left_equipage>
         <div class=titre_equipe>
            <span class=numero>02</span>@lang("RENCONTREZ L'ÉQUIPAGE")
         </div>
         <div class=titre_equipage>
            @lang("COMMANDANT")
         </div>
         <div class=nom_equipage>
            DOUGLAS
         </div>
         <div class=corps_equipage>
         @lang("Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Corps des Marines et un ancien astronaute de la NASA. Il s'est lancé dans l'espace pour la troisième fois en tant que commandant du vaissaux Crew Dragon Demo-2.")
         </div></div>
         <div class=right_equipage>
            <img src="{{ asset('/images/DouglasHurley.png') }}" alt="DouglasHurley">
         </div>
      </div>
   </div>   
</div>
      <div class="slide" href=""><div class=equipage2>
<div class=main_equipage>
      <div class=left_equipage>
         <div class=titre_equipe>
            <span class=numero>02</span>@lang("RENCONTREZ L'ÉQUIPAGE")
         </div>
         <div class=titre_equipage>
            @lang("SPÉCIALISTE DE MISSION")
         </div>
         <div class=nom_equipage>
            MARK SHUTTLEWORTH
         </div>
         <div class=corps_equipage>
         @lang("Mark Richard Shuttleworth est le fondateur et PDG de Canonical, la société derrière le système d'exploitation Ubuntu basé sur Linux. Shuttleworth est devenu le premier sud-africain à voyager dans l'espace en tant que touriste spatial.")         </div>
      </div>
      <div class=right_equipage>
         <img src="{{ asset('/images/MarkShuttleworth.png') }}" alt="MarkShuttleworth">
      </div>
   </div>
</div> </div>
      <div class="slide" href=""><div class=equipage3>
<div class=main_equipage>
      <div class=left_equipage>
         <div class=titre_equipe>
            <span class=numero>02</span>@lang("RENCONTREZ L'ÉQUIPAGE")
         </div>
         <div class=titre_equipage>
            @lang("PILOTE")
         </div>
         <div class=nom_equipage>
            VICTOR GLOVER
         </div>
         <div class=corps_equipage>
         @lang("Pilote du premier vol opérationnel du SpaceX Crew Dragon à destination de la Station Spatiale Internationale. Glover est commandant dans la marine américaine, où il pilote un F/A-18. Il a été membre de l'équipage de l'Expedition 64 et a servi comme ingénieur de vol des systèmes de station.")         </div>
      </div>
      <div class=right_equipage>
         <img src="{{ asset('/images/Victor Glover.png') }}" alt="Victor Glover">
      </div>
   </div>
</div>  
</div>
      <div class="slide" href="">
            <div class=equipage4>
                  <div class=main_equipage>
                     <div class=left_equipage>
                        <div class=titre_equipe>
                           <span class=numero>02</span>@lang("RENCONTREZ L'ÉQUIPAGE")
                        </div>
                        <div class=titre_equipage>
                           @lang("INGÉNIEURE DE VOL")
                        </div>
                        <div class=nom_equipage>
                           ANOUSHEH ANSARI
                        </div>
                        <div class=corps_equipage>
                        @lang("Anousheh Ansari est une ingénieure Irano-Américaine et cofondatrice de Prodea Systems. Ansari était la quatrième touriste de l'espace autofinancée, la première femme autofinancée à se rendre à l'ISS, et la première iranienne dans l'espace.")     </div>
                     </div>
                     <div class=right_equipage>
                        <img src="{{ asset('/images/Anousheh Ansari.png') }}"alt="AnoushehAnsari">
                     </div>
                  </div>
               </div>
            </div> 
            @foreach($crews as $crew)
            <div class="slide" href="">
            <div class="equipage{{ $loop->index +5}}">
                  <div class=main_equipage>
                     <div class=left_equipage>
                        <div class=titre_equipe>
                           <span class=numero>02</span>@lang("RENCONTREZ L'ÉQUIPAGE")
                        </div>
                        <div class=titre_equipage>
                        @lang("$crew->role")
                        </div>
                        <div class=nom_equipage>
                        @lang("$crew->title")
                        </div>
                        <div class=corps_equipage>
                        @lang("$crew->detail")</div>
                     </div>
                     <div class=right_equipage>
                        <img src="data:image/png;base64,{{ $crew->image_path }}" alt="{{ $crew->title }}">
                     </div>
                  </div>
               </div>
            </div> 
            @endforeach 
         </div>
      </div>
    </div>
  </div>
</div>
      
@stop