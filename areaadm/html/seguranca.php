<?php
// if (isset ($_SESSION)){
// session_start();};

if(empty($_SESSION['administrador'])){
    header("Location: ../../login/login_form.php");
    exit();
};
?>