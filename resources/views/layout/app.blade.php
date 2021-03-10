

<!DOCTYPE html>


<html>
    <head>
       <title>DASHBOARD fiches métiers</title>
       <meta charset="utf-8">
       <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}" type="text/css">
       <script src="javascript/js.js"></script>
    </head>









<body>



<section class="dashboard">

@auth
    	
    @if ( Auth::user()->role_id == "admin" )
	@include('nav/admin')
	@elseif ( Auth::user()->role_id == "super" ) 
	@include('nav/super')
	@endif

@endauth

@guest
    @include('nav/nav')
@endguest







@yield('content')

</section>