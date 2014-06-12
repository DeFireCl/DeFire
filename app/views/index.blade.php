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

	@include ('include/menu')

	<article class="container_servicios">
		
		<h2>Servicios</h2>

		<div class='servicios'>
			<div class='srv'>
				<p class='titlesrv'>Diseño Web</p>
				<div class='descsrv'>
					<ul>
						<li>Resposive Design</li>
						<li>Diseño Web Móvil</li>
						<li>Diseño web Básico</li>
						<li>Diseño Web Corporativo</li>
						<li>Diseño Web Empresarial</li>
					</ul>

					<a href="/servicios">ver más</a>
				</div>
			</div>

			<div class='srv'>
				<p class='titlesrv'>Desarrollo Web</p>
				<div class='descsrv'>
					<ul>
						<li>Tiendas Online</li>
					</ul>
				</div>
			</div>

			<div class='srv'>
				<p class='titlesrv'>Desarrollo Sistemas Web</p>
				<div class='descsrv'></div>
			</div>
		</div>
	</article>

<!-- fin contenido-->
@stop