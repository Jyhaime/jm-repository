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
	<section id="slider">
		<div id="carouselVelos" class="carousel slide mt-5" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselVelos" data-slide-to="0" class="active"></li>
				<li data-target="#carouselVelos" data-slide-to="1"></li>
				<li data-target="#carouselVelos" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner ">
				<div class="carousel-item active">
					<img src="../img/bicycle.1209682_960_720.000.jpg" class="d-block w-100" alt="Bicycle">
				</div>
				<div class="carousel-item">
					<img src="../img/city.000.bike.jpg" class="d-block w-100" alt="HommVelo">
				</div>
				<div class="carousel-item">
					<img src="../img/bike.1836934_960_720.jpg" class="d-block w-100" alt="HommeVeloDeVille">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselVelos" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Precedent</span>
			</a>
			<a class="carousel-control-next" href="#carouselVelos" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Suivant</span>
			</a>
		</div>
	</section>

	<section id="articleVelos">
		<div class="container mt-3">
			<h2>Les différents types de vélos</h2>
			<br>
			<!-- Nav tabs -->
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#Vtt">VTT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#VeloDeVille">VELO DE VILLE</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#VeloElectrique">VELO ELECTRIQUE</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div id="Vtt" class="container tab-pane active"><br>
					<article class="row col-lg-12 col-sm-12 ">
						<div class="col-lg-7 col-md-12 col-sm-12">
							<h1>Le VTT</h1>
							<p class=" text-justify p-2">
								Pour choisir un VTT, prenez en compte sa sécurité et sa fiabilité. Presque tous les
								vélos de
								ce
								type sont désormais équipés de suspensions. Elles sont nécessaires pour amortir les
								vibrations
								et les chocs dus aux aspérités du terrain.
								<br><br>
								La fourche téléscopique des VTT offre un véritable confort de conduite, très appréciable
								notamment quand les randonnées durent longtemps. Certains vélos intègrent parfois une
								suspension
								supplémentaire dans leur cadre (c'est ce qu'on appelle un "vélo tout suspendu").
								<br><br>
								Pour le cadre, l'acier reste le matériau le plus abordable financièrement. Il est
								confortable et
								les cadres sont performants.
								L'aluminium est à la fois léger et résistant.
								Le carbone et les matériaux composites restent réservés à la performance.
								Enfin le titane est le matériau idéal : souple, inoxydable et très résistant.
								Inconvénient :
								il
								est très cher !

							</p>
						</div>



						<img src="../img/mountain-biking-276212_960_720.jpg" alt="VelosEnFamille"
							class="d-bloc rounded col-lg-5 col-md-12 col-sm-12  w-100">

						<p class="text-justify p-4">
							Quelle taille ?
							<br><br>
							Généralement, les constructeurs indiquent la taille de leurs cadres en pouce (1 pouce = 2,54
							cm). Cela correspond à la longueur comprise entre le haut du tube sous la selle et la boîte
							de
							pédalier. En gros : à votre longueur d'entrejambe.
							Le meilleur moyen pour choisir est de tester et de comparer plusieurs modèles pour savoir
							quelle
							taille de vélo adopter. Une fois assis sur la selle, si vous touchez le sol de la pointe des
							pieds, c'est que la bicyclette est adaptée à votre taille.
						</p>
						<a href="#" class="btn">Ajouter</a>
					</article>
				</div>
				<div id="VeloDeVille" class="container tab-pane fade"><br>
					<article class="row col-lg-12 col-sm-12 ">
						<div class="col-lg-7 col-md-12 col-sm-12">
							<h1>Le velo de ville</h1>
							<p class=" text-justify p-2">
								Pour choisir un VTT, prenez en compte sa sécurité et sa fiabilité. Presque tous les
								vélos de
								ce
								type sont désormais équipés de suspensions. Elles sont nécessaires pour amortir les
								vibrations
								et les chocs dus aux aspérités du terrain.
								<br><br>
								La fourche téléscopique des VTT offre un véritable confort de conduite, très appréciable
								notamment quand les randonnées durent longtemps. Certains vélos intègrent parfois une
								suspension
								supplémentaire dans leur cadre (c'est ce qu'on appelle un "vélo tout suspendu").
								<br><br>
								Pour le cadre, l'acier reste le matériau le plus abordable financièrement. Il est
								confortable et
								les cadres sont performants.
								L'aluminium est à la fois léger et résistant.
								Le carbone et les matériaux composites restent réservés à la performance.
								Enfin le titane est le matériau idéal : souple, inoxydable et très résistant.
								Inconvénient :
								il
								est très cher !

							</p>
						</div>



						<img src="../img/bicycle-1209682_960_720.jpg" alt="VelosDeVille"
							class="d-bloc rounded col-lg-5 col-md-12 col-sm-12  w-100">

						<p class="text-justify p-4">
							Quelle taille ?
							<br><br>
							Généralement, les constructeurs indiquent la taille de leurs cadres en pouce (1 pouce = 2,54
							cm). Cela correspond à la longueur comprise entre le haut du tube sous la selle et la boîte
							de
							pédalier. En gros : à votre longueur d'entrejambe.
							Le meilleur moyen pour choisir est de tester et de comparer plusieurs modèles pour savoir
							quelle
							taille de vélo adopter. Une fois assis sur la selle, si vous touchez le sol de la pointe des
							pieds, c'est que la bicyclette est adaptée à votre taille.
						</p>
						<a href="#" class="btn ">Ajouter</a>
					</article>
				</div>
				<div id="VeloElectrique" class="container tab-pane fade"><br>
					<article class="row col-lg-12 col-sm-12 ">
						<div class="col-lg-7 col-md-12 col-sm-12">
							<h1>Le vélo électrique</h1>
							<p class=" text-justify p-2">
								Pour choisir un VTT, prenez en compte sa sécurité et sa fiabilité. Presque tous les
								vélos de
								ce
								type sont désormais équipés de suspensions. Elles sont nécessaires pour amortir les
								vibrations
								et les chocs dus aux aspérités du terrain.
								<br><br>
								La fourche téléscopique des VTT offre un véritable confort de conduite, très appréciable
								notamment quand les randonnées durent longtemps. Certains vélos intègrent parfois une
								suspension
								supplémentaire dans leur cadre (c'est ce qu'on appelle un "vélo tout suspendu").
								<br><br>
								Pour le cadre, l'acier reste le matériau le plus abordable financièrement. Il est
								confortable et
								les cadres sont performants.
								L'aluminium est à la fois léger et résistant.
								Le carbone et les matériaux composites restent réservés à la performance.
								Enfin le titane est le matériau idéal : souple, inoxydable et très résistant.
								Inconvénient :
								il
								est très cher !

							</p>
						</div>



						<img src="../img/stock-photo-young-man-with-electric-bicycle-or-e-bike-435399253.jpg" alt="VelosElectriquee"
							class="d-bloc rounded col-lg-5 col-md-12 col-sm-12  w-100">

						<p class="text-justify p-4">
							Quelle taille ?
							<br><br>
							Généralement, les constructeurs indiquent la taille de leurs cadres en pouce (1 pouce = 2,54
							cm). Cela correspond à la longueur comprise entre le haut du tube sous la selle et la boîte
							de
							pédalier. En gros : à votre longueur d'entrejambe.
							Le meilleur moyen pour choisir est de tester et de comparer plusieurs modèles pour savoir
							quelle
							taille de vélo adopter. Une fois assis sur la selle, si vous touchez le sol de la pointe des
							pieds, c'est que la bicyclette est adaptée à votre taille.
						</p>
						<a href="#" class="btn">Ajouter</a>
					</article>
				</div>
			</div>
		</div>


	</section>

	<footer class="bg-dark mt-5 p-3 text-white">
			<div class="container">
				<div class="row justify-content-around">
					<div class="col-lg-3 col-md-6 col-sm-12 ">
						<ul class="list-group list-group-flush ">
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<ul class="list-group list-group-flush">
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<ul class="list-group list-group-flush">
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
							</li>
							<li class="list-group-item bg-dark"><a href="http://google.fr" target="_blank" class="text-white">Liens vers d'autres sites</a>
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
</body>

</html>