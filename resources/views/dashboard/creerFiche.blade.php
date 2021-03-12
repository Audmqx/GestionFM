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

             
                    
              <div> 
                   <input class="form-group" type="text" name="competence1"  placeholder="Compétence 1"  autocomplete="off"> 
                   <input class="form-group" type="text" name="competence2"  placeholder="Compétence 2"  autocomplete="off">
                   <input class="form-group" type="text" name="competence3"  placeholder="Compétence 3"  autocomplete="off">
                   <input class="form-group" type="text" name="competence4"  placeholder="Compétence 4"  autocomplete="off">
                   <input class="form-group" type="text" name="competence5"  placeholder="Compétence 5"  autocomplete="off">
                   <input class="form-group" type="text" name="competence6"  placeholder="Compétence 6"  autocomplete="off">
                   <input class="form-group" type="text" name="competence7"  placeholder="Compétence 7"  autocomplete="off">
                   <input class="form-group" type="text" name="competence8"  placeholder="Compétence 8"  autocomplete="off">
                   <input class="form-group" type="text" name="competence9"  placeholder="Compétence 9"  autocomplete="off">
                   <input class="form-group" type="text" name="competence10"  placeholder="Compétence 10"  autocomplete="off">
              </div> 

               

              
               
               
            
            <button name="submit" type="submit">Ajouter</button>
          

        </form>


@endsection