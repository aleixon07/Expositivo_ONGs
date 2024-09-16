<?php 
	include_once('../conection.php');
	session_start();


		$id = $_GET['id'];

			
			$delete = "DELETE FROM categoria WHERE idCategoria = '$id'";
			$del = mysqli_query($conn, $delete);
			
				if ($del) {
					header("Location: ../categorias.php?alert=c81e728d9d4c2f636f067f89cc14862c");
					exit();
				}
				
				else {
				echo 'erro';
				}
?>