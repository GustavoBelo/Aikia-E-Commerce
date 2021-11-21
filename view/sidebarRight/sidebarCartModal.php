<div class="modal fade modal-right" id="sidebarCart" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content sidebar-cart-content">
                <div class="modal-header border-0">
                    <button class="close modal-close close-rotate" type="button" data-dismiss="modal"
                        aria-label="Close">
                        <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
                            <use xlink:href="#close-1"> </use>
                        </svg>
                    </button>
                </div>
                <div class="modal-body px-5 sidebar-cart-body">
                    <!-- Empty cart snippet-->
                    <!-- In case of empty cart - display this snippet + remove .d-none-->
                    <!-- Empty cart snippet end-->
                    <div class="sidebar-cart-product-wrapper custom-scrollbar">
                        <!-- cart item-->
                        <?php 
                            if(isset($_SESSION["email"]) == false) noLoggedEmail(); else showCart();
                        ?>   
                    </div> 
                </div>
                <?php showTotal()?>
            </div>
        </div>
    </div>