<?php
	
	session_start();

	require_once("connect_db.php");

	$usuario=$_POST['usuario'];
	$pass=$_POST['password'];
	
	
	$cliente='cliente';
	$monitor='monitoreador';
	$admin='administrador';
	

	$sql2=mysql_query("SELECT * FROM login WHERE usuario='$usuario'");
	if($f2=mysql_fetch_array($sql2)){
		if($pass==$f2['password']){
			//Compruebo rol
			if($cliente==$f2['rol']){
				//SESSION["log"]=1;
				$_SESSION['usuario']=$_POST['usuario'];
				$_SESSION['rol']="cliente";
				header("location:indexcliente.php");
			}else if ($monitor==$f2['rol']){
				$_SESSION['usuario']=$_POST['usuario'];
				$_SESSION['rol']="monitor";
				//SESSION["log"]=1;
				header("location:indexmonitor.php");
			}else{
				$_SESSION['usuario']=$_POST['usuario'];
				$_SESSION['rol']="admin";
				//SESSION["log"]=1;
				header("location:indexadmin.php");
			}
			//echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			//echo "<script>location.href='admin.php'</script>";
		
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE")</script> ';
		
		//echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR LLAME A NUESTRO 0800")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}


/*

	$sql=mysql_query("SELECT * FROM login WHERE usuario='$usuario'");
	if($f=mysql_fetch_array($sql)){
		if($pass==$f['password']){
			header("Location: index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

*/

		


?>