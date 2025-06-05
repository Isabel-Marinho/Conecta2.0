(function () {
    var nav = document.getElementById('navbar');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) nav.classList.add('nav-preto');
        else nav.classList.remove('nav-preto');
    });
});