<?php
	
	include_once("../conection.php");
	
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	
	if(isset($nome) && isset($email)){
	
	$sql_func = "UPDATE administrador SET nome = '$nome', email = '$email' WHERE id_administrador = '$id'";
	$resultado_func = mysqli_query($conn, $sql_func);

		if($resultado_func){

			header("Location: ../administradores.php?alert=eccbc87e4b5ce2fe28308fd9f2a7baf3");
			exit();
		}
	 
	 }else {

	 }
	 
	
?>