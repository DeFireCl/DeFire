@extends ('layout')

@section ('title') Nosotros @stop
@section ('description') la pasión y la motivación la llevamos plasmada en nuestro trabajo.@stop

@section ('content')
<!-- aquí va contenido-->
	
	@include ('include/menu')

	<div class="nosotros">
		<ul class="rp-grid">
		    <li>
		    	<div class="rp-item rp-img-1">
			      	<div class="rp-info">
				        <h3>SEBASTIAN SILVA</h3>
				        <p>PROGRAMADOR Y DISEÑADOR WEB<a href="">Siguelo en Twitter</a></p>
			      	</div>
		    	</div>
		  	</li>
		  	<li>
		  		<div class="rp-item rp-img-2">
		      		<div class="rp-info">
		        		<h3>MATÍAS MUÑOZ</h3>
		        		<p>PROGRAMADOR Y DISEÑADOR WEB<a href="">Siguelo en Twitter</a></p>
		      		</div>
		    	</div>
		  	</li>
		</ul>
	</div>

<!-- fin contenido-->
@stop