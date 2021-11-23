<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Redefinir senha</title>
        <!-- Custom font-->
        <link rel="stylesheet" href="fonts/stylesheet.e9dc714d.css">
        <!-- Theme stylesheet-->
        <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/css/style.default.bc0dbdbe.css"
            id="theme-stylesheet">
        <!-- Favicon-->
        <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/img/favicon.png">
        <!-- FontAwesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css">
    </head>
    <?php 
        $email = $_GET["email"];
    ?>
    <body>
        <div style="width: 80%; margin-left: 10%; margin-top: 5%;">
            <div style="text-align: center;"> 
                <a class="navbar-brand" 
                href="index.php"><h1>Aikia</h1></a>
            </div>
            <form action="../../controller/CRUD/update.php" method="post" id="updatePasswordForm">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input class="form-control" id="oldEmail" name="oldEmail" type="email" value="<?php echo "$email"?>" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Senha</label> <br>
                    <input class="form-control" id="newPassword" name="newPassword" 
                        type="password" style="float: left; width: 88%" required>
                    &nbsp;
                    <img id="olho" src="../../images/eye.png"/>
                </div>
                <br>
                <div class="form-group">
                    <button class="btn btn-block btn-outline-dark" type="button"
                        onclick="updatePasswordForm()"><i class="far fa-user mr-2"></i>Redefinir senha
                    </button>
                </div>
            </form>
        </div>
        

        <!-- jQuery-->
        <script src="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap Bundle -->
        <script src="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/vendor/bootstrap/js/bootstrap.bundle.min.js">
        </script>
        <!-- JavaScript files-->
        <script src="../script.js"></script>
    </body>
</html>

