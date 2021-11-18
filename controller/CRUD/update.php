<script src="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/vendor/jquery/jquery.min.js"></script>
<script>
    function updateUser() {
        alert("Usuário alterado com Sucesso! :P \nPor questões de segurança, faça novamente login com seus novos dados");
        window.location.href = "../../view/main/index.php";
    }
</script>
<?php
    updatePHP();
    function updatePHP() {
        $nome = $_POST["newName"];
        $email = $_POST["newEmail"];
        $telefone = $_POST["newTel"];
        $senha = $_POST["newPassword"];
        $con = new mysqli("localhost", "root", "", "p2");
        if($nome && $email && $telefone && $senha){
            $sql = "update usuario set nome ='$nome', email ='$email', telefone = '$telefone', senha = md5('$senha') where email = '$email'";
        }
        if(mysqli_query($con, $sql)) {
            echo "<script>", "updateUser();", "</script>";
        } else {
            echo "<script>alert('Ocorreu um erro, favor entrar em contato com o desenvolvedor.');</script>";
        }
        mysqli_close($con);
    }
?>  
