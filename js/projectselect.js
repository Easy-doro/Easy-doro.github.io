const sections = ["p1", "p2", "p3", "p4", "p5", "p6"];
const inputs = document.querySelectorAll('input[name="p"]');
const labels = document.querySelectorAll('label');

function displaySection(selectedId) {
    // 1. Afficher uniquement la section sélectionnée
    sections.forEach(section => {
        document.getElementById(section).style.display = section === selectedId ? "block" : "none";
    });

    // 2. Mettre à jour les labels pour ajouter/retirer la classe CSS
    labels.forEach(label => label.classList.remove("selected-project")); // Retirer la classe
    const selectedInput = document.querySelector(`input#${selectedId}check`);
    if (selectedInput) {
        const label = selectedInput.closest("label");
        if (label) label.classList.add("selected-project");
    }

    // 3. Vérifier s'il y a un élément avec la classe "selected-project"
    const hasSelected = document.querySelector(".selected-project");
    if (!hasSelected) {
        // Par défaut, sélectionner le premier élément de la liste
        const firstInput = inputs[0];
        firstInput.checked = true; // Marquer le bouton radio comme sélectionné
        displaySection(firstInput.id.replace("check", "")); // Appeler la fonction pour afficher la section
    }
}

// Ajouter des écouteurs pour tous les boutons radio
inputs.forEach(input => {
    input.addEventListener("change", () => {
        const selectedId = input.id.replace("check", ""); // Extraire "p1", "p2", etc.
        displaySection(selectedId);
    });
});

// Initialiser : vérifier au chargement si un élément est déjà sélectionné
document.addEventListener("DOMContentLoaded", () => {
    const hasSelected = document.querySelector(".selected-project");
    if (!hasSelected) {
        const firstInput = inputs[0];
        firstInput.checked = true; // Marquer le premier bouton radio comme sélectionné
        displaySection(firstInput.id.replace("check", "")); // Afficher la première section
    }

    // Ajouter l'écouteur pour défiler vers le bas sur les <summary> des <details>
    document.querySelectorAll('details summary').forEach(summary => {
        summary.addEventListener('click', function () {
            const details = this.parentElement; // Accéder au parent <details>
            
            // Attendre l'animation d'ouverture avant de scroller
            setTimeout(() => {
                if (details.open) {
                    details.scrollIntoView({ behavior: 'smooth', block: 'end' });
                }
            }, 300); // Le délai permet d'attendre que le <details> s'ouvre complètement
        });
    });
});
