<?php

include "conexao_produto.php";

// Consulta SQL para selecionar todos os produtos cadastrados, ordenando pela data de cadastro (mais recentes primeiro)
$sql = "SELECT * FROM produtos ORDER BY nome ";

// Executa a consulta no banco de dados e armazena o resultado em $result
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <title>Online Store</title>
    <link rel="icon" href="../images/home_page/logo.png" type="image/png">
    <style>
                /* Estilo do modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 2;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        /* Conteúdo do modal */
        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 8px;
        }

        /* Botão de fechar modal */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
        }

        /* Estilos do formulário */
        form label {
            display: block;
            margin: 10px 0 5px;
        }

        form input[type="text"],
        form input[type="number"],
        form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        form button {
            background-color: #532fa6b3;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #46278eb3;
        }

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

        /* Container que envolve os itens */
        #dishes {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; /* Espaço entre os itens */
            gap: 20px; /* Espaçamento entre os itens */
            padding: 20px; /* Opcional: adiciona padding ao container */
            box-sizing: border-box;
        }

        /* Cada item */
        .dish {
            flex: 1 1 calc(25% - 20px); /* Largura de 25% menos o gap */
            box-sizing: border-box;
            background-color: #f8f9fa; /* Exemplo de fundo */
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            text-align: center; /* Centraliza o conteúdo */
            transition: transform 0.3s; /* Efeito de hover */
        }

        .dish:hover {
            transform: scale(1.05); /* Aumenta ligeiramente o tamanho ao passar o mouse */
        }

        /* Responsividade */
        @media (max-width: 1200px) {
            .dish {
                flex: 1 1 calc(33.33% - 20px); /* 3 por linha */
            }
        }

        @media (max-width: 800px) {
            .dish {
                flex: 1 1 calc(50% - 20px); /* 2 por linha */
            }
        }

        @media (max-width: 500px) {
            .dish {
                flex: 1 1 100%; /* 1 por linha */
            }
        }

    </style>
</head>
<body>
    
    <header class="header">
        <!--  ---------------------------------Botão do menu para dispositivos móveis------------------------------------- -->
        <button class="menu-btn" onclick="toggleSidebar()"><i class="fas fa-bars" style="color: #46278e;" ></i></button>

        <span><img src="../images/home_page/Blue_and_White_Circle_Retail_Logo__1_-removebg-preview.png" class="logo"></span>

        <nav class="navbar">
            <a href="../pessoas/cadastro.php">Sair</a>
            <a href="#" onclick="openModal()">Incluir Produto</a>
            <a href="#">Sobre</a>
            <a href="#">Serviços</a>
            <a href="#">Contato</a>
        </nav>
        
    </header>
        
    <!-- ---------------------------------BARRA LATERAL------------------------------------------------------------------------------ -->
    <aside class="sidebar" id="sidebar">
        <button class="close-btn" onclick="toggleSidebar()">x</button>
        <nav class="sidebar-nav">
            <a href="../pessoas/cadastro.php" style="color: #46278e;" onmouseover="this.style.color='#231641b3'" onmouseout="this.style.color='#46278e'">Sair</a>
            <a href="#" onclick="openModal(),toggleSidebar()" onmouseover="this.style.color='#231641b3'" onmouseout="this.style.color='#46278e'">Incluir Produto</a>
            <a href="#" style="color: #46278e;" onmouseover="this.style.color='#231641b3'" onmouseout="this.style.color='#46278e'">Sobre</a>
            <a href="#" style="color: #46278e;" onmouseover="this.style.color='#231641b3'" onmouseout="this.style.color='#46278e'">Serviços</a>
            <a href="#" style="color: #46278e;" onmouseover="this.style.color='#231641b3'" onmouseout="this.style.color='#46278e'">Contato</a>
        </nav>
    </aside>
    <!-- ---------------------------------SLIDE------------------------------------------------------------------------------ -->
    <div class="slideshow-container" style="width: 100%; position: relative; left: -9px; top: 52px;">
        <img class="slide" src="../images/home_page/Banner horizontal ong de animais doação colorido (1).svg" alt="Imagem 1" style="width: 101%;">
        <img class="slide" src="../images/home_page/Banner horizontal ong de animais doação colorido.svg" alt="Imagem 3" style="width: 101%;">
    </div>

<!-- --------------------------------------------------MODAL------------------------------------------------------- -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Incluir Produto</h2>
            <form action="cadastro_produto_script.php" method="POST">
                <label for="url">Imagem:</label>
                <input type="text" id="url" name="url" required>

                <label for="name">Nome do Produto:</label>
                <input type="text" id="name" name="nome" required>

                <label for="description">Descrição:</label>
                <textarea id="description" name="description" required></textarea>

                <label for="price">Preço:</label>
                <input type="number" id="price" name="preco" step="0.01" required>

                <button type="submit">Cadastrar Produto</button>
            </form>
        </div>
    </div>

    <!-- ---------------------------------PRODUTOS------------------------------------------------------------------------------ -->
    <section id="menu" style="position: relative; top: -30px;">

        <div id="dishes">
            <?php
            // Verifica se a consulta retornou resultados
            if ($result->num_rows > 0) {
                // Loop pelos resultados
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="dish">
                        <div class="dish-heart">
                            <i class="fa-solid fa-heart"></i>
                        </div>

                        <!-- Exibição do produto -->
                        <img src="<?php echo htmlspecialchars($row['url']); ?>" style="width: 200px; height: auto; border-radius: 5px;" alt="Imagem do Produto">
                        <h3 class="dish-title"><?php echo htmlspecialchars($row['nome']); ?></h3>
                        <span class="dish-description"><?php echo htmlspecialchars($row['description']); ?></span>
                        <div class="dish-price">
                            <h4>R$ <?php echo number_format($row['preco'], 2, ',', '.'); ?></h4>
                            <button class="btn-default">
                                <i class="fa-solid fa-basket-shopping" style="color: white;"></i>
                            </button>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p>Nenhum produto encontrado.</p>";
            }
            ?>
        </div>
    </section>
    <!-- ---------------------------------POP-UP de Confirmação de Produto cadastrado------------------------------------------------------------------------------ -->
    <div id="popup" class="popup">
        <p id="popup-message"></p>
        <button onclick="closePopup()">OK</button>
    </div>
</body>
    <script src="../js/script.js"></script>
<script>
    function openModal() {
        document.getElementById("productModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("productModal").style.display = "none";
    }

    // Fecha o modal ao clicar fora dele
    window.onclick = function(event) {
        var modal = document.getElementById("productModal");
        if (event.target === modal) {
            closeModal();
        }
    }
</script>

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

</html>