@extends('layout/app')


@section('content')


<div class="item-wrapper">
	<div class="absolute-btn">
		<form action="{{ route('AddAdmin') }}" method="get">
		<button type="submit" class="btn-nav">Ajouter</button>
		</form>
	</div>
<h2 class="margin-bottom">Liste Admins</h2>
<div class=itemPrincipal>
<div class=item><p>Nom</p></div>
<div class=item><p>Mail</p></div>
<div class=item><p>Role</p></div>
<div class=item><p>Modifier</p></div>
<div class=item><p>Supprimer</p></div>
</div>
</div>

@forelse($admins as $data)

<div class="item-wrapper">
<div class='itemJeux'>
<div class='item'>
<p>{{ $data->name }}</p></div>
<div class='item'>
<p>{{ $data->email }}</p></div>
<div class='item'>
<p>{{ $data->role_id }}</p></div>
<div class='item'>
<form action="{{ route('UpdateAdmin') }}" method="get">
	<button type="submit" name='updateAdmin' value='{{ $data->email }}' class="btn-nav">Modifier</button>
	</form>
</div>

<form action="{{ route('DeleteAdmin') }}" method="get">
	<button type="submit" name='deleteAdmin' value='{{ $data->email }}' class="btn-nav">Supprimer</button>
	</form>
</div>


</div>
</div>

@empty
<p>y a r</p>
          

@endforelse
@endsection