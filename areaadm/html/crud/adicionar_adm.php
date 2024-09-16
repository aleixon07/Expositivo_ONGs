<?php 

include "../conection.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $busc_email = "SELECT * FROM administrador WHERE email = '$email'";
    $result_email = mysqli_query($conn, $busc_email);

    if(mysqli_num_rows($result_email) > 0){

        header("Location: ../administradores.php?alert=e4da3b7fbbce2345d7772b0674a318d5");
        exit();
        
    }

    $senha2 = md5($senha);

    $sql = "INSERT INTO administrador (nome, email, senha) VALUES ('$nome', '$email','$senha2')";
    
    if (mysqli_query($conn, $sql)) {

        header("Location: ../administradores.php?alert=c4ca4238a0b923820dcc509a6f75849b");
        exit();

    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conn);
    }

?>

