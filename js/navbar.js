
document.addEventListener("DOMContentLoaded", function () {
// Sélectionner tous les boutons radio
const radioButtons = document.querySelectorAll(".navbar input[type='radio']");

// Ajouter un écouteur d'événements à chaque bouton radio
radioButtons.forEach((radio) => {
radio.addEventListener("change", function () {
if (radio.checked) {
    
    const url = radio.getAttribute("data-url"); // Récupérer l'URL
    window.location.href = url; // Rediriger vers l'URL
}
});
});
});
