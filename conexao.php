<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "db_compete";

 // Criando a conexão
 $conn = new mysqli($servername, $username, $password, $dbname);

 // Checando conexão
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

 ?>