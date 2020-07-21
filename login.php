<!DOCTYPE html>
<html lang="en">

    <?php require_once("includes/header.php"); ?>

    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">

                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Login</h3>
                                    </div>
                                    
                                    <div class="card-body">
                                        <form action="login.controller.php" method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="nputEmailAddress">Email</label>
                                                <input class="form-control py-4" name='email' id="inputEmailAddress" type="email" placeholder="Digite seu Email" />
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Senha</label><input class="form-control py-4" name='senha' id="inputPassword" type="password" placeholder="DIgite sua Senha" /></div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Lembrar Senha</label></div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="lembrar_senha.php"></a>
                                                <input type="submit" name="login" value='Login' class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>