<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="./css/cadastro.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="cadastro_scripts.php" method="POST">
                <h1>Criar conta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="icon"><i class="bx bxl-google"></i></a>
                    <a href="#" class="icon"><i class="bx bxl-linkedin"></i></a>
                    <a href="#" class="icon"><i class="bx bxl-github"></i></a>
                </div>
                <span>ou use seu e-mail para registrar</span>
                <input type="text" placeholder="Nome" name="nome">          <!--valor variavel nome_registro-->
                <input type="email" placeholder="E-mail" name="email">      <!--valor variavel email_registro-->
                <input type="password" placeholder="Senha" name="senha">  <!--valor variavel password_registro-->
                <button type="submit">Registrar</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login_script.php" method="POST">
                <h1>Entrar com</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="icon"><i class="bx bxl-google"></i></a>
                    <a href="#" class="icon"><i class="bx bxl-linkedin"></i></a>
                    <a href="#" class="icon"><i class="bx bxl-github"></i></a>
                </div>
                <span style="font-size: 13px;">Ou use seu e-mail para fazer login</span>
                <input type="email" placeholder="E-mail" name="email_login">                <!--valor variavel email_login-->
                <input type="password" placeholder="Senha" name="senha_login">           <!--valor variavel password_login-->
                <a href="#" class="fp">Esqueceu Senha?</a>
                <button type="submit">Entrar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Já possui conta?</h1>
                    <p>Entre com seu e-mail e senha</p>
                    <button class="hidden" id="login">Entrar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Não tem conta?</h1>
                    <p>Registre-se com seus dados pessoais para usar todos os nossos recursos</p>
                    <button class="hidden" id="register">Registrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/cadastro.js"></script>
</body>
</html>