<?php 
    $email = $_GET["email"];
?>
<form action="../../controller/CRUD/update.php" method="post" id="updatePasswordForm">
    <div class="form-group">
        <label class="form-label">Email</label>
        <input class="form-control" id="oldEmail" name="oldEmail" type="email" value="<?php echo "$email"?>" required>
    </div>
    <div class="form-group">
        <label class="form-label">Senha</label>
        <input class="form-control" id="newPassword" name="newPassword" type="password" required>
        <img id="olho" src="../../images/eye.png"/>
    </div>
    <div class="form-group">
        <button class="btn btn-block btn-outline-dark" type="button"
            onclick="updatePasswordForm()"><i class="far fa-user mr-2"></i>Alterar
        </button>
    </div>
</form>

<!-- jQuery-->
<script src="https://d19m59y37dris4.cloudfront.net/varkala/1-2-1/vendor/jquery/jquery.min.js"></script>
<!-- JavaScript files-->
<script src="../script.js"></script>