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
    <link rel="stylesheet" href="../styles/stylesPanier.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

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

    <div class="container">
        <div class="card shopping-cart">
            <div class="card-header bg-primary text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Mon pannier
                <a href="../index.html" class="btn btn-outline-info btn-sm pull-right">Continuer la visite</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                <!-- PRODUCT -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2 text-center">
                        <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120"
                            height="80">
                    </div>
                    <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                        <h4 class="product-name"><strong>Product Name</strong></h4>
                        <h4>
                            <small>Product description</small>
                        </h4>
                    </div>
                    <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                        <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                            <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4">
                            <div class="quantity">
                                <input type="button" value="+" class="plus">
                                <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                    size="4">
                                <input type="button" value="-" class="minus">
                            </div>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 text-right">
                            <button type="button" class="btn btn-outline-danger btn-xs">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- END PRODUCT -->
                <!-- PRODUCT -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2 text-center">
                        <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120"
                            height="80">
                    </div>
                    <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                        <h4 class="product-name"><strong>Product Name</strong></h4>
                        <h4>
                            <small>Product description</small>
                        </h4>
                    </div>
                    <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                        <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                            <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4">
                            <div class="quantity">
                                <input type="button" value="+" class="plus">
                                <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                    size="4">
                                <input type="button" value="-" class="minus">
                            </div>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 text-right">
                            <button type="button" class="btn btn-outline-danger btn-xs">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <hr>

            </div>
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">

                </div>
                <div class="pull-right" style="margin: 10px">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal">Paiement</button>
                    <div class="pull-right" style="margin: 5px">
                        Prix total: <b>50.00€</b>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="col-lg-12 col-md-6">
                   

                    <!-- form card cc payment -->
                    <div class="card card-outline-secondary">
                        <div class="card-body">
                            <h3 class="text-center">Paiement par carte de crédit</h3>
                            <hr>
                            <div class="alert alert-info p-2 pb-3">
                                <a class="close font-weight-normal initialism" data-dismiss="alert"
                                    href="#"><samp>×</samp></a>
                                le code CVC est requis.
                            </div>
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="cc_name">Nom</label>
                                    <input type="text" class="form-control" id="cc_name" pattern="\w+ \w+.*"
                                        title="First and last name" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Numéros de la carte</label>
                                    <input type="text" class="form-control" autocomplete="off" maxlength="20"
                                        pattern="\d{16}" title="Credit card number" required="">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-12">Date d'expiration</label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="cc_exp_mo" size="0">
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" name="cc_exp_yr" size="0">
                                            <option>2019</option>
                                            <option>2020</option>
                                            <option>2021</option>
                                            <option>2022</option>
                                            <option>2023</option>

                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" autocomplete="off" maxlength="3"
                                            pattern="\d{3}" title="Three digits at back of your card" required=""
                                            placeholder="CVC">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-12">Amount</label>
                                </div>
                                <div class="form-inline">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                        <input type="text" class="form-control text-right" id="exampleInputAmount"
                                            placeholder="39">
                                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <button type="reset" class="btn btn-default btn-lg btn-block">Annuler</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Soumettre</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <div id="justpushtobottom">
    </div>
    
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

    <script src="https://use.fontawesome.com/c560c025cf.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>