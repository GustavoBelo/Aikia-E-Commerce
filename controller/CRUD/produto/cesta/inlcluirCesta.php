<?php 
global $subtotal;

    function showCart(){
        if(!isset($_SESSION["email"])) return false;
        $email = $_SESSION["email"];
        $sql 	= "select p.codigo, p.titulo, p.foto, c.quantidade, p.valor, p.desconto from cesta c, produto p where c.codigoProduto=p.codigo and c.email='$email'  order by p.codigo";
        $sqlCodigoCesta 	= "select c.codigo from cesta c, produto p where c.codigoProduto=p.codigo and c.email='$email' order by p.codigo";
        $con = new mysqli("localhost", "root", "", "p2");
        $retorno = mysqli_query($con, $sql);
        $retornoCodigoCesta = mysqli_query($con, $sqlCodigoCesta);

        while($reg = mysqli_fetch_array($retorno)) {
            if($regCodCesta = mysqli_fetch_array($retornoCodigoCesta)){
                $codigo = $regCodCesta["codigo"];
            }
            $codigoProduto	= $reg["codigo"];
            $titulo	= $reg["titulo"];
            $foto	= $reg["foto"];
            $quantidade = $reg["quantidade"];
            $valor = $reg["valor"];
            $valorFinal = $valor*$quantidade;
            $GLOBALS['subtotal'] = $GLOBALS['subtotal'] + $valorFinal;
            if(isset($reg["desconto"])) {
                $desconto = $reg["desconto"];
                $descontoFinal = $desconto*$quantidade;
            } else $descontoFinal = ""; 

            echo
            "
            <div class='navbar-cart-product'>
                <div class='d-flex align-items-center'><a href='#'><img
                            class='img-fluid navbar-cart-product-image' 
                            class='navbar-cart-product-link text-dark link-animated' 
                            class='closeAll close-absolute' data-dismiss='modal' aria-label='Close'
                            data-toggle='modal' data-target='#quickView$codigoProduto, #closeAll-1'
                            src='$foto'
                            alt='...' /></a>
                    <div class='w-100'><a class='close' href='../../controller/CRUD/produto/cesta/removerItem.php?codigoProduto=$codigoProduto&codigo=$codigo&pagina=1'>
                        <svg class='svg-icon sidebar-cart-icon'>
                            <use xlink:href='#close-1'> </use>
                        </svg></a>
                        <div class='pl-3'> <a class='navbar-cart-product-link text-dark link-animated' class='closeAll close-absolute' data-dismiss='modal' aria-label='Close'
                            data-toggle='modal' data-target='#quickView$codigoProduto, #closeAll-1'>$titulo</a><small
                                class='d-block text-muted'>Quantidade: $quantidade
                            </small><span class='text-gray-500 text-sm'><del>".($descontoFinal ? 'R$'.number_format($descontoFinal, 2, '.', '').'' : '' )."</del></span><strong
                                class='d-block text-sm'>R$".number_format($valorFinal, 2, '.', '')."</strong></div>
                    </div>
                </div>
            </div>
            ";
        }
        mysqli_close($con);
    }
    
    function showTotal(){
        if(!isset($_SESSION["email"])) return false;
        $email = $_SESSION["email"];
        $sql 	= "select c.quantidade, p.valor from cesta c, produto p where c.codigoProduto=p.codigo and c.email='$email'  order by p.codigo";
        $con = new mysqli("localhost", "root", "", "p2");
        $retorno = mysqli_query($con, $sql);

        if($reg = mysqli_fetch_array($retorno)){
            $quantidade = $reg["quantidade"];
            $valor = $reg["valor"];
            
            echo
            "
            <div class='modal-footer sidebar-cart-footer shadow'>
                <div class='w-100'>
                    <h5 class='mb-4'>Subtotal: <span class='float-right'>R$".number_format($GLOBALS['subtotal'] , 2, '.', '')."</span></h5><a
                        class='btn btn-outline-dark btn-block mb-3' href='../main/cart.php'>Ver carrinho</a><a
                        class='btn btn-dark btn-block' href='../main/cart.php'>Finalizar compra</a>
                </div>
            </div>
            ";
        }
            
        mysqli_close($con);
        
    }

    function totalItems(){
        if(!isset($_SESSION["email"])) {echo'0'; return false;}
        $email = $_SESSION["email"];
        $sql 	= "select * from cesta c where c.email='$email'";
        $con = new mysqli("localhost", "root", "", "p2");
        $retorno = mysqli_query($con, $sql);
        $total = mysqli_num_rows($retorno);

        echo $total;
        mysqli_close($con);
    }

    function noLoggedEmail() {
        echo 
        '
        <div class="text-center mb-5">
            <svg class="svg-icon w-3rem h-3rem svg-icon-light mb-4 text-muted">
                <use xlink:href="#retail-bag-1"> </use>
            </svg>
            <p>Faça o login para visualizar seu carrinho :D</p>
        </div>
        ';
    }

?>