
@extends('layout/app')


@section('content')
<div class="main-wrapper">
<form class="formConnexion"  method="post">
            @csrf

            <div class="white">
            <h2 class="text-center">Connexion</h2>
            <div class="bar"></div>
            </div>



            <div class="form-group width-70">
                <p><em>Email :</em></p>
                <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
            </div>

            <div class="form-group width-70">
                <p><em>Mot de passe :</em></p>
                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
            </div>

            <div class="form-group width-70">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                Se souvenir de moi
            </label>

            <div class="form-group width-70">
                    <button type="submit" class="btn-submit">Connexion</button>
            </div>

             @if($errors->has('email'))
                <p class="help is-danger">{{ $errors->first('email') }}</p>
            @endif
            </div>

                                    
</form>
</div>


@endsection