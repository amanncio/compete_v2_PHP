<?php
session_start();
print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compete - Escolha dos Modos</title>
    <!-- Import Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Import Icons -->
    <script src="https://kit.fontawesome.com/9252fac622.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
</head>
<body class="body">
    <main class="main-container">
        <div class="div-img-logo">
            <img src="img/trofeu-compete.svg" alt="Troféu Compete" class="img-trofeu">
        </div>
        <section class="section color-bg-light display-container">
            <h1 class="h1-modo-jogo">Torneio</h1>
            <p class="color-shadow">Selecione para criar e gerenciar torneios esportivos personalizados, tabela de competições, perfil e desenvolvimento dos atletas, bem como, controle de cartões.</p>
            <button type="submit" class="enter-modo-btn"><i class="fa-solid fa-right-to-bracket"></i>Entrar</button>
            <span style="color: tomato; margin-bottom: 40px;">* Bloco em desenvolvimento...</span>
        </section>
        <section class="section display-container">
            <h1 class="h1-modo-jogo">Partida</h1>
            <p class="color-light">Selecione para sortear times, marcar o tempo das partidas e organizar a ordem de jogo das equipes.</p>
            <button type="submit" class="enter-modo-btn"><i class="fa-solid fa-right-to-bracket"></i>Entrar</button>
            <a href="equipes.html">Entrar</a>
        </section>
    </main>
</body>
</html>