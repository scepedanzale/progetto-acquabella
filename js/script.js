
/* animazione */
window.addEventListener('scroll', function() {
    var infoSection = document.querySelector('#home');
    var scrollPosition = window.scrollY;

    if (scrollPosition > 150) { // Cambia questo valore in base all'altezza dalla cima della finestra in cui vuoi far apparire la sezione
        infoSection.classList.add('home-entrance');
        infoSection.classList.remove('home-exit');
    }
});
