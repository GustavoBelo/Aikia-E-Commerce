<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button class="close close-absolute" type="button" data-dismiss="modal" aria-label="Close">
                    <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
                        <use xlink:href="#close-1"> </use>
                    </svg>
                </button>
                <div class="modal-body p-5">
                    <ul class="nav list-inline" role="tablist">
                        <li class="list-inline-item"><a class="nav-link nav-link-lg active" data-toggle="tab"
                                href="#loginModalTabLogin" role="tab" id="loginModalLinkLogin"
                                aria-controls="loginModalTabLogin" aria-selected="true">Entrar</a></li>
                        <li class="list-inline-item"><a class="nav-link nav-link-lg" data-toggle="tab"
                                href="#loginModalTabRegister" role="tab" id="loginModalLinkRegister"
                                aria-controls="loginModalTabRegister" aria-selected="false">Cadastrar</a></li>
                        <li class="list-inline-item"><a class="nav-link nav-link-lg" data-toggle="tab"
                                href="#loginModalTabForgottenPassword" role="tab" id="loginModalLinkForgottenPassword"
                                aria-controls="loginModalTabForgottenPassword" aria-selected="false">Esqueci a senha</a>
                        </li>
                    </ul>
                    <hr class="mb-3">
                    <div class="tab-content">
                        <div class="tab-pane active fade show px-3" id="loginModalTabLogin" role="tabpanel"
                            aria-labelledby="loginModalLinkLogin">
                            <form action="../../controller/login/login.php" method="post" id="loginForm">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input class="form-control" id="email" name="email" type="email">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label class="form-label" for="loginPassword"> Senha</label>
                                        </div>
                                    </div>
                                    <input class="form-control" name="loginPassword" id="loginPassword"
                                        placeholder="Password" type="password" required
                                        data-msg="Please enter your password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="loginRemember" type="checkbox">
                                        <label class="custom-control-label text-muted" for="loginRemember"> <span
                                                class="text-sm">Lembrar
                                                de
                                                mim neste computador</span></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-block btn-outline-dark" type="button"
                                        onclick="loginValidate()"><i class="fa fa-sign-in-alt mr-2"></i>
                                        Entrar</button>
                                </div>
                            </form>
                            <hr class="my-3 hr-text letter-spacing-2" data-content="OU">
                            <div class="text-center">
                                <button class="btn btn btn-outline-primary letter-spacing-0" data-toggle="tooltip"
                                    title="Entrar com o Facebook"><i class="fa-fw fa-facebook-f fab"></i><span
                                        class="sr-only">Entrar
                                        com
                                        o Facebook</span></button>
                                <button class="btn btn btn-outline-muted letter-spacing-0" data-toggle="tooltip"
                                    title="Entrar com o Google"><i class="fa-fw fa-google fab"></i><span
                                        class="sr-only">Entrar com o
                                        Google</span></button>
                            </div>
                        </div>
                        <div class="tab-pane fade px-3" id="loginModalTabRegister" role="tabpanel"
                            aria-labelledby="loginModalLinkRegister">
                            <form method="post" action="../../controller/CRUD/addUser.php" id="registerForm">
                                <div class="form-group">
                                    <label class="form-label" for="registerName">Nome</label>
                                    <input class="form-control" id="registerName" name="registerName" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input class="form-control" id="registerEmail" name="registerEmail" type="email" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="registerTel">Telefone</label>
                                    <input class="form-control" id="registerTel" name="registerTel" type="tel" required>
                                    <small class="form-text text-muted">Formato: (11)55555-5555</small>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="registerPassword">Senha</label>
                                    <input class="form-control" id="registerPassword" name="registerPassword" type="password" required>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-block btn-outline-dark" type="button"
                                    onclick="registerValidate()"
                                    ><i class="far fa-user mr-2"></i>Cadastrar
                                    </button>
                                </div>
                            </form>
                            <hr class="my-3 hr-text letter-spacing-2" data-content="OU ENTRAR COM">
                            <div class="text-center">
                                <button class="btn btn btn-outline-primary letter-spacing-0" data-toggle="tooltip"
                                    title="Entrar com o Facebook"><i class="fa-fw fa-facebook-f fab"></i><span
                                        class="sr-only">Entrar
                                        com
                                        o Facebook</span></button>
                                <button class="btn btn btn-outline-muted letter-spacing-0" data-toggle="tooltip"
                                    title="Entrar com o Google"><i class="fa-fw fa-google fab"></i><span
                                        class="sr-only">Entrar com o
                                        Google </span></button>
                            </div>
                        </div>
                        <div class="tab-pane fade px-3" id="loginModalTabForgottenPassword" role="tabpanel"
                            aria-labelledby="loginModalLinkForgottenPassword">
                            <form action="customer-orders.html" method="get">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input class="form-control" id="recoverEmail" type="email" required>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-block btn-outline-dark" type="button"
                                        onclick="forgottenPassword()"><i class="far fa-user mr-2"></i>Recuperar senha
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>