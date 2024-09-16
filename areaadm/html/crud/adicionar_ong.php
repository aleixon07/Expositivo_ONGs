<?php

session_start();
include "../conection.php";



if(isset($_POST["nome"])){

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria"];


$diretorioDestino = "../../../img/";
    
        // Obtém informações sobre o arquivo
        $imagem = $_FILES["imagem"];
        $nomeimagem = uniqid($imagem["name"]).".jpeg";
        $tipo = $imagem["type"];
        $tamanho = $imagem["size"];
        $tmp_name = $imagem["tmp_name"];
    
        // Move o arquivo para o diretório de destino
        $caminhoDestino = $diretorioDestino .$nomeimagem;
        if (move_uploaded_file($tmp_name, $caminhoDestino)) {
            echo "Imagem enviada com sucesso!";
        } else {
            echo "Erro ao enviar a imagem.";
        }


$sql_cat = "SELECT * FROM categoria WHERE nome = '$categoria' LIMIT 1";
$result_cat = $conn->query($sql_cat);
$row_cat = $result_cat->fetch_assoc();
$id_cat = $row_cat["idCategoria"];


    

$sql = "INSERT INTO ong (nome, descricao, idCategoria, logo) VALUES ('$nome','$descricao','$id_cat','$nomeimagem')"; 

if($conn->query($sql)){

    header("Location: ../ongs.php?alert=c4ca4238a0b923820dcc509a6f75849b");
    exit();


}else{
    echo "erro ao cadastar usuasrio = ". $conn->error;
 }
    
}else{ 
    header("Location: ../adm/index.php");
    exit();
}


?>