<?php 
	include("header.php");
?>
<main id="inicio">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
      	<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
      	<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      	<div class="carousel-item active">
        	<img class="bd-placeholder-img" src="../img/slider1.jpeg" width="100%">
      	</div>
      	<div class="carousel-item">
        	<img class="bd-placeholder-img" src="../img/slider2.jpeg" width="100%">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  	</div>
  	<div class="container marketing">
    	<hr class="featurette-divider">
    	<div class="row featurette">
      	<div class="col-md-7">
        	<h2 class="featurette-heading fw-normal lh-1">¿Por que una cerveza artesana? <span class="text-muted">Acompañanos para saber más</span></h2>
        	<p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      	</div>
      	<div class="col-md-5">
        	<img src="../img/cerveza_fria.jpg" width="100%" height="100%">
      	</div>
    	</div>
    	<hr class="featurette-divider">
    	<div class="row featurette">
      	<div class="col-md-7 order-md-2">
        	<h2 class="featurette-heading fw-normal lh-1">En nuestra tienda podras encontrar<span class="text-muted"> una gran selelección de ellas</span></h2>
        	<p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      	</div>
      	<div class="col-md-5 order-md-1">
      		<img src="../img/cerveza_fria_2.jpg" width="100%" height="100%">
      	</div>
    	</div>
    	<hr class="featurette-divider">
  	</div>
</main>
<?php 
	include("footer.php");
?>