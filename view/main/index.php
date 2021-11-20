<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aikia E-commerce</title>
    <!-- Custom font-->
    <link rel="stylesheet" href="fonts/stylesheet.e9dc714d.css">
    <!-- Theme stylesheet-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/css/style.default.bc0dbdbe.css"
        id="theme-stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/img/favicon.png">
    <!-- FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css">
</head>

<?php 
    session_start();
?>

<!-- Product list -->
<?php include'../../controller/CRUD/produto/listaProduto.php'; ?>

<body>
    <!-- navbar-->
    <?php include'../header/header.php'?>
    <svg class="svg-blob svg-blob-fill-current"
        style=" width: 800px; height: 800px; max-width: 100%; left: -200px; top: -200px; color: #e0d4ab;">
        <use xlink:href="#blob-shape"> </use>
    </svg>
    <div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 pt-5 pt-md-0" data-swiper-parallax="-500">
                    <p class="subtitle letter-spacing-3 mb-3 text-dark font-weight-light">Um pouco mais de </p>
                    <h2 class="display-3" style="line-height: 1">Preto &amp; Branco</h2>
                    <p class="text-muted mb-5">Inspirada no clássico do design mundial assinado pelo icônico casal de
                        designers
                        norte-americanos Charles e Ray Eames, a cadeira Eames mostra o perfeito equilíbrio entre formas,
                        ergonomia
                        e volumes dos móveis das décadas de 1940 e 1950</p><a class="btn btn-outline-primary"
                        href="#">Saiba
                        mais</a>
                </div>
                <div class="col-sm-6 text-left text-sm-center"><img class="img-fluid home-slider-image"
                        src="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/img/product/chair2-transparent.png"
                        data-swiper-parallax="-200">
                    <svg class="svg-blob d-none d-md-inline-block svg-blob-fill-current svg-blob-swiper"
                        style="color: #ffdddd">
                        <use xlink:href="#blob-shape-3"> </use>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-6">
        <div class="row">
            <div class="mb-2 col-6 col-lg-7 pr-1">
                <div class="banner" style="background-color:#c3e3e0">
                    <div class="banner-text p-3 p-lg-5">
                        <p class="subtitle text-sm" style="color: #3b5d59">Madeira &amp; Metal</p>
                        <h2 class="mb-0">Cadeiras </h2>
                    </div>
                    <div class="banner-bg"><img class="img-fluid"
                            src="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/img/product/category-chair2.jpg"
                            alt=""></div>
                </div>
            </div>
            <div class="mb-2 col-6 col-lg-5 pl-1">
                <div class="banner" style="background-color:#f8f0cc">
                    <div class="banner-text p-3 p-lg-5">
                        <p class="subtitle text-sm" style="color: #6d5900">Pequenos objetos</p>
                        <h2 class="mb-0">Acessórios </h2>
                    </div>
                    <div class="banner-bg"><img class="img-fluid"
                            src="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/img/product/category-boxes.jpg"
                            alt=""></div>
                </div>
            </div>
            <div class="mb-2 col-6 col-lg-5 pr-1">
                <div class="banner" style="background-color:#ffd4d2">
                    <div class="banner-text p-3 p-lg-5">
                        <p class="subtitle text-sm" style="color: #7d514f">Uma sala de jantar nova</p>
                        <h2 class="mb-0">Mesas </h2>
                    </div>
                    <div class="banner-bg"><img class="img-fluid"
                            src="https://www.pngix.com/pngfile/big/130-1305721_wooden-table-png-eco-outdoor-bronte-table-transparent.png"
                            alt=""></div>
                </div>
            </div>
            <div class="mb-2 col-6  col-lg-7 pl-1">
                <div class="banner" style="background-color:#cddeff">
                    <div class="banner-text p-3 p-lg-5">
                        <p class="subtitle text-sm" style="color: #46619a">Tik tak</p>
                        <h2 class="mb-0">Relógios </h2>
                    </div>
                    <div class="banner-bg"><img class="img-fluid"
                            src="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/img/product/category-clocks.jpg"
                            alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-relative py-6 overflow-hidden" style="background-color: #fdf7e5;">
        <svg class="svg-blob svg-blob-fill-current" style="right: 0; top: 0; color: #ded3ae;">
            <use xlink:href="#blob-shape-4"> </use>
        </svg>
        <div class="container"><img class="position-absolute d-none d-sm-block"
                style="right: 5%;top: 0; max-width: 500px; z-index: 5;"
                src="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/img/product/lamps-transparent.png" alt="">
            <div class="position-relative z-index-10">
                <p class="subtitle mb-3" style="color: #846707;">Ambientes largos</p>
                <h4 class="h1 mb-3">As melhores luminárias</h4>
                <h5 class="h2 font-weight-light mb-5">Todas com 60% off!</h5><a class="btn btn-outline-dark"
                    href="#">Compre
                    agora</a>
            </div>
        </div>
    </div>
    <div class="position-relative py-6">
        <svg class="svg-blob svg-blob-fill-current d-none d-md-block" style="left: -200px; top: 400px; color: #ffdbd9;">
            <use xlink:href="#blob-shape-2"> </use>
        </svg>
        <svg class="svg-blob svg-blob-fill-current d-none d-md-block"
            style="right: -200px; top: 600px; color: #e7eaf9;">
            <use xlink:href="#blob-shape-3"> </use>
        </svg>
        <div class="container">
            <h2 class="display-2 font-weight-bold mb-5" style="color: #efb2af">Conheça nossos produtos</h2>
            <div class="masonry-wrapper mx-n3">
                <div class="container">
                    <div class="input-group input-group-underlined">
                        <input class="form-control form-control-underlined " id="searchItems" type="text"
                            placeholder="Buscar" aria-describedby="button-search">
                        <div class="input-group-append ml-0">
                            <button class="btn btn-underlined py-0" id="button-search" type="button">
                                <svg class="svg-icon navbar-icon">
                                    <use xlink:href="#search-1"> </use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="container">
                        <br>
                        <ul class="list-group list-group-horizontal d-flex flex-wrap" id="items">
                            <?php listarProdutos();?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Quickview Modal    -->
            <div class="modal fade quickview" id="quickView" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <button class="close close-absolute close-rotate" type="button" data-dismiss="modal"
                            aria-label="Close">
                            <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
                                <use xlink:href="#close-1"> </use>
                            </svg>
                        </button>
                        <div class="modal-body quickview-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="detail-carousel">
                                        <div class="product-badge badge badge-primary">Novo</div>
                                        <div class="product-badge badge badge-dark">Últimas unidades</div>
                                        <center>
                                            <img class="img-fluid home-slider-image"
                                                src="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/img/product/chair2-transparent.png"
                                                alt="" data-swiper-parallax="-200">
                                        </center>

                                    </div>
                                </div>
                                <div class="col-lg-6 p-lg-5">
                                    <h2 class="mb-4 mt-4 mt-lg-1">Cadeira Eames Branca</h2>
                                    <div
                                        class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                                        <ul class="list-inline mb-2 mb-sm-0">
                                            <li class="list-inline-item h4 font-weight-light mb-0">R$160.00</li>
                                            <li class="list-inline-item text-muted font-weight-light">
                                                <del>R$229.99</del>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="mb-4 text-muted">Inspirada no clássico do design mundial assinado pelo
                                        icônico casal de
                                        designers norte-americanos Charles e Ray Eames, a cadeira Eames Wood mostra o
                                        perfeito equilíbrio
                                        entre formas, ergonomia e volumes dos móveis das décadas de 1940 e 1950.
                                        Confortável e com desenho
                                        atemporal, ela é desenvolvida em polipropileno, madeira maciça Faia com
                                        aplicação de verniz
                                        poliuretano e perfil de aço com pintura epóxi-pó; materiais e acabamentos que
                                        atestam a sua
                                        resistência.</p>
                                    <form id="buyForm_modal" action="#">
                                        <div class="input-group w-100 mb-4">
                                            <input class="form-control detail-quantity" name="items" type="number"
                                                value="1">
                                            <div class="input-group-append flex-grow-1">
                                                <button class="btn btn-dark btn-block" type="submit"> <i
                                                        class="fa fa-shopping-cart mr-1"></i>Adicionar ao
                                                    carrinho</button>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled">
                                            <li><strong>Categoria:</strong> <a class="text-muted" href="#">Cadeiras</a>
                                            </li>
                                            <li><strong>Tags:</strong> <a class="text-muted" href="#">Ergonomia</a>, <a
                                                    class="text-muted" href="#">Elegancia</a></li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar Cart Modal-->
    <?php include'../sidebarRight/sidebarCartModal.php' ?>
    <!-- Sidebar Modal Right-->
    <?php include'../sidebarRight/sidebarModal.php' ?>
    <!-- Login Modal    -->
    <?php 
        if(isset($_SESSION["nome"])) {
            include'../loginModal/loggedLoginModal.php';
        } else {
            $_SESSION["pagina"] = "1";
            include'../loginModal/loginModal.php';
        } 
    ?>
    <!-- Footer-->
    <?php include'../footer/footer.php' ?>
    <!-- jQuery-->
    <script src="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Bundle -->
    <script src="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/vendor/bootstrap/js/bootstrap.bundle.min.js">
    </script>
    <!-- JavaScript files-->
    <script src="../script.js"></script>

</body>

</html>
