<nav>
	<div class="logoWrapper">
		<a href="{{ route('dashboard') }}"><img class="logo" src="images/logo.png"></a>
	</div>
	<div class="nav-wrapper">

		<a href="{{ route('dashboard') }}">
		<h2 class="Welcome-str">Gestionnaire de fiches métiers</h2>
		</a>
		<h3 class="padding-bottom">Bienvenue {{ Auth::user()->name }}</h3>


		<form action="ajouter-fiche.php" method="get">
		<button type="submit" name='creationFicheMetier' value='creationFicheMetier' class="btn-nav">Créer une fiche métier</button>
		</form>


		<h2 class="Welcome-str">Super Admin menu</h2>

		<form action="fiches-desactivees.php" method="get">
		<button type="submit" name='fiche-desactive' value='fiche-desactive' class="btn-nav">Fiches désactivées</button>
		</form>

		<form action="list-admins.php" method="get">
		<button type="submit" name='list-admins' value='list-admins' class="btn-nav">Gestion Admins</button>
		</form>

		<form action="{{ route('logout') }}" method="get">
		<button type="submit" name='deconnexion' value='deconnnexion' class="btn-nav">Déconnexion</button>
		</form>

	</div>
	
	<div class="triangle"></div>


	<div class="logoWrapperBottom">
		<img class="logo" src="images/logo-1.png">
	</div>	
</nav>