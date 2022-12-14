<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compete - Definição das Equipes</title>
    <!-- Import Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Import Icons -->
    <script src="https://kit.fontawesome.com/9252fac622.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <img src="img/simbolo-compete-positivo.svg" alt="Troféu Compete">
        <nav class="menu-navegacao">
            <li><a href="#">Equipes</a></li><p>|</p>
            <li><a href="#">Jogadores</a></li><p>|</p>
            <li><a href="#">Times</a></li>
        </nav>
    </header>
    <main class="main">
        <div id="div1">O texto acima foi criado dinamicamente.</div>
        <form class="inputs-party" action="#" method="post">
            <button class="btn-left"><i class="fa-solid fa-chevron-left"></i></button>
            <div class="div-party">
                <section class="section-party">
                    <input type="text" name="numero-jogadores" id="numero-jogadores" placeholder="Total de número de jogadores">
                    <p>Defina o número total de jogadores na pelada, sem incluir os goleiros.</p>
                    <input type="submit" id="teste" value="Enviar">
                </section>
            </div>
            <button class="btn-right"><i class="fa-solid fa-chevron-right"></i></button>
            <div class="sla"></div>
        </form>
    </main>
    <footer class="footer-container">
        <div class="footer">
            <img src="img/horizontal-colorida-fundo-branco.svg" alt="Logo Compete">
            <p>| &copy; 2022 Todos os direitos estão reservados à Compete.</p>
        </div>
    </footer>
    <script src="./script.js"></script>
</body>
</html>