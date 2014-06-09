<?php

	/**
	  * Errores en MySqli
	  *
	  * se muestra un manejo de información del error al conectarnos a una Base de Datos.
	  *
	  *
	  *	@copyright Copyright (c) 2014, Sebastián Silva Carrasco
	  * @version 1.0
	  * @author Sebastián Silva Carrasco
	  */

	#error_reporting(E_ALL);
	#$link = mysqli_connect("myhost","myuser","mypassw","mybd");
	$con =	mysqli_connect('localhost','defirecl_ssilva','%ssilva2014','defirecl_arriendos');
	
	echo mysqli_connect_error();
	echo mysqli_connect_errno();
