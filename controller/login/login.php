<script src="script.js"></script>

<?php
    doLogin();
    function doLogin(){
        $email = $_POST["email"];
        $senha = $_POST["loginPassword"];
        $con = new mysqli("localhost", "root", "", "p2");

        if ($email && $senha){
            $sql = "select * from usuario where email='$email' and senha=md5('$senha')";
        } else echo "Não recebemos o email ou a senha."; 
 
        $return = mysqli_query($con, $sql);
        if($reg = mysqli_fetch_array($return)){
            session_start();
            $_SESSION["codigo"] = $reg["codigo"];
            $_SESSION["nome"] = $reg["nome"];
            $_SESSION["email"] = $reg["email"];
            $_SESSION["telefone"] = $reg["telefone"];
            
            if($_SESSION["pagina"] == "1") 
                header("location: ../../view/main/index.php"); 
            else 
                header("location: ../../view/main/cart.php");
            
        } else {
            echo "<script>invalidLogin()</script>";
        }
    }
?>