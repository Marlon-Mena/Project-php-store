<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="icon" href="../images/home_page/logo.png" type="image/png">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        /* Estilo atualizado para o popup */
        .popup {
            display: none;
            position: fixed;
            top: 10%;
            left: 50%;
            transform: translate(-50%, 0);
            width: 300px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
            font-family: Arial, sans-serif;
            color: #333;
            z-index: 1000;
            text-align: center;
            opacity: 0;
            animation: fadeIn 0.5s forwards;
        }
        
        .popup.sucesso { border-left: 5px solid #4CAF50; } /* Verde para sucesso */
        .popup.erro { border-left: 5px solid #f44336; }     /* Vermelho para erro */

        .popup button {
            margin-top: 10px;
            padding: 5px 15px;
            cursor: pointer;
            border: none;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
        }

        /* Animação para entrada e saída do popup */
        @keyframes fadeIn {
            from { opacity: 0; top: 0%; }
            to { opacity: 1; top: 10%; }
        }

        @keyframes fadeOut {
            from { opacity: 1; top: 10%; }
            to { opacity: 0; top: 0%; }
        }
    </style>
</head>
<body>
    <!-- Estrutura da página de cadastro e login -->
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="cadastro_scripts.php" method="POST">
                <h1>Criar conta</h1>
                <input type="text" placeholder="Nome" name="nome" required>
                <input type="email" placeholder="E-mail" name="email" required>
                <input type="password" placeholder="Senha" name="senha" required>
                <button type="submit">Registrar</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login_script.php" method="POST">
                <h1>Entrar com</h1>
                <input type="email" placeholder="E-mail" name="email_login" required>
                <input type="password" placeholder="Senha" name="senha_login" required>
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

    <!-- Popup para mensagens de sucesso/erro -->
    <div id="popup" class="popup">
        <p id="popup-message"></p>
        <button onclick="closePopup()">OK</button>
    </div>

    <script src="../js/cadastro.js"></script>
    <script>
        // Função para exibir o popup com mensagem
        function showPopup(message, type) {
            const popup = document.getElementById("popup");
            const popupMessage = document.getElementById("popup-message");

            popupMessage.textContent = message;
            popup.className = "popup " + type;
            popup.style.display = "block";
            popup.style.animation = "fadeIn 0.5s forwards";

            // Define o tempo para fechar automaticamente após 5 segundos
            setTimeout(() => {
                closePopup();
            }, 2500);
        }

        // Função para fechar o popup
        function closePopup() {
            const popup = document.getElementById("popup");
            popup.style.animation = "fadeOut 0.5s forwards";
            setTimeout(() => {
                popup.style.display = "none";
            }, 500); // Espera 0.5s para terminar o fadeOut antes de ocultar
        }

        // Verifica a URL para mostrar mensagens de sucesso ou erro
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get("status");
            const message = urlParams.get("mensagem");

            if (status && message) {
                showPopup(decodeURIComponent(message), status === "sucesso" ? "sucesso" : "erro");
            }
        });
    </script>
</body>
</html>
