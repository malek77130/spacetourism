
@extends('layouts.default')
@section('content')
<main class=main_welcome>
   <div></div>
   <div class=contenu_welcome>
        <div class=text_welcome>
            <div class=soustitre_welcome>
               @lang('DONC VOUS VOULEZ VOYAGER DANS') 
            </div>
            <div class=titre_welcome>
               @lang("L'ESPACE")
            </div>
            <div class=corps_welcome>
               @lang("Soyons objectifs; si vous voulez aller dans l'espace, vous pouvez aller véritablement dans le véritable espace et non juste planer sur le bord de celui-ci. Eh bien, asseyez-vous parceque nous allons vous donner une expérience vraiment extraordinaire!")
            </div>          
         </div>
         <a class=bouton_lien aria-label="bouton explorez" href='{{route("moon",["locale"=>App::getLocale()])}}'>
         <div class=bouton_welcome>
                  @lang('EXPLORER')
         </div>
         </a>
   </div>
</main>
@stop