<?php
	
	include_once("../conection.php");
	
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	
	if(isset($nome)){
	
	$sql_func = "UPDATE categoria SET nome = '$nome' WHERE idCategoria = '$id'";
	$resultado_func = mysqli_query($conn, $sql_func);

		if($resultado_func){

			header("Location: ../categorias.php?alert=eccbc87e4b5ce2fe28308fd9f2a7baf3");
			exit();
		}
	 
	 }else {

	 }
	 
	
?>