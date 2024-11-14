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
    </style>
</head>
<body>
    
    <header class="header">
        <!--  ---------------------------------Botão do menu para dispositivos móveis------------------------------------- -->
        <button class="menu-btn" onclick="toggleSidebar()"><i class="fas fa-bars" style="color: #46278e;" ></i></button>

        <span><img src="../images/home_page/Blue_and_White_Circle_Retail_Logo__1_-removebg-preview.png" class="logo"></span>

        <nav class="navbar">
            <a href="../php/cadastro.php">Sair</a>
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
            <a href="index.html" style="color: #46278e;" onmouseover="this.style.color='#231641b3'" onmouseout="this.style.color='#46278e'">Principal</a>
            <a href="#" style="color: #46278e;" onmouseover="this.style.color='#231641b3'" onmouseout="this.style.color='#46278e'">Sobre</a>
            <a href="#" style="color: #46278e;" onmouseover="this.style.color='#231641b3'" onmouseout="this.style.color='#46278e'">Carrinho</a>
            <a href="#" style="color: #46278e;" onmouseover="this.style.color='#231641b3'" onmouseout="this.style.color='#46278e'">Serviços</a>
            <a href="#" style="color: #46278e;" onmouseover="this.style.color='#231641b3'" onmouseout="this.style.color='#46278e'">Contato</a>
        </nav>
    </aside>
    <!-- ---------------------------------SLIDE------------------------------------------------------------------------------ -->
    <div class="slideshow-container" style="width: 100%; position: relative; left: -9px;">
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
    <section id="menu">
        <!-- ------------------------------------------- PRIMEIRA FILEIRA DE PRODUTOS ------------------------------------------- -->
        <div id="dishes">
        <div class="dish">
    <div class="dish-heart">
        <i class="fa-solid fa-heart"></i>
    </div>

    <!-- IMAGEM 1 -->
    <img id="productImage" style="width: 200px; height: auto; border-radius: 5px;" alt="">

    <h3 class="dish-title">
        Máscara de Argila
    </h3>

    <span class="dish-description">
        Deixe sua pele mais macia e sedosa, além de dar um toque suave e contribuir para acalmar a pele
    </span>

    <div class="dish-rate">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <span>(500+)</span>
    </div>

    <div class="dish-price">
        <h4>R$40,00</h4>
        <button class="btn-default">
            <i class="fa-solid fa-basket-shopping" style="color: white;"></i>
        </button>
    </div>
</div>

            <div class="dish">
                <div class="dish-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <!-- IMAGEM 2 -->

                <img src="https://m.media-amazon.com/images/I/312WzWap4vL._SR480,440_.jpg" style="width: 200px; height: auto; border-radius: 5px;" alt="">

                <h3 class="dish-title">
                    Sabonete Líquido
                </h3>

                <span class="dish-description">
                    Os óleos essenciais presentes no sabonete natural ajudam a equilibrar a saúde física, mental e emocional.
                </span>

                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>

                <div class="dish-price">
                    <h4>R$100,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping" style="color: white;"></i>
                    </button>
                </div>
            </div>

            <div class="dish">
                <div class="dish-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <!-- IMAGEM 3 -->

                <img src="https://m.media-amazon.com/images/I/41CEGtQGb7L._AC_SX679_.jpg" style="width: 200px; height: auto; border-radius: 5px;" class="dish-image" alt=""> <!--Foto 3-->

                <h3 class="dish-title">
                    Acelerador Solar
                </h3>

                <span class="dish-description">
                    Proteja a pele da ação dos Raios UV proporcionando um bronzeado rápido, intenso, duradouro e mais bonito.
                </span>

                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>

                <div class="dish-price">
                    <h4>R$60,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping" style="color: white;"></i>
                    </button>
                </div>
            </div>

            <div class="dish">
                <div class="dish-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <!-- IMAGEM 4 -->

                <img src="https://m.media-amazon.com/images/I/51QH9AsasuL.__AC_SX300_SY300_QL70_ML2_.jpg" style="width: 200px; height: auto; border-radius: 5px;" class="dish-image" alt=""> <!--Foto 4-->

                <h3 class="dish-title">
                    Óleo Vegetal
                </h3>

                <span class="dish-description">
                    Combata o envelhecimento, deixe sua pele bonita, hidratada e macia e até mesmo lidar com algumas doenças dermatológicas.
                </span>

                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>

                <div class="dish-price">
                    <h4>R$20,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping" style="color: white;"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- ------------------------------------------- SEGUNDA FILEIRA DE PRODUTOS ------------------------------------------- -->

        <div id="dishes">
            <div class="dish">
                <div class="dish-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <!-- IMAGEM 1 -->

                <img src="https://m.media-amazon.com/images/I/61aIuJu0M0L.__AC_SX300_SY300_QL70_ML2_.jpg" style="width: 200px; height: auto; border-radius: 5px;" alt="">

                <h3 class="dish-title">
                    Máscara de Argila
                </h3>

                <span class="dish-description">
                    Deixe sua pele mais macia e sedosa, além de dar um toque suave e contribuir para acalmar a pele
                </span>

                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>

                <div class="dish-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping" style="color: white;"></i>
                    </button>
                </div>
            </div>

            <div class="dish">
                <div class="dish-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <!-- IMAGEM 2 -->

                <img src="https://m.media-amazon.com/images/I/81mjtZOzG0L.__AC_SX300_SY300_QL70_ML2_.jpg" style="width: 200px; height: auto; border-radius: 5px;" alt="">

                <h3 class="dish-title">
                    Sabonete Líquido
                </h3>

                <span class="dish-description">
                    Os óleos essenciais presentes no sabonete natural ajudam a equilibrar a saúde física, mental e emocional.
                </span>

                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>

                <div class="dish-price">
                    <h4>R$100,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping" style="color: white;"></i>
                    </button>
                </div>
            </div>

            <div class="dish">
                <div class="dish-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <!-- IMAGEM 3 -->

                <img src="https://m.media-amazon.com/images/I/71NulLwsRmL.__AC_SX300_SY300_QL70_ML2_.jpg" style="width: 200px; height: auto; border-radius: 5px;" class="dish-image" alt=""> <!--Foto 3-->

                <h3 class="dish-title">
                    Acelerador Solar
                </h3>

                <span class="dish-description">
                    Proteja a pele da ação dos Raios UV proporcionando um bronzeado rápido, intenso, duradouro e mais bonito.
                </span>

                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>

                <div class="dish-price">
                    <h4>R$60,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping" style="color: white;"></i>
                    </button>
                </div>
            </div>

            <div class="dish">
                <div class="dish-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <!-- IMAGEM 4 -->

                <img src="https://m.media-amazon.com/images/I/61I3eKMy3fL.__AC_SX300_SY300_QL70_ML2_.jpg" style="width: 200px; height: auto; border-radius: 5px;" class="dish-image" alt=""> <!--Foto 4-->

                <h3 class="dish-title">
                    Óleo Vegetal
                </h3>

                <span class="dish-description">
                    Combata o envelhecimento, deixe sua pele bonita, hidratada e macia e até mesmo lidar com algumas doenças dermatológicas.
                </span>

                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>

                <div class="dish-price">
                    <h4>R$20,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping" style="color: white;"></i>
                    </button>
                </div>
            </div>
        </div>

