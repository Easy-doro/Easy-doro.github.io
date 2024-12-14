document.addEventListener('DOMContentLoaded', function () {
    const skills = document.querySelector('.skills');

    // Activer un slider uniquement sur mobile
    if (window.innerWidth < 768) {
        skills.scrollLeft = 0; // Forcer le scroll initial à 0

        let isDown = false;
        let startX;
        let scrollLeft;

        skills.addEventListener('mousedown', (e) => {
            isDown = true;
            skills.classList.add('active');
            startX = e.pageX - skills.offsetLeft;
            scrollLeft = skills.scrollLeft;
        });

        skills.addEventListener('mouseleave', () => {
            isDown = false;
            skills.classList.remove('active');
        });

        skills.addEventListener('mouseup', () => {
            isDown = false;
            skills.classList.remove('active');
        });

        skills.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - skills.offsetLeft;
            const walk = (x - startX) * 2; // Ajuste la vitesse ici
            skills.scrollLeft = scrollLeft - walk;
        });
    }
});

// Ajout de flèches pour passer d'un slide à l'autre
document.addEventListener('DOMContentLoaded', function () {
    const sliders = document.querySelectorAll('.slider-wrapper');

    sliders.forEach(slider => {
        const leftArrow = slider.querySelector('.left-arrow');
        const rightArrow = slider.querySelector('.right-arrow');
        const skills = slider.querySelector('.skills');

        const scrollAmount = skills.offsetWidth; // Largeur d'un slider complet

        // Bouton flèche gauche
        leftArrow.addEventListener('click', () => {
            skills.scrollBy({
                left: -scrollAmount,
                behavior: "smooth"
            });
        });

        // Bouton flèche droite
        rightArrow.addEventListener('click', () => {
            skills.scrollBy({
                left: scrollAmount,
                behavior: "smooth"
            });
        });
    });
});
