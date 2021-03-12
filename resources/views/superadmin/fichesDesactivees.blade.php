@extends('layout/app')


@section('content')

@forelse($FicheMetier as $data)

      <div class="fiche-metier-wrapper">
      	<div class="absolute-btn">
		<form action="{{ route('softrollback') }}" method="get">
		<button type="submit" name='activer' value='{{ $data->code_ROM }}' class="btn-nav">Activer</button>
		</form>
		</div>

			<div class="absolute-btn deux">
		<form action="{{ route('deleteFM') }}" method="get">
		<button type="submit" name='supprimerfiche' value='{{ $data->code_ROM }}' class="btn-nav">Supprimer</button>
		</form>
		</div>

      	<div class="grisee"></div>
    <div class="img-wrapper"> <img class="img-fiche-metier" src="{{ asset("storage/$data->code_ROM") }}.jpg"> <div class="bar"></div> </div>
    <div class="str-wrapper absoluteTR"><p>{{ $data->code_ROM }}</p></div>
	<a class="link" href="admin/{{ $data->code_ROM }}">
    <div class="str-wrapper"><h2>{{ $data->titre }}</h2></div>
    <div class="str-wrapper"><p>{{ $data->description_courte }}</p></div>
</div>
</a>
</div>
@empty
<p>y a r</p>
          

@endforelse
@endsection
 
     