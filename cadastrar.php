<?php
session_start();
include("conexao.php");
// $name = "";
// $email = "";
// $senha = "";

$name = mysqli_real_escape_string($conn, trim($_POST['usuario']));
$email = mysqli_real_escape_string($conn, trim($_POST['email']));
$senha = mysqli_real_escape_string($conn, trim(md5($_POST['senha'])));

$query = "select count(*) as total from usuarios where nome = '$name'";
$result =  mysqli_query($conn, $sql);
$row =  mysqli_fetch_assoc($result);

if($row == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit();
}

$query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$name', '$email', '$senha')";

if($conn->query($query) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conn->colse();

header('Location: cadastro.php');
exit();

?>