<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagens/logooficial.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/cardcardapio2.css">
    <link rel="stylesheet" href="./css/botao.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- CSS
    <link rel="stylesheet" href="style.css"> -->
    <title> Cardápio</title>
</head>
<style>
    body {
        background-color: #f9e3cf;
    }
</style>
<body>
    <!-- NavBar  -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #f9e3cf;margin-bottom: 10px; margin-top: -10px; justify-content: space-between;">
        <div class="container-fluid" Style="background-color: #ff7c00;">
            <a class="navbar-brand" href="paginicial.php">
                <img src="./imagens/logooficial.png" width="70px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" href="" style="font-size: larger;">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="pagcardapio.php" style="font-size: larger;">Cardápio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="pagapresentacao.php" style="font-size: larger;">Sobre</a>
                    </li>
                </ul>
                <!-- <div class="search-box">
          <input type="text" class="search-txt" placeholder="Pesquisa">
          <a href="#">
            <img src="./imagens/lupa.png" alt="lupa" height="20px" width="20px">
          </a>
        </div> -->

                <ul class="nav-item" style="margin-top: 15px;">
                    <a class="nav-link active" href="./telalogin.php">
                        <img src="./imagens/iconchef.svg" alt="login" style="width: 50px;">
                    </a>
                </ul>
                <ul class="nav-item" style="margin-top: 15px;">
                    <a class="nav-link active" href="./pagcarrinho.php">
                        <img src="./imagens/carrinho.svg" alt="carrinho" style="width: 35px;">
                    </a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- card -->
    <section class="container">
        <div class="swiper mySwiper container">
            <h3>Almoços</h3>
            <div class="swiper-wrapper content">
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/sufleLegumes.jpg" alt="Suflê com Legumes">
                        </div>

                        <div class="name-profession">
                            <span class="name">Suflê de Legumes</span>
                            <h6 class="profession">Cenoura, abobrinha, chuchu, tomate, cebola e ovo</h6>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/frangopurebrocolis.jpg" alt="Frango com Purê e Brócolis">
                        </div>

                        <div class="name-profession">
                            <span class="name">Frango com Purê e Brócolis</span>
                            <span class="profession">Frango grelhado c/ purê, brócolis, pepino, abóbora e arroz c/
                                brócolis</span>
                        </div>

                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>

                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/caneloneAbobrinha.jpg" alt="Canelone de Abobrinha">
                        </div>

                        <div class="name-profession">
                            <span class="name">Canelone de abobrinha</span>
                            <span class="profession">Abobrinha, frango c/ creme de ricota, molho de tomate e queijo
                                light</span>
                        </div>

                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>

                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/pratocarioca.jpg" alt="Prato Carioca">
                        </div>

                        <div class="name-profession">
                            <span class="name">Prato Carioca</span>
                            <span class="profession">Arroz, feijão, ovo cozido, alface, cenoura ralada e tomate</span>
                        </div>

                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>

                    </div>
                </div>

            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </section>

    <section class="container">
        <div class="swiper mySwiper container">
            <h3>Jantas</h3>
            <div class="swiper-wrapper content">
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/salmaolegumes.jpg" alt="Filé de Peixes c/ Legumes">
                        </div>

                        <div class="name-profession">
                            <span class="name">Filé de Peixes com Legumes</span>
                            <span class="profession">Peixe grelhado, alface, tomate, aipim e cenoura</span>
                        </div>

                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>

                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/frangobatatadoce.jpg" alt="Frango c/ Batata Doce">
                        </div>

                        <div class="name-profession">
                            <span class="name">Frango com Batata Doce</span>
                            <span class="profession">Frango grelhado, purê de batata doce, alface, tomate e
                                cenoura</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>

                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/carnemoidaovos.jpg" alt="Carne Moída c/ Ovos">
                        </div>

                        <div class="name-profession">
                            <span class="name">Carne Moída com Ovos</span>
                            <span class="profession">Carne moída c/ legumes, ovos cozidos, brócolis a vapor e
                                tomate</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>

                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/brocolis-ovos.jpg" alt="Ovos Cozidos c/ Brócolis e Tomate">
                        </div>

                        <div class="name-profession">
                            <span class="name">Ovos Cozidos com Brócolis e Tomate</span>
                            <span class="profession">Ovos cozidos, brócolis a vapor e tomate</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>

                    </div>
                </div>

            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </section>

    <section class="container">
        <div class="swiper mySwiper container">
            <h3>Lanches</h3>
            <div class="swiper-wrapper content">
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/panquecabanana.jpg" alt="Panqueca de Banana">
                        </div>

                        <div class="name-profession">
                            <span class="name">Panqueca de Banana Pequena</span>
                            <span class="profession">R$3,00 </span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>

                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/paqueca.jpeg" alt="Panqueca de Banana">
                        </div>

                        <div class="name-profession">
                            <span class="name">Panqueca de Banana Grande</span>
                            <span class="profession">R$6,00</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>

                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/coxinhabatatadoce.jpg" alt="Coxinha de Batata Doce">
                        </div>

                        <div class="name-profession">
                            <span class="name">Coxinha de Batata Doce</span>
                            <span class="profession">R$5,00</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/biscoitocaseiro.jpg" alt="Biscoito Caseiro">
                        </div>

                        <div class="name-profession">
                            <span class="name">Biscoito Caseiro (5 Und)</span>
                            <span class="profession">R$</span>
                        </div>

                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/croquetecarne.jpg" alt="Croquete de Carne Moída">
                        </div>

                        <div class="name-profession">
                            <span class="name">Croquete de Carne Moída</span>
                            <span class="profession">R$5,00</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/sanduichenatural.jpg" alt="Sanduíche Natural">
                        </div>

                        <div class="name-profession">
                            <span class="name">Sanduíche Natural de Frango</span>
                            <span class="profession">R$4,00</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/sanduichenatural.jpg" alt="Sanduíche Natural">
                        </div>

                        <div class="name-profession">
                            <span class="name">Sanduíche Natural de Queijo</span>
                            <span class="profession">R$5,00</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/bolowheyprotein.jpg" alt="Bolo Whey Protein">
                        </div>

                        <div class="name-profession">
                            <span class="name">Bolo Whey Protein de Baunilha</span>
                            <span class="profession">R$10,00</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/bolowheyprotein.jpg" alt="Bolo Whey Protein">
                        </div>

                        <div class="name-profession">
                            <span class="name">Bolo Whey Protein de Chocolate</span>
                            <span class="profession">R$15,00</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </section>

    <section class="container">
        <div class="swiper mySwiper container">
            <h3>Cup Salada</h3>
            <div class="swiper-wrapper content">
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/cupsalada-alface-cenoura.jpg" alt="Alface Cenoura e Tomate">
                        </div>

                        <div class="name-profession">
                            <span class="name">Alface Cenoura e Tomate</span>
                            <span class="profession">Tomate, alface, cenoura, brócolis e abobrinha</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/elementoX.jpg" alt="Elemento X">
                        </div>

                        <div class="name-profession">
                            <span class="name">Elemento X</span>
                            <span class="profession">Abóbora, pepino, chuchu, batata doce (chips ou salada) e
                                beterraba</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </section>

    <section class="container">
        <div class="swiper mySwiper container">
            <h3>Sucos</h3>
            <div class="swiper-wrapper content">
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/laranja_cenoura_morango.png" alt="Laranja, Cenoura e Morango">
                        </div>

                        <div class="name-profession">
                            <span class="name">Laranja, Cenoura e Morango</span>
                            <span class="profession">R$7,00</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/beterraba-morango-chia.jpg" alt="Beterraba, Morango e Chia">
                        </div>

                        <div class="name-profession">
                            <span class="name">Beterraba, Morango e Chia</span>
                            <span class="profession">R$7,00</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/detox-de-couve.jpg" alt="Suco Detox">
                        </div>

                        <div class="name-profession">
                            <span class="name">Suco Detox</span>
                            <span class="profession">R$7,00</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/abacaxi-hortela.jpg" alt="Abacaxi, Hortelã e Gengibre">
                        </div>

                        <div class="name-profession">
                            <span class="name">Abacaxi, Hortelã e Gengibre</span>
                            <span class="profession">R$7,00</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </section>

    <section class="container">
        <div class="swiper mySwiper container">
            <h3>Sopas</h3>
            <div class="swiper-wrapper content">
                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/sopaabobora.jpg" alt="Sopa de Abóbora">
                        </div>

                        <div class="name-profession">
                            <span class="name">Sopa de Abóbora</span>
                            <span class="profession">R$15,00</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="card-content">
                        <div class="image">
                            <img src="./imagens/caldoAipim.jpg" alt="Sopa de aipim">
                        </div>

                        <div class="name-profession">
                            <span class="name">Sopa de Aipim</span>
                            <span class="profession">R$15,00</span>
                        </div>
                        <button class="cta">
                            <span>Adicionar</span>
                            <svg viewBox="0 0 13 10" height="10px" width="15px">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- footer novo -->
    <footer>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24">
                            <use xlink:href="#bootstrap" />
                        </svg>
                    </a>
                    <span class="mb-3 mb-md-0 text-muted">&copy;2022 Click<a style="color: #ff7c00;">Chef</a></span>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3">
                        <a class="text-muted" href="#">
                            <a href="#">
                                <i class="fa fa-linkedin" style="color: #ff7c00"></i>
                            </a>
                    </li>
                    <li class="ms-3">
                        <a class="text-muted" href="#">
                            <a href="#">
                                <i class="fa fa-instagram" style="color: #ff7c00"></i>
                            </a>
                    </li>
                    <li class="ms-3">
                        <a class="text-muted" href="#">
                            <a href="#" img="">
                                <i class="fa fa-whatsapp" style="color: #ff7c00"></i>
                            </a>
                    </li>
                </ul>
            </footer>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/93c1a40890.js" crossorigin="anonymous"></script>
    <!-- Card -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./script.js"></script>
</body>

</html>