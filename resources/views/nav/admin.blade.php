<nav>
	<div class="logoWrapper">
		<a href="{{ route('dashboard') }}"><img class="logo" src="{{ asset('images/logo.png') }}"></a>
	</div>
	<div class="nav-wrapper">
		<a href="{{ route('dashboard') }}">
		<h2 class="Welcome-str">Gestionnaire de fiches métiers</h2>
		</a>
		<h3 class="padding-bottom">Bienvenue {{ Auth::user()->name }}</h3>


		<form action="{{ route('creerFM') }}" method="get">
		<button type="submit"  class="btn-nav">Créer une fiche métier</button>
		</form>


		<form action="{{ route('logout') }}" method="get">
		<button type="submit" name='deconnexion' value='deconnnexion' class="btn-nav">Déconnexion</button>
		</form>

	</div>
	
	<div class="triangle"></div>


	<div class="logoWrapperBottom">
		<img class="logo" src="{{ asset('images/logo-1.png') }}">
	</div>	
</nav>