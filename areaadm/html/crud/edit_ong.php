<?php

session_start(); //verifica a sessão

include "../conection.php";

if(isset($_POST["nome"]) && isset($_POST["descricao"]) ) {
    $nome = htmlspecialchars($_POST['nome']); 
    $descricao = htmlspecialchars($_POST['descricao']);
    $categoria = htmlspecialchars($_POST['categoria']); 
    $id_edit = $_POST['id'];
    $imagem = $_FILES['imagem'];
    $nomeimagem = uniqid($imagem["name"]).".jpeg";
    $nome_imagem = $imagem["name"];
  
    $sqlc = "SELECT * FROM categoria WHERE nome = '$categoria'";
    $resultc = $conn->query($sqlc);
    $rowc = $resultc->fetch_assoc();

    $idcat = $rowc["idCategoria"];

    $sql1 = "SELECT * FROM ong WHERE id_ONG = '$id_edit'";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    $caminho_imagem = $row1["logo"];


    if(isset($caminho_imagem) && !empty($nome_imagem)){

        $caminhoArquivo = "../../../img/$caminho_imagem";
        
        if (file_exists($caminhoArquivo)) {
            if (unlink($caminhoArquivo)) {
                echo 'Arquivo de foto excluído com sucesso.';
            } else {
                echo 'Erro ao excluir o arquivo de foto.';
            }
        } else {
            echo 'O arquivo de foto não existe.';
        }
    }    
    
    if(!empty($nome_imagem)){
         $diretorioDestino = "../../../img/";
         $tipo = $imagem["type"];
         $tamanho = $imagem["size"];
         $tmp_name = $imagem["tmp_name"];
         
         $caminhoDestino = $diretorioDestino .$nomeimagem;
            if (move_uploaded_file($tmp_name, $caminhoDestino)) {
                    echo "Imagem enviada com sucesso!";
                } else {
                    echo "Erro ao enviar a imagem.";
                }

        $sql2 = "UPDATE ong SET 
                        nome ='$nome', 
                        descricao ='$descricao', 
                        idCategoria ='$idcat', 
                        logo = '$nomeimagem' 
                        WHERE  id_ONG = '$id_edit' ";
        $result2 = mysqli_query($conn, $sql2); 
                               
    
    }else if(empty($nome_imagem)){
        
        $sql2 = "UPDATE ong SET 
                         nome ='$nome', 
                        descricao ='$descricao', 
                        idCategoria ='$idcat', 
                        logo = '$caminho_imagem'
                        WHERE  id_ONG = '$id_edit' ";
        $result2 = mysqli_query($conn, $sql2); 
    }


        header("Location: ../ongs.php?alert=f7177163c833dff4b38fc8d2872f1ec6"); //se tudo der certo volta para página inicial
        exit();
    
}else{
    header("Location: ../adm/dashboard/form_edit_prof.php"); //de houver erro na consulta redireciona com uma msg por GET
    exit();
 
} 
