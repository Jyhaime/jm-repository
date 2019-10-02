<?php

function nav($active){

?>

<header>

	<nav class="navbar navbar-expand-lg navbar-light  fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="libs/img/logoVeloue.png" alt="logoVeloue" width="60"
						height="30"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
				aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse mt-2" id="navbarText">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item 
					<?php 
          if($active === 'Accueil'){ 
            echo'active'; 
          } 
        ?> 
					">
							<a class="nav-link " href="index1.php">Accueil</a>
					</li>
					<li class="nav-item
					<?php 
          if($active === 'Velos'){ 
            echo'active'; 
          } 
        ?> 
					">
						<a class="nav-link" href="pages/velos.php">Velos</a>
					</li>
					<li class="nav-item
					<?php 
          if($active === 'Tarifs'){ 
            echo'active'; 
          } 
        ?> 
					">
						<a class="nav-link" href="pages/tarifs.php">Tarifs</a>
					</li>
				</ul>
				<div class="navbar-text">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item
						<?php 
          if($active === 'Inscription'){ 
            echo'active'; 
          } 
        ?> 
						">
							<a class="nav-link" href="pages/inscription.php">Inscription</a>
						</li>
						<li class="nav-item
						<?php 
          if($active === 'Connexion'){ 
            echo'active'; 
          } 
        ?> 
						">
							<a class="nav-link" href="libs/pages/connexion.php">Connexion</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="pages/panier.php"><img src="libs/img/panier.png" alt="logoPanier" height="30"
										width="30"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	</header>

<?php 
}
?>