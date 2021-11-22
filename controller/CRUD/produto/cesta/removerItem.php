<script>
    function removeSuccess(pagina) {
        alert("Item removido do carrinho com sucesso!");
        if(pagina == 2){
            window.location.href = "../../../../view/main/cart.php"
        } else {
            window.location.href = "../../../../view/main/index.php"
        }
	}
    function revomeFail() {
        alert("Ocorreu um erro\nFavor entrar em contato com o desenvolvedor");
        window.location.href = "../../../../view/main/index.php"
	}

	function noLoginError() {
        alert("Você precisa estar logado para adicionar um item a sua cesta");
        window.location.href = "../../../../view/main/index.php"
	}
</script>

<?php
	session_start();
	if(session_id() == null) {
		echo "<script>noLoginError()</script>";
	} else removeItem();
	 
	function removeItem(){
		if(isset($_GET["codigoProduto"]) && isset($_GET["codigo"]) && isset($_GET["pagina"])){
            $pagina = $_GET["pagina"];
			$codigo = $_GET["codigo"];
			$codigoProduto = $_GET["codigoProduto"];
			$email = $_SESSION["email"];
			$sql = "delete from cesta where codigoProduto='$codigoProduto' and codigo='$codigo' and email='$email'";
			$conexao = new mysqli("localhost","root","","p2");
			mysqli_query($conexao, $sql);
			mysqli_close($conexao);
			echo "<script>removeSuccess($pagina)</script>";
		}else 
			echo "<script>revomeFail()</script>";
	}
?>