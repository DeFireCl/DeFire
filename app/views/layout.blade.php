<!DOCTYPE html>
<html lang="es" xml:lang="es">
  <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow">
    
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">

    <title>DeFire | @yield('title', 'Diseño y Desarrollo Web Freelance')</title>
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="desarrollo web, diseño web html5 css, html5, programacion, Chile" />
    <meta name="author" content="Sebastián Silva carrasco">
    
    
    {{-- Bootstrap --}}
    {{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
    
    
    {{-- jQuery UI v1.9.2--}}
    {{ HTML::style('assets/css/jqueryui.css', array('media' => 'screen')) }}

	{{-- Style --}}
    {{ HTML::style('assets/css/style.css', array('media' => 'screen')) }}
    

    {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      {{ HTML::script('assets/js/html5shiv.js') }}
      {{ HTML::script('assets/js/respond.min.js') }}
    <![endif]-->
  </head>
  <body>

    @include ('header') 



    @yield('content')
    
    
	
	@include ('footer') 




    {{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}

    {{-- jQuery 1.11.0 --}}
    {{ HTML::script('assets/js/jquery.min.js') }}
    
  	{{ HTML::script('assets/js/jquery-ui-1.9.2.custom.min.js') }}

    {{-- Include all compiled plugins (below), or include individual files as needed --}}
    {{ HTML::script('assets/js/bootstrap.min.js') }}  

    {{ HTML::script('assets/js/admin.js') }}

  </body>
</html>