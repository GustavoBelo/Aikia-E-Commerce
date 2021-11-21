<script>
    function addSuccess() {
        alert("Item adicionado ao carrinho com sucesso!");
        window.location.href = "../../../../view/main/index.php"
	}
    function addFail() {
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
	} else addItem();
	 
	function addItem(){
		if(isset($_GET["codigo"])){
			$produto = $_GET["codigo"];
			$email = $_SESSION["email"];
			$sql = "insert into cesta(email, codigoProduto) values('$email', '$produto')";
			$conexao = new mysqli("localhost","root","","p2");
			mysqli_query($conexao, $sql);
			mysqli_close($conexao);
			echo "<script>addSuccess()</script>";
		}else 
			echo "<script>addFail()</script>";
	}
?>