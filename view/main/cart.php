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

<?php session_start(); ?>

<!-- Product list -->
<?php include'../../controller/CRUD/produto/listaProduto.php'; ?>
<!-- Quickview Modal    -->
<?php include'../../controller/CRUD/produto/quickViewModal.php'; ?>
 <!-- Preview Cart -->
<?php include'../../controller/CRUD/produto/cesta/inlcluirCesta.php'; ?>

<body>
    <!-- navbar-->
    <?php include'../header/header.php'?>
    <!-- Hero Section-->
    <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb pl-0 ">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Carrinho de compras</li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
            <h1 class="hero-heading">Carrinho de compras</h1>
            <div>
                <p class="lead text-muted">Você tem <?php totalItems()?> itens no carrinho.</p>
            </div>
        </div>
    </div>
    <!-- Shopping Cart Section-->
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 pr-xl-5">
                    <div class="cart mb-5">
                        <div class="cart-body">
                            <!-- Product-->
                            <?php listarProdutosCarrinho()?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between flex-column flex-lg-row mb-5 mb-lg-0"><a
                            class="btn btn-link text-muted" href="index.php"><i class="fa fa-chevron-left"></i>
                            Continue Comprando</a><a class="btn btn-link text-primary" href="cart.php"><i
                                class="fa fa-sync"></i> Recarregar
                            carrinho </a></div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-5">
                        <div class="card-header">
                            <h6 class="mb-0">Resumo</h6>
                        </div>
                        <div class="card-body py-4">
                            <p class="text-muted text-sm">Frete e custos adicionais são calculados baseado nos valores
                                que você colocou.</p>
                            <table class="table card-text">
                                <?php resumeCart()?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sidebar Modal Right-->
    <?php include'../sidebarRight/sidebarModal.php' ?>
    <!-- Login Modal    -->
    <?php 
        if(isset($_SESSION["nome"])) {
            include'../loginModal/loggedLoginModal.php';
        } else {
            $_SESSION["pagina"] = "2";
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