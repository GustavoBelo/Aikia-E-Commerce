<?php 
    $nome = $_SESSION["nome"];
    $email = $_SESSION["email"];
    $telefone = $_SESSION["telefone"];
?>

<script>
    function logout() {
        <?php session_destroy()?> 
        window.location.reload()
    }
</script>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button class="close close-absolute" type="button" data-dismiss="modal" aria-label="Close">
                    <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
                        <use xlink:href="#close-1"> </use>
                    </svg>
                </button>
                <div class="modal-body p-5">
                <h4 >Olá, <?php echo"$nome"; ?>! :D</h4>
                    <ul class="nav list-inline" role="tablist">
                        <li class="list-inline-item"><a class="nav-link nav-link-lg active" data-toggle="tab"
                                href="#loginModalTabLogin" role="tab" id="loginModalLinkLogin"
                                aria-controls="loginModalTabLogin" aria-selected="true">Sua conta</a></li>
                        <li class="list-inline-item"><a class="nav-link nav-link-lg" data-toggle="tab"
                                href="#loginModalTabRegister" role="tab" id="loginModalLinkRegister"
                                aria-controls="loginModalTabRegister" aria-selected="false">Alterar dados</a></li>
                    </ul>
                    <hr class="mb-3">
                    <div class="tab-content">
                        <div class="tab-pane active fade show px-3" id="loginModalTabLogin" role="tabpanel"
                            aria-labelledby="loginModalLinkLogin">
                            <div class="form-group">
                                <label class="form-label" >Nome: <?php echo "$nome" ?> </label><br>
                                <label class="form-label" >Email: <?php echo "$email" ?> </label><br>
                                <label class="form-label" >Telefone: <?php echo "$telefone" ?> </label><br>
                            </div>
                            <button class="btn btn-block btn-outline-dark" type="button"
                                        onclick="logout()"
                                        ><i class="fa fa-sign-in-alt mr-2"></i>
                                        Sair</button>
                        </div>
                        <div class="tab-pane fade px-3" id="loginModalTabRegister" role="tabpanel"
                            aria-labelledby="loginModalLinkRegister">
                            <form action="../../controller/CRUD/update.php" method="post" id="updateForm">
                                <div class="form-group">
                                    <label class="form-label" for="newName">Nome</label>
                                    <input class="form-control" id="newName" name="newName" type="text" value="<?php echo "$nome" ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input class="form-control" id="newEmail" name="newEmail" type="email" value="<?php echo "$email" ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="newTel">Telefone</label>
                                    <input class="form-control" id="newTel" name="newTel" type="tel" value="<?php echo "$telefone" ?>" required>
                                    <small class="form-text text-muted">Formato: (11)55555-5555</small>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="newPassword">Senha</label>
                                    <input class="form-control" id="newPassword" name="newPassword" type="password" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-block btn-outline-dark" type="button"
                                        onclick="updateFormFunc()"><i class="far fa-user mr-2"></i>Alterar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>