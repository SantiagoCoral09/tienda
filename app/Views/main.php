<?php echo $this->extend('index');
// Para extender la pagina del index
?>

<?php echo $this->section('content'); ?>
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Death Note20.jpg" class="d-block w-50" width="50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Death_Note_Yagami_Light_Ryuk.jpg" width="10" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Death Note20.jpg" class="d-block w-50" width="50" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<?php echo $this->endSection(); ?>
