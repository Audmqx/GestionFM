 @extends('layout/app')


@section('content')

        <form class="form-group-add" enctype="multipart/form-data" name="ModifierFicheMetier" method="POST">

          @csrf
       {{--    @method('PUT') --}}

            <h2 class="text-center">Modifier une fiche métier</h2> 
              <input class="form-group" type="text" name="code_ROM" placeholder="{{ $data->code_ROM }}" value="{{ $data->code_ROM }}" />
          
           
            <input class="form-group" type="text" name="titre"  placeholder="{{ $data->titre }}" value="{{ $data->titre }}"  autocomplete="off">
          
                
                <textarea  class="form-group"rows="10" cols="32" type="text" name="description_courte"  placeholder="{{ $data->description_courte }}">{{ $data->description_courte }}</textarea>
           
         
            <textarea class="form-group" rows="20" cols="50" name="description_longue" placeholder="{{ $data->description_longue }}">{{ $data->description_longue }}</textarea>
            
               
               <div> <p>Ajouter une image : <input type="file" name="image" id="image" accept="image/*" /></p> </div>

              <!-- <div> <input class="form-group" type="text" name="competence 1"  placeholder="Compétence 1"  autocomplete="off"> 
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
            
            <button name="modifier-fiche-submit" type="submit">Modifier</button>
        </form>
@endsection