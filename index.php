<?php 
$currentPage = 'home';
require_once 'header.php';
?>

    <main id="main-home" class="m-0">

      <!-- Hero Section -->
      <div class="hero text-center">
        <h1 class="font-spumoni">Osteria Dell'Acquabella</h1>
        <hr class="text-white d-sm-none">
        <p class="font-spumoni text-white fs-1 m-0">- Cucina Milanese -</p>
        <p class="text-white fs-5">Piatti tipici | Degustazione e Vendita Vini</p>
      </div>

      <!-- Eventi e Promozioni Section -->
      <div id="home">
        <!-- Info Section -->
        <div id="info-section" class="container-fluid py-4 px-5 fs-5">
          <p>Il nostro locale si trova a Milano in <b>via San Rocco 11</b>, zona <b>Porta Romana</b>, quartiere che prende il nome da una delle porte storiche di Milano e che un tempo costituiva una delle principali vie d'accesso alla città.</p>
          
          <p>Qui troverete un'<b>atmosfera calda e accogliente</b> e un ambiente rustico e affascinante che invita a sedersi e gustare i sapori della regione.</p>
          
          <p>Infatti il menu dell'osteria offre un'ampia selezione di <strong>piatti tradizionali lombardi</strong>, dalla classica cotoletta alla milanese, alle polpettine della casa al sugo, all'ossobuco con risotto alla milanese.</p>
          
          <p class="fs-4">
            <a class="dropdown-item" href="about.php#dove">
              <b><u>Vieni a trovarci!</u></b>
            </a>
          </p>  
        </div>
        
        <!-- Gallery Section -->
        <div id="carouselExampleIndicators" class="carousel slide my-5">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="..." class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </main>

<?php require_once 'footer.php'?>