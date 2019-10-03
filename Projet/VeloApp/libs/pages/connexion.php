<?php 
require '../shared/head.php';
require '../shared/footer.php';
require '../shared/nav.php';

    head("Page d'accueil");
    nav("Home");
?>

    <div id="justpushtobottom">
    </div>

    <div id="login">
        <h3 class="text-center text-primary pt-5">Connexion</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">

                            <div class="form-group">
                                <label for="mail" class="text-primary">E-mail</label><br>
                                <input type="text" name="email" id="email" class="form-control"
                                    placeholder="jack-ninorus@example.com" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-primary">Mot de passe:</label><br>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Mot de passe" required>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-primary"><span>Se souvenir de moi</span> <span><input
                                            id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-md" value="Connexion">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="../Pages/inscription.html" class="text-primary">Pas de compte?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="justpushtobottom">
    </div>

    <?php 

    footer("footer");

?> 