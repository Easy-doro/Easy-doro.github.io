function copyEmailToClipboard() {
    var email = this.getAttribute("data-email");
    var tempInput = document.createElement("input");
    tempInput.value = email;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    }

    // Ajout d'un gestionnaire d'événement pour le bouton de copie d'email
    document.getElementById("emailButton").addEventListener("click", copyEmailToClipboard);