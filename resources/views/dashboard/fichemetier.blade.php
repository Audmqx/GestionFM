@extends('layout/app')


@section('content')


<div class="fiche-metier-description">
	<div class="absolute-btn deux">
		<form action="{{ route('modifierFM') }}" method="get">
		<button type="submit" name='fiche' value='{{ $data->code_ROM }}' class="btn-nav">Modifier</button>
		</form>
	</div>

	<div class="absolute-btn">
		<form action="{{ route('desactiverFM') }}" method="get">
		<button type="submit" name='supprimer-fiche' value='supprimer-fiche' class="btn-nav">Supprimer</button>
		<input name="desactiverfiche" type="hidden" value="{{ $data->code_ROM }}">
		</form>
	</div>



	<div class="row">
		<div class="img-wrapper-description"> <img class="img-fiche-metier" src="{{ asset("storage/$data->code_ROM") }}.jpg"> <div class="bar"></div> </div>

		<div class="column padding-left">
			<div class="str-wrapper"><p>CODE ROM : {{ $data->code_ROM }}</p></div>
			<div class="str-wrapper"><h2> TITRE : {{ $data->titre }}</h2></div>
			<div class="str-wrapper"><p>DESCRIPTION COURTE : {{ $data->description_courte }}</p></div>
		</div>
	</div>

	<div class="column">
	<div class="str-wrapper"><p>DESCRIPTION LONGUE : {{ $data->description_longue }}</p></div>

@forelse($competences as $competence)
		<div class="str-wrapper">

		<div class="competence"><p>{{ $competence->nomCompetence }}</p></div>

		</div>
@empty
<p> y a r </p>
@endforelse

	</div>

</div>

@endsection