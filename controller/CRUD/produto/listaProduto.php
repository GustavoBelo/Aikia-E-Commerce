<?php 
global $cartSubtotal;
    function listarProdutos(){
        $sql = "select * from produto order by codigo";
        $con = new mysqli("localhost", "root", "", "p2");
        $retorno = mysqli_query($con, $sql);	

        while($reg = mysqli_fetch_array($retorno)){
            $codigo = $reg["codigo"];
            $titulo	= $reg["titulo"];

            if($reg["badge"]) $badge = $reg["badge"]; else $badge = ""; 

            $foto	= $reg["foto"];
            $valor = $reg["valor"];
            $GLOBALS['cartSubtotal'] = $GLOBALS['cartSubtotal'] + $valor;

            if($reg["desconto"]) $desconto = $reg["desconto"]; else $desconto = ""; 
            
            echo 
            "<li class='list-group-item col-xl-3 col-lg-4 col-6 flex-fill'>
                <div class='product'>
                    <div class='product-image mb-md-3'>
                        <div class='product-badge badge badge-primary'>$badge</div>
                        <img class='img-fluid'
                            src='$foto'
                            alt='product'/>
                        <div class='product-hover-overlay'><a class='text-dark text-sm' href='../../controller/CRUD/produto/cesta/adicionarAoCarrinho.php?codigo=$codigo'>
                            <svg class='svg-icon text-hover-primary svg-icon-heavy d-sm-none'>
                                <use xlink:href='#retail-bag-1'> </use>
                            </svg><span class='d-none d-sm-inline'>Adicionar ao carrinho</span></a>
                        <div>
                            <a class='text-dark text-hover-primary mr-2' href='#'>
                                <svg class='svg-icon svg-icon-heavy'>
                                    <use xlink:href='#heart-1'> </use>
                                </svg>
                            </a>
                            <a
                                class='text-dark text-hover-primary text-decoration-none' href='#'
                                data-toggle='modal' data-target='#quickView$codigo'>
                                <svg class='svg-icon svg-icon-heavy'>
                                    <use xlink:href='#expand-1'> </use>
                                </svg>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class='position-relative'>
                        <h3 class='text-base mb-1'><a class='text-dark' href='detail-1.html'>$titulo</a></h3>
                        <span class='text-gray-800 text-sm'>R$".number_format($valor, 2, '.', '')."</span><br><span
                        class='text-gray-500 text-sm'><del>".($desconto ? 'R$'.number_format($desconto, 2, '.', '').'' : '' )."</del></span>
                        <div class='product-stars text-xs'><i class='fa fa-star text-primary'></i><i
                                class='fa fa-star text-primary'></i><i
                                class='fa fa-star text-primary'></i><i
                                class='fa fa-star text-muted'></i><i class='fa fa-star text-muted'></i>
                        </div>
                    </div>
                </div>
            </li>";
        }
        mysqli_close($con);
    }
    function listarProdutosCarrinho(){        
        if(!isset($_SESSION["email"])) return false;
    
        $email = $_SESSION["email"];
        $sql = "select p.codigo, p.titulo, p.foto, p.cor, c.quantidade, p.valor, p.desconto from cesta c, produto p where c.codigoProduto=p.codigo and c.email='$email'  order by p.codigo";
        $sqlCodigoCesta 	= "select c.codigo from cesta c, produto p where c.codigoProduto=p.codigo and c.email='$email'";
        $con = new mysqli("localhost", "root", "", "p2");
        $retorno = mysqli_query($con, $sql);
        $retornoCodigoCesta = mysqli_query($con, $sqlCodigoCesta);
    
        while($reg = mysqli_fetch_array($retorno)){
            if($regCodCesta = mysqli_fetch_array($retornoCodigoCesta)){
                $codigo = $regCodCesta["codigo"];
            }
            if($reg["cor"]){
                $cor = $reg["cor"];
            } else $cor = "Incolor"; 
    
            $codigoProduto = $reg["codigo"];
            $titulo	= $reg["titulo"];
            $foto	= $reg["foto"];
            $valor = $reg["valor"];
            $GLOBALS['cartSubtotal'] = $GLOBALS['cartSubtotal'] + $valor;
    
            echo "
            <div class='cart-item'>
                <div class='row d-flex align-items-center text-left text-md-center'>
                    <div class='col-12 col-md-5'><a class='cart-remove close mt-3 d-md-none' href='#'><i
                                class='fa fa-times'> </i></a>
                        <div class='d-flex align-items-center'>
                            <a href='detail-1.html'><img class='cart-item-img'
                                src='$foto'
                                    alt='...'></a>
                            <div class='cart-title text-left'><a class='text-dark link-animated'
                                    href='detail-1.html'><strong>$titulo
                                        </strong></a><br><span class='text-muted text-sm'>Cor:
                                    $cor</span>
                            </div>
                        </div>
                    </div>
                    <div class='col-12 col-md-7 mt-4 mt-md-0'>
                        <div class='row align-items-center'>
                            <div class='col-md-10'>
                                <div class='row'>
                                        <div class='col-6 d-md-none text-muted'>Preço por item</div>
                                        <div class='col-6 col-md-12 text-right text-md-center'>R$".number_format($valor, 2, '.', '')."
                                        </div>
                                </div>
                            </div>
                            <div class='col-2 d-none d-md-block text-center'>
                                <a class='cart-remove text-muted' href='../../controller/CRUD/produto/cesta/removerItem.php?codigoProduto=$codigoProduto&codigo=$codigo&pagina=2'>
                                    <svg class='svg-icon w-2rem h-2rem svg-icon-light'>
                                        <use xlink:href='#close-1'> </use>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
        }
        mysqli_close($con);
    }
    
    function resumeCart(){        
        if(!isset($_SESSION["email"])) return false;
        if ($GLOBALS['cartSubtotal'] >= 300) {
            $frete = 0;
        } else $frete = $GLOBALS['cartSubtotal'] * 0.04;
        $impostos = $GLOBALS['cartSubtotal'] * 0.03;
        $valorTotal = $GLOBALS['cartSubtotal'] + $frete + $impostos;
    
        echo '
        <tr>
            <th class="py-4">cartSubtotal </th>
            <td class="py-4 text-right text-muted">R$'.number_format($GLOBALS['cartSubtotal'] , 2, '.', '').'</td>
        </tr>
        <tr>
            <th class="py-4">Frete e manuseio</th>
            <td class="py-4 text-right text-muted"> R$'.number_format($frete , 2, '.', '').'</td>
        </tr>
        <tr>
            <th class="py-4">Impostos</th>
            <td class="py-4 text-right text-muted">R$'.number_format($impostos , 2, '.', '').'</td>
        </tr>
        <tr>
            <th class="pt-4">Total</th>
            <td class="pt-4 text-right h3 font-weight-normal">R$'.number_format($valorTotal , 2, '.', '').'</td>
        </tr>';
    }
?>

                            