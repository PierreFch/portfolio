document.addEventListener("DOMContentLoaded", () => {
    // Parallax home
    window.addEventListener('scroll', function () {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        var parallax = document.querySelector('.parallax');
        parallax.style.transform = 'translateY(' + scrollTop / 2 + 'px)';
    });

    // Scroll smooth
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Filter realisations
    document.querySelectorAll('.filter button').forEach(element => {
        element.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelectorAll('.filter button').forEach(btn => {
                btn.classList.remove('active');
            });

            element.classList.add('active');

            
        });
    });


});