<?php 
require 'libs/shared/head.php';
require 'libs/shared/footer.php';
require 'libs/shared/nav.php';

    head("Page d'accueil");
    nav("Home");
?>
	

	
	<section id="slider">
		<div id="carouselVelos" class="carousel slide mt-5" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselVelos" data-slide-to="0" class="active"></li>
				<li data-target="#carouselVelos" data-slide-to="1"></li>
				<li data-target="#carouselVelos" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner ">
				<div class="carousel-item active">
					<img src="libs/img/bicycle.1209682_960_720.000.jpg" class="d-block w-100" alt="Bicycle">
				</div>
				<div class="carousel-item">
					<img src="libs/img/city.000.bike.jpg" class="d-block w-100" alt="HommVelo">
				</div>
				<div class="carousel-item">
					<img src="libs/img/bike.1836934_960_720.jpg" class="d-block w-100" alt="HommeVeloDeVille">
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

	<section id="articlePrincipal">
		<div class="container mt-5 mb-5">
			<div class="row col12 p-2">
				<article class="d-block col-lg-7 col-sm-12 ">
					<h1>1. Faire du vélo favorise la perte de poids</h1>
					<p class="text-justify p-2">
						Le cyclisme est probablement le meilleur exercice pour améliorer votre condition physique de façon saine tout en brûlant des graisses. Mais il n’y a pas que les personnes cherchant à se débarrasser de quelques kilos superflus qui peuvent en profiter : faire du vélo est également un excellent moyen d’être plus actif physiquement. “ Le cyclisme est un sport qui allie plaisir et sentiment de liberté…même si quelquefois cela peut aussi être exténuant ”, nous explique notre expert en vélo.
					</p>
				</article>
					<aside class="col-lg-5 col-sm-12 m-0 p-4">
					<img src="libs/img/07.08._Biking-benefits.jpg" alt="VelosEnFamille"
						class="d-bloc w-100 ">
				</aside>
				<aside class="col-lg-5 col-sm-12 m-0 p-4">
								<img src="libs/img/csm_Loire_-_velo_-_famille_01_a08f67e75a.jpg" alt="VelosEnFamille"
									class="d-bloc w-100 ">
								</aside>
				<article class="d-block col-lg-7 col-sm-12 ">	
					<h1>2. Le cyclisme renforce le système cardiovasculaire</h1>
					<p class="text-justify p-2">
						” Faire du vélo va considérablement faire travailler votre système cardiovasculaire et booster votre métabolisme à condition bien entendu de pédaler à la bonne intensité ! Les débutants font souvent l’erreur d’enfourcher leur vélo et de se mettre à pédaler à toute allure. Mais ce n’est pas la bonne approche si vous voulez améliorer votre condition physique sur le long terme. Il est très important de choisir la bonne intensité et la bonne durée de votre entraînement.” 
					</p>
				</article>
				<article class="d-block col-lg-7 col-sm-12 ">
						<h1>3. Le vélo est un sport à faible impact</h1>
						<p class="text-justify p-2">
								Le cyclisme va vous permettre d’améliorer votre endurance et de booster le brûlage des graisses. Mais c’est aussi un exercice à faible impact qui va ménager vos articulations. Vous avez des problèmes de genoux ? Faire du vélo va vous aider à apaiser les douleurs : le mouvement circulaire et continu effectué en pédalant va renforcer les muscles de vos jambes et aider vos articulations à se rétablir en les faisant travailler en douceur. Contrairement aux sports comme la course à pied, vos genoux n’auront en effet pas à supporter le poids de votre corps. Et comme vous allez par la même occasion vous débarrasser de quelques kilos en trop, vos articulations vous en remercieront.
							</p>
					</article>
						<aside class="col-lg-5 col-sm-12 m-0 p-4">
						<img src="libs/img/road-bike.jpg" alt="VelosEnFamille"
							class="d-bloc w-100 ">
					</aside>
				
					
					
				
				
				
			</div>
		</div>
	</section>
	<section id="produit">
		<div class="container">

			<div class="row justify-content-around ">

				<div class="card col-lg-3 col-md-6 col-sm-12">
					<img src="libs/img/green.bike.by.water.jpg" class="card-img-top pt-2" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">VTT</h5>
						<br><br>
						<a href="Pages/velos.html" class="btn ">Description</a>
						<a href="#" class="btn ">Ajouter</a>
					</div>
				</div>
				<div class="card col-lg-3 col-md-6 col-sm-12">
					<img src="libs/img/person.731492_960_720.jpg" class="card-img-top pt-2" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">Velo de ville</h5>
						<br><br>
						<a href="Pages/velos.html" class="btn ">Description</a>
						<a href="#" class="btn ">Ajouter</a>
					</div>
				</div>
				<div class="card col-lg-3 col-md-6 col-sm-12 ">
					<img src="libs/img/stock.photo.young.man.with.electric.bicycle.or.e.bike.435399253.jpg" class="card-img-top pt-2" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">Velo électrique</h5>
						<br><br>
						<a href="Pages/velos.html" class="btn ">Description</a>
						<a href="#" class="btn ">Ajouter</a>
					</div>
				</div>
			


			</div>
		</div>
	</section>
	

<?php 

    footer("footer");

?> 