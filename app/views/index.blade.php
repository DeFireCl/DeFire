@extends ('layout')

@section ('title') Diseño y Desarrollo Web Freelance @stop
@section ('description') Profesionales Freelance, especializados en el diseño y creación de páginas y sitios web, creamos herramientas y soluciones para tu empresa o proyecto personal.@stop

@section ('content')
<!-- aquí va contenido-->

	<header>

		<div class="logo_flama"></div>
		<div class="logo_nombre"></div>
		<div class="rectangulo"></div>

		<article class="container">
			<div class="jumbotron">
				<h1>¡ Desarrollo y Diseño Web Freelance !</h1>
				<p>Somos un grupo de profesionales freelance, expertos en el diseño y desarrollo de sitios web !</p>
				<p class='desc'></p>
			</div>
		</article>
	</header>

	@include ('menu')

	<article class="container">
		<h2>Servicios</h2>

		<div class='servicios'>
			<div class='srv'>srv uno</div>
			<div class='srv'>srv dos</div>
			<div class='srv'>srv tres</div>
		</div>
	</article>

<!-- fin contenido-->
@stop