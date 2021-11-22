<?php 
    function detalhaProduto(){
        $sql = "select * from produto order by codigo";
        $con = new mysqli("localhost", "root", "", "p2");
        $retorno = mysqli_query($con, $sql);

        while($reg = mysqli_fetch_array($retorno)){
            $codigo = $reg["codigo"];
            $titulo	= $reg["titulo"];

            if($reg["badge"]) $badge = $reg["badge"]; else $badge = ""; 

            $descritivo	= $reg["descritivo"];
            $foto	= $reg["foto"];
            $quantidade = $reg["quantidade"];
            $valor = $reg["valor"];

            if($reg["desconto"]) $desconto = $reg["desconto"]; else $desconto = ""; 

            $categoria = $reg["categoria"];	
            $tags = $reg["tags"];		
            
            echo 
            "
            <div class='modal fade quickview' id='quickView$codigo' tabindex='-1' role='dialog' aria-hidden='true'>
                <div class='modal-dialog modal-xl' role='document'>
                    <div class='modal-content'>
                        <button class='close close-absolute close-rotate' type='button' data-dismiss='modal'
                            aria-label='Close'>
                            <svg class='svg-icon w-3rem h-3rem svg-icon-light align-middle'>
                                <use xlink:href='#close-1'> </use>
                            </svg>
                        </button>
                        <div class='modal-body quickview-body'>
                            <div class='row'>
                                <div class='col-lg-6'>
                                    <div class='detail-carousel'>
                                        <div class='product-badge badge badge-primary'>$badge</div>
                                        <div class='product-badge badge badge-dark'>Black Friday</div>
                                        <center>
                                            <img class='img-fluid home-slider-image'
                                                src='$foto'
                                                alt='' data-swiper-parallax='-200'>
                                        </center>

                                    </div>
                                </div>
                                <div class='col-lg-6 p-lg-5'>
                                    <h2 class='mb-4 mt-4 mt-lg-1'>$titulo</h2>
                                    <div
                                        class='d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4'>
                                        <ul class='list-inline mb-2 mb-sm-0'>
                                            <li class='list-inline-item h4 font-weight-light mb-0'>R$".number_format($valor, 2, '.', '')."</li>
                                            <li class='list-inline-item text-muted font-weight-light'>
                                                <del>".($desconto ? 'R$'.number_format($desconto, 2, '.', '').'' : '' )."</del>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class='mb-4 text-muted'>$descritivo</p>
                                    <form id='buyForm_modal' action='#'>
                                        <div class='input-group w-100 mb-4'>
                                            <input class='form-control detail-quantity' name='items' 
                                                value='$quantidade' disabled>
                                            <div class='input-group-append flex-grow-1'>
                                                <button class='btn btn-dark btn-block' type='submit'> <i
                                                        class='fa fa-shopping-cart mr-1'></i>Adicionar ao
                                                    carrinho</button>
                                            </div>
                                        </div>
                                        <ul class='list-unstyled'>
                                            <li><strong>Categoria:</strong> <a class='text-muted' href='#'>$categoria</a>
                                            </li>
                                            <li><strong>Tags:</strong> <a class='text-muted' href='#'>$tags</a>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        mysqli_close($con);
    }
?>