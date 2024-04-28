<?php
if (isset($_POST['cookie_accepted'])) {
    $cookieName = "cookie_accepted";
    $cookieValue = "true";
    $expiration = time() + (365 * 24 * 60 * 60); // 365 giorni
    setcookie($cookieName, $cookieValue, $expiration, "/");
}
?>

<div class=" alert alert-warning alert-dismissible fade show" role="alert">
    <div id="alert-container">
        <p class="fs-5"><strong><u>AVVISO</u></strong></p>
        <p>Questo sito utilizza <b>cookie tecnici.</b><br> 
          I cookie ci aiutano a fornire i nostri servizi e a garantirVi una corretta navigazione del sito. <br></p>
        <p> Questo sito utilizza anche <b>cookie di terze parti.</b><br>
          Per maggiori informazioni visionare <a href="privacy.php" class="text-decoration-underline text-black-50">l'informativa sull'utilizzo dei cookie.</a> Utilizzando questo sito Voi acconsentite all'utilizzo dei cookie da terze parti.</p>
       <div class="text-end">
            <form method="post">
                <button id="cookie_accepted" type="submit" name="cookie_accepted" class="btn cookie-alert-btn">Accetta</button>
            </form>
       </div>
    </div>
</div>