<!-- ------------------------------------------- TERCEIRA FILEIRA DE PRODUTOS ------------------------------------------- -->

        '<div id="dishes">
            <div class="dish">
                <div class="dish-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <!-- IMAGEM 1 -->

                <img src="https://m.media-amazon.com/images/I/51cmtjomzrL._SR480,440_.jpg" style="width: 200px; height: auto; border-radius: 5px;" alt="">

                <h3 class="dish-title">
                    Máscara de Argila
                </h3>

                <span class="dish-description">
                    Deixe sua pele mais macia e sedosa, além de dar um toque suave e contribuir para acalmar a pele
                </span>

                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>

                <div class="dish-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping" style="color: white;"></i>
                    </button>
                </div>
            </div>

            <div class="dish">
                <div class="dish-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <!-- IMAGEM 2 -->

                <img src="https://m.media-amazon.com/images/I/71s7fVYV1kL._AC._SR360,460.jpg" style="width: 200px; height: auto; border-radius: 5px;" alt="">

                <h3 class="dish-title">
                    Sabonete Líquido
                </h3>

                <span class="dish-description">
                    Os óleos essenciais presentes no sabonete natural ajudam a equilibrar a saúde física, mental e emocional.
                </span>

                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>

                <div class="dish-price">
                    <h4>R$100,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping" style="color: white;"></i>
                    </button>
                </div>
            </div>

            <div class="dish">
                <div class="dish-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <!-- IMAGEM 3 -->

                <img src="https://m.media-amazon.com/images/I/51T-6cdhyaL._AC._SR360,460.jpg" style="width: 200px; height: auto; border-radius: 5px;" class="dish-image" alt=""> <!--Foto 3-->

                <h3 class="dish-title">
                    Acelerador Solar
                </h3>

                <span class="dish-description">
                    Proteja a pele da ação dos Raios UV proporcionando um bronzeado rápido, intenso, duradouro e mais bonito.
                </span>

                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>

                <div class="dish-price">
                    <h4>R$60,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping" style="color: white;"></i>
                    </button>
                </div>
            </div>

            <div class="dish">
                <div class="dish-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <!-- IMAGEM 4 -->

                <img src="https://m.media-amazon.com/images/I/71k7+AIzVsL._AC_SX300_SY300_.jpg" style="width: 200px; height: auto; border-radius: 5px;" class="dish-image" alt=""> <!--Foto 4-->

                <h3 class="dish-title">
                    Óleo Vegetal
                </h3>

                <span class="dish-description">
                    Combata o envelhecimento, deixe sua pele bonita, hidratada e macia e até mesmo lidar com algumas doenças dermatológicas.
                </span>

                <div class="dish-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>

                <div class="dish-price">
                    <h4>R$20,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping" style="color: white;"></i>
                    </button>
                </div>
            </div>
        </div>

        
    </section>

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

</html>