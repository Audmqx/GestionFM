@extends('layout/app')


@section('content')



  <form class="form-group-add" name="ModifierFicheMetier"  method="POST">
            <h2 class="text-center">Modifier {{ $Admin->name }}</h2> 
            @csrf
            
            <p>Nom</p>
              <input class="form-group" type="text" name="nom" placeholder="nom" value="{{ $Admin->name }}" /> 
          
           <p>E-mail</p>
            <input class="form-group" type="text" name="mail"  placeholder="email" value="{{ $Admin->email }}" autocomplete="off">

			<p>Mot de passe</p>
            <input class="form-group" type="text" name="password"  placeholder="password"  autocomplete="off">

            <p>Confirmation du Mot de passe</p>
            <input class="form-group" type="text" name="password_retype"  placeholder="Confirmation password"  autocomplete="off">

             <label><p>Quelle rôle souhaitez-vous lui attribuer ?</label>
            <select name="role" required>
             <option value="super">Super-Admin</option>
             <option value="admin">Admin</option>
            </select> 
            </P>
          
                     
            <button name="submit" type="submit">Modifier</button>

            <input type="hidden" name="email" value="{{ $Admin->email }}"

        </form>




@endsection