<script>

    function resetPasswordAlert() {
        alert("Email enviado com sucesso!");
        window.location.href = "../view/main/index.php"
    }

    function invalidEmailError() {
        alert("Email enviado com sucesso!");
        window.location.href = "../view/main/index.php"
    }

    function UnresgisteredEmailError() {
        alert("Este email não está cadastrado no nosso banco de dados.\nFaça o cadastro para redefinir a senha.");
        window.location.href = "../view/main/index.php"
    }

	function sendEmailError() {
		alert("Ocorreu um erro ao enviar o email, favor entrar em contato com o desenvolvedor");
        window.location.href = "../view/main/index.php"
	} 
</script>

<?php
if($email = $_POST["recoverEmail"]){
    resetPassword($email);
} else {
    echo "<script>invalidEmailError()</script>";
}

function resetPassword($email) { 
    $con = new mysqli("localhost", "root", "", "p2");
    $sql = "select * from usuario where email='$email'";
    $return = mysqli_query($con, $sql);

    if (mysqli_fetch_array($return)){
        $para = "to: $email";
		$assunto = "Redefinir senha";
        
        $mensagem = "Recebemos uma solicitação para redefinir sua senha, 
		caso queira proseguir <a href='http://localhost/pweb/projetop2/view/main/resetPassword.php?email=$email'>clique aqui</a><br>Se você não pediu, 
		favor ignorar este e-mail.";

		$header = "MIME-Version: 1.0\r\n";
		$header .= "Content-Type: text/html; charset=UTF-8\r\n"; 
		$header .= "from: Aikia E-commerce<aikia.ecommerce@gmail.com>";

		$success = mail($para, $assunto, $mensagem, $header);
		if($success){	 
			echo "<script>resetPasswordAlert()</script>"; 
		} else {
            echo "<script>sendEmailError()</script>";
        }	
    } else echo "<script>UnresgisteredEmailError()</script>"; 
}
?> 