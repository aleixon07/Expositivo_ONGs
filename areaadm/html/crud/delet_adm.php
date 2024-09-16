<?php 
	include_once('../conection.php');
	session_start();

	$id_user = $_SESSION["id_administrador"];

		$id = $_GET['id'];

		if($id_user == $id){
			header("Location: ../administradores.php?alert=a87ff679a2f3e71d9181a67b7542122c");
			exit();
		}
			
			$delete = "DELETE FROM administrador WHERE id_administrador = '$id'";
			$del = mysqli_query($conn, $delete);
			
				if ($del) {
					header("Location: ../administradores.php?alert=c81e728d9d4c2f636f067f89cc14862c");
					exit();
				}
				
				else {
				echo 'erro';
				}
?>