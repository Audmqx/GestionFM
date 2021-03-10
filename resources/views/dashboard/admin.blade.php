@extends('layout/app')


@section('content')

@forelse($FicheMetier as $data)


<div class="fiche-metier-wrapper">
    <div class="img-wrapper"> <img class="img-fiche-metier" src="{{ asset("storage/$data->code_ROM") }}.jpg"> <div class="bar"></div> </div>
    <div class="str-wrapper absoluteTR"><p>{{ $data->code_ROM }}</p></div>
<a class="link" href="admin/{{ $data->code_ROM }}">
    <div class="str-wrapper"><h2>{{ $data->titre }}</h2></div>
    <div class="str-wrapper"><p>{{ $data->description_courte }}</p></div>
</div>
</a>

@empty
<p>y a r</p>
          

@endforelse
@endsection