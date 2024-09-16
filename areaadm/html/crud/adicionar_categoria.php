<?php 

include "../conection.php";

    $nome = $_POST['nome'];

    $sql = "INSERT INTO categoria (nome) VALUES ('$nome')";
    
    if (mysqli_query($conn, $sql)) {

        header("Location: ../categorias.php?alert=c4ca4238a0b923820dcc509a6f75849b");
        exit();

    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conn);
    }

?>

