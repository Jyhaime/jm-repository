<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Veloue</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


</head>

<body>
    <header>

    <nav class="navbar navbar-expand-lg navbar-light  fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="../img/logoVeloue.png" alt="logoVeloue" width="60"
						height="30"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
				aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse mt-2" id="navbarText">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
							<a class="nav-link" href="../index.php">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="velos.php">Velos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tarifs.php">Tarifs</a>
					</li>
				</ul>
				<div class="navbar-text">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="inscription.php">Inscription</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="connexion.php">Connexion</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="panier.php"><img src="../img/panier.png" alt="logoPanier" height="30"
										width="30"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

    </header>

    <div id="justpushtobottom">
	</div>

    <section id="articleVelos">
        <div class="container mt-3 text-center text-primary">
            <h2>Inscription</h2>
            <br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#pro">Professionnel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#part">Particulier</a>
                </li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="pro" class="container tab-pane active"><br>
                    <div class="container">
                        <form class="form-horizontal" role="form" method="POST" action="bdd.php">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6 text-center">
                                    <h2>Création d'un nouveau compte</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3 field-label-responsive">
                                    <label for="name">Nom</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon" style="width: 2.6rem"><i
                                                    class="fa fa-user"></i></div>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Jack Ninorus" required autofocus>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3 field-label-responsive">
                                    <label for="email">E-Mail </label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon" style="width: 2.6rem"><i
                                                    class="fa fa-at"></i></div>
                                            <input type="text" name="email" class="form-control" id="email"
                                                placeholder="jack-ninorus@example.com" required autofocus>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3 field-label-responsive">
                                    <label for="siret">Siret ou TVA</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon" style="width: 2.6rem"></div>
                                            <input type="text" name="siret" class="form-control" id="siret"
                                                placeholder="Numéros de siret ou TVA" min="5" required autofocus>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-3 field-label-responsive">
                                    <label for="password">Mot de passe</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon" style="width: 2.6rem"><i
                                                    class="fa fa-key"></i></div>
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="Mot de passe" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3 field-label-responsive">
                                    <label for="password">Confirmer Mot de passe</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon" style="width: 2.6rem">
                                                <i class="fa fa-repeat"></i>
                                            </div>
                                            <input type="password" name="password-confirmation" class="form-control"
                                                id="password-confirm" placeholder="Confimer mot de passe" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-warning"><i class="fa fa-user-plus"></i>
                                        Enregistrer</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div id="part" class="container tab-pane fade"><br>
                    <div class="container">
                        <form class="form-horizontal" role="form" method="POST" action="/register">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6 text-center">
                                    <h2>Création d'un nouveau compte</h2>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3 field-label-responsive">
                                    <label for="name">Nom</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon" style="width: 2.6rem"><i
                                                    class="fa fa-user"></i></div>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Jack Ninorus" required autofocus>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3 field-label-responsive">
                                    <label for="email">E-Mail </label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon" style="width: 2.6rem"><i
                                                    class="fa fa-at"></i></div>
                                            <input type="text" name="email" class="form-control" id="email"
                                                placeholder="jack-ninorus@example.com" required autofocus>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3 field-label-responsive">
                                    <label for="password">Mot de passe</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon" style="width: 2.6rem"><i
                                                    class="fa fa-key"></i></div>
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="Mot de passe" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3 field-label-responsive">
                                    <label for="password">Confirmer Mot de passe</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon" style="width: 2.6rem">
                                                <i class="fa fa-repeat"></i>
                                            </div>
                                            <input type="password" name="password-confirmation" class="form-control"
                                                id="password-confirm" placeholder="Confimer mot de passe" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i>
                                        Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>


    </section>




    <footer class="bg-dark mt-5 p-3 text-white">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                        <li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank"
                                class="text-white">Liens vers d'autres sites</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>