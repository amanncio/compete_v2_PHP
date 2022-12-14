<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compete</title>
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
        <section class="section section-brand">
            <img src="img/simbolo-compete-positivo.svg" alt="Troféu - Símbolo da Logo">
            <h1>Bem Vindo!</h1>
            <p>Para entrar e usufruir dos nossos recursos, crie uma conta pessoal <a href="cadastro.html">clicando aqui</a>.</p>
        </section>
        <section class="section login-section">
            <form action="login.php" method="post" class="login-form">
                <div>
                    <label for="usuario">ID Usuário</label>
                    <div class="form-login">
                        <i class="icone-login fa-solid fa-user"></i>
                        <input type="text" name="usuario" id="user">
                    </div>
                    <label for="senha">Senha</label>
                    <div class="form-login">
                        <i class="icone-login fa-solid fa-solid fa-key"></i>
                        <input type="password" name="senha" id="password">
                    </div>
                </div>
                <div class="div-info">
                    <div>
                        <label for="switch">
                            <div class="switch-wrapper">
                                <input type="checkbox" name="rememberMe" id="switch">
                                <span class="switch-button"></span>
                            </div>
                            <span class="swith-text">Lembrar de mim</span>
                        </label>
                    </div>
                    <a href="#" target="_blank">Esqueceu a senha?</a>
                </div>
                <button type="submit" class="enter-btn"><i class="fa-solid fa-right-to-bracket"></i>Entrar</button>
                <a href="modo.html" class="link-entrar-modo">Entrar no modo</a>
            </form>
        </section>
    </main>
</body>
</html>