<?php 
	include_once('../conection.php');
	session_start();


		$id = $_GET['id'];

        $sql = "SELECT * FROM ong WHERE id_ONG = '$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $nomeimagem = $row['logo'];

        $caminhoArquivo = "../../../img/$nomeimagem";
        
        if (file_exists($caminhoArquivo)) {
            if (unlink($caminhoArquivo)) {
                echo 'Arquivo de foto excluído com sucesso.';
            } else {
                echo 'Erro ao excluir o arquivo de foto.';
            }
        } else {
            echo 'O arquivo de foto não existe.';
        }
			
			$delete = "DELETE FROM ong WHERE id_ONG = '$id'";
			$del = mysqli_query($conn, $delete);
			
				if ($del) {
					header("Location: ../ongs.php?alert=c81e728d9d4c2f636f067f89cc14862c");
					exit();
				}
				
				else {
				echo 'erro';
				}
?>