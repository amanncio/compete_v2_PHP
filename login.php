<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit;
}

$name = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);


$query = "select id, nome from usuarios where nome = '{$name}' and  senha = '{$senha}'";



$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);
// echo $row; 
// exit();

if ($row == 1) {
    $_SESSION['usuario'] = $name;
    header('Location: modo.php');
} else {
    header('Location: index.php');
    exit();
}

?>