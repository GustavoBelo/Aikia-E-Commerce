<script src="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/vendor/jquery/jquery.min.js"></script>
<script>
    function login() {
        var confirmado = confirm("Usuário adicionado com Sucesso!\nDeseja voltar logado?");
            if(confirmado){
                window.location.href = "../../../view/index.php";
            }else{
                window.location.href = "../../../view/index.php";
            }
    }
</script>
<?php
    addUser();
    function addUser() {
        $nome = $_POST["registerName"];
        $email = $_POST["registerEmail"];
        $telefone = $_POST["registerTel"];
        $senha = $_POST["registerPassword"];
        $con = new mysqli("localhost", "root", "", "p2");
        if($nome && $email && $telefone && $senha){
            $sql = "insert into usuario(nome, email, telefone, senha) values ('$nome', '$email', '$telefone', md5('$senha'))";
        }
        if(mysqli_query($con, $sql)) {
            echo '<script>', 'login();', '</script>';
        } else {
            echo "<script>alert('Ocorreu um erro, favor entrar em contato com o desenvolvedor.');</script>";
        }
        mysqli_close($con);
    }
?>  
