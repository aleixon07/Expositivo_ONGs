<?php

$host ="localhost";
$usuario = "root";
$senha = "";
$banco = "kaua";

$conectar = mysqli_connect($host, $usuario, $senha, $banco);

if(!$conectar){
    die("Falha na conexao do banco". mysqli_connect_error());
}



if (isset($_POST['email']) && isset($_POST['senha'])) {

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "SELECT * FROM administrador WHERE email = '$email' AND senha='$senha'";

try {
    $result = mysqli_query($conectar, $sql); // envia a requisição pro banco de dados
} catch (Exception $e) {

    header("Location: ./login/login_form.php?error=Erro de comunicação com o banco de dados!");
    exit();
}
 
   if (mysqli_num_rows($result) <=0) {
    // echo  "<script>alert('email ou senha incorreto');</script>";
      header("Location: ./login_form.php?error=Senha incorreta!");

   } else {

      $lista = mysqli_fetch_array($result);
      session_start();
  	  $_SESSION['id_administrador'] = $lista['id_administrador'];
		  $_SESSION['nome'] = $lista['nome'];

       header("Location: ../areaadm/html/administradores.php");
        exit(); 
      } 
        
    //   } else {
    //  //   header("Location: ./login_form.php?error=Senha incorreta!");
    //  echo  "<script>alert('t2!');</script>";
    //     exit();
    //   }
    
  //  } else {
  //  // header("Location: ./login_form.php?error=Algo inesperado aconteceu. Tente novamente mais tarde!");
  //  echo  "<script>alert('t3');</script>";
  //   exit();
  //  }


// else {
//   //  header("Location: ./login_form.php?error=Usuário não encontrado!");
//   echo  "<script>alert('t4!');</script>";
//     exit();
}

?>