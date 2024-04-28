<!DOCTYPE html>
<html lang="en" id="html-main">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="./js/script.js"></script>
    <title>Home - Osteria Dell'Acquabella</title>
</head>
<body>

<?php
    if(!isset($_COOKIE['cookie_accepted'])){
        require_once 'cookie_alert.php';
    }else{ ?>

        <header id="header-home" class="sticky-top shadow-lg">
            
        <!-- navbar -->
        
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="font-spumoni logo navbar-brand">
                    <a href="index.php">Osteria Dell'Acquabella</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-list text-white fs-1"></i>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="d-flex flex-column flex-lg-row justify-content-center m-0 p-0 py-3">
                        <li class="mb-4 d-lg-none">
                            <a target="_blank" href="https://wa.me/393471396520" class="mx-2"><i class="bi bi-whatsapp"></i></a>
                            <a target="_blank" href="https://www.instagram.com/osteria_acquabella/" class="mx-2"><i class="bi bi-instagram"></i></a>
                            <a target="_blank" href="https://www.facebook.com/osteriadellacquabella" class="mx-2"><i class="bi bi-facebook"></i></a>
                            <a target="_blank" href="https://www.tripadvisor.it/Restaurant_Review-g187849-d1095150-Reviews-Osteria_dell_Acquabella-Milan_Lombardy.html" class="fs-4 mx-2"><i class="fa fa-tripadvisor"></i></a>
                            <a href="mailto:prenotazioni@acquabella.it" class="mx-2"><i class="bi bi-envelope"></i></a>
                        </li>
                        <li><a href="index.php" <?php echo $currentPage === 'home' ? 'class="text-warning"' : ''; ?>>Home</a></li>
                        <li class="dropdown w-25">
                            <a href="cucina.php" <?php echo $currentPage === 'cucina' ? 'class="text-warning dropdown-toggle"' : 'class="dropdown-toggle"'; ?> role="button" data-bs-toggle="dropdown">La Cucina</a>
                            
                            <ul class="dropdown-menu dropend dropdown-menu-md-end">
                                <li><a class="dropdown-item" href="./cucina.php#antipasti">Antipasti</a></li>
                                <li><a class="dropdown-item" href="./cucina.php#piatti-unici">Piatti Unici</a></li>
                                <li><a class="dropdown-item" href="./cucina.php#primi">Primi</a></li>
                                <li><a class="dropdown-item" href="./cucina.php#secondi">Secondi</a></li>
                                <li><a class="dropdown-item" href="./cucina.php#contorni">Contorni</a></li>
                                <li><a class="dropdown-item" href="./cucina.php#dolci">Dolci</a></li>
                            </ul>
                        </li>
                        <li class="dropdown w-25">
                            <a href="about.php"  <?php echo $currentPage === 'about' ? 'class="text-warning dropdown-toggle"' : 'class="dropdown-toggle"'; ?> role="button" data-bs-toggle="dropdown">Su di Noi</a>
                            <ul class="dropdown-menu dropdown-menu-md-end">
                                <li><a class="dropdown-item" href="about.php#storia">La Nostra Storia</a></li>
                                <li><a class="dropdown-item" href="about.php#orari">Orari</a></li>
                                <li><a class="dropdown-item" href="about.php#dove">Dove Siamo</a></li>
                                <li><a class="dropdown-item" href="about.php#contatti">Contatti</a></li>
                            </ul>
                        </li>
                    </ul>  
                    </div>
                </div>
            </nav> 
        </header>
<?php } ?>