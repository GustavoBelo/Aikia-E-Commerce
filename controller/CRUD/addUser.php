<script src="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/vendor/jquery/jquery.min.js"></script>
<script>
    function login() {
        alert("Usuário adicionado com Sucesso!\nAgora você pode fazer o login :D");
        window.location.href = "../../view/main/index.php";
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
        if($nome && $email && $telefone && $senha) {
            $allUsers = "select * from usuario user where user.email='$email'";
            $result = mysqli_query($con ,$allUsers);
            if (mysqli_num_rows($result)>0) {
                echo "<script>alert('Email já cadastrado, tente logar! :D.');</script>"; 
                header('location: ../../view/main/index.php');
                return false;
            }
            $sql = "insert into usuario(nome, email, telefone, senha) values ('$nome', '$email', '$telefone', md5('$senha'))";
        }
        if(mysqli_query($con, $sql)) {
            echo "<script>", "login();", "</script>";
        } else {
            echo "<script>alert('Ocorreu um erro, favor entrar em contato com o desenvolvedor.');</script>";
        }
        mysqli_close($con);
    }
?>  
