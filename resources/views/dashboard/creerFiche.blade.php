@extends('layout/app')


@section('content')



        <form class="form-group-add" name="FicheMetier"  enctype="multipart/form-data" method="POST">
        	@csrf
            <h2 class="text-center">Ajouter une fiche métier</h2> 
            
             @if($errors->has('code_ROM'))
                <p class="help is-danger">{{ $errors->first('code_ROM') }}</p>
            @endif
              <input class="form-group" type="text" name="code_ROM" placeholder="Code ROM format:  une LETTRE suivi de 4 CHIFFRES" /> 
          
           
            <input class="form-group" type="text" name="titre"  placeholder="Titre de la Fiche"  autocomplete="off">
          
                
                <textarea  class="form-group"rows="10" cols="32" type="text" name="description courte"  placeholder="Description courte du Métier"></textarea>
           
         
            <textarea class="form-group" rows="20" cols="50" name="description longue" placeholder="Description longue du Métier"></textarea>
            
               
               <div> <p>Ajouter une image : <input type="file" name="image" id="image" accept="image/*" required/></p> </div>

                <p>Ajouter un résumé PDF : <input type="file" name="pdf" id="pdf"/></p> </div>

               <!-- Changer er
                       
                    <div> <input class="form-group" type="text" name="competence 1"  placeholder="Compétence 1"  autocomplete="off"> 
                   <input class="form-group" type="text" name="competence 2"  placeholder="Compétence 2"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 3"  placeholder="Compétence 3"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 4"  placeholder="Compétence 4"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 5"  placeholder="Compétence 5"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 6"  placeholder="Compétence 6"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 7"  placeholder="Compétence 7"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 8"  placeholder="Compétence 8"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 9"  placeholder="Compétence 9"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 10"  placeholder="Compétence 10"  autocomplete="off">
               </div> -->

               

               <!-- COMPETENCES REPLACE -->
               
               
            
            <button name="submit" type="submit">Ajouter</button>
            <input name="ajouter-fiche" type="hidden" value="ajouter-fiche">

        </form>


@endsection