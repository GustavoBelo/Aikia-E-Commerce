<?php 
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
?>