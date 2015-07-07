<?php
	$link =mysql_connect("localhost","root","")
	 or die('No se pudo conectar a la base de datos: ' . mysql_error());
	if($link){
		mysql_select_db("bdtp",$link);
	}
?>
