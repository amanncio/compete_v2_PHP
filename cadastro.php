<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compete - Cadastro</title>
    <!-- Import Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Import Icons -->
    <script src="https://kit.fontawesome.com/9252fac622.js" crossorigin="anonymous"></script>
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="body">
    <main class="main-container">
        <section class="section section-brand">
            <img src="img/simbolo-compete-positivo.svg" alt="Troféu - Símbolo da Logo">
            <h1>Cadastro de Usuários</h1>
            <p class="p-cadastro">Preencha todos os campos com suas informações. Em seguida, finalize clicando no botão cadastrar.</p>
        </section>
        <section class="section login-section">
            <form action="cadastrar.php" method="post">
                <div>
                    <label for="usuario">ID Usuário</label>
                    <div class="form-login">
                        <input type="text" name="usuario" id="user" required>
                    </div>
                    <label for="email">Email</label>
                    <div class="form-login">
                        <input type="email" name="email" id="email" required>
                    </div>
                    <label for="senha">Senha</label>
                    <div class="form-login">
                        <input type="password" name="senha" id="password" required>
                    </div>
                </div>
                <button type="submit" class="enter-btn">Cadastrar</button>
            </form>
        </section>
    </main>
</body>
</html>