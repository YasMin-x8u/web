function reinitialiser() {
    document.getElementById("nom").value = "";
    document.getElementById("prenom").value = "";
    document.getElementById("age").value = "";
    document.getElementById("pseudo").value = "";
    document.getElementById("mdp").value = "";
    document.getElementById("mdpConfirm").value = "";
    document.getElementById("pays").value = "";
    document.getElementById("newsletter").checked = false;

    let radios = document.getElementsByName("genre");
    for (let i = 0; i < radios.length; i++) {
        radios[i].checked = false;
    }

    effacerErreurs();
}


function validerFormulaire() {
    effacerErreurs();
    let valide = true;

    let radios = document.getElementsByName("genre");
    let sexeCoche = false;
    for (let i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            sexeCoche = true;
        }
    }
    if (!sexeCoche) {
        afficherErreur("errSexe", "Vous devez selectionnez votre sexe");
        valide = false;
    }

    let nom = document.getElementById("nom");
    if (nom.value.length < 2) {
        afficherErreur("errNom", "Le nom ne peut pas faire moins de 2 caracteres");
        nom.className = "invalide";
        valide = false;
    }

    let prenom = document.getElementById("prenom");
    if (prenom.value.length < 2) {
        afficherErreur("errPrenom", "Le prenom ne peut pas faire moins de 2 caracteres");
        prenom.className = "invalide";
        valide = false;
    }

    let age = document.getElementById("age");
    let ageVal = parseInt(age.value);
    if (isNaN(ageVal) || ageVal < 5 || ageVal > 140) {
        afficherErreur("errAge", "L'age doit etre compris entre 5 et 140");
        age.className = "invalide";
        valide = false;
    }

    let pseudo = document.getElementById("pseudo");
    if (pseudo.value.length < 4) {
        afficherErreur("errPseudo", "Le pseudo ne peut pas faire moins de 4 caracteres");
        pseudo.className = "invalide";
        valide = false;
    }

    let mdp = document.getElementById("mdp");
    if (mdp.value.length < 6) {
        afficherErreur("errMdp", "Le mot de passe ne doit pas faire moins de 6 caracteres");
        mdp.className = "invalide";
        valide = false;
    }

    let mdpConfirm = document.getElementById("mdpConfirm");
    if (mdpConfirm.value !== mdp.value) {
        afficherErreur("errMdpConfirm", "Le mot de passe de confirmation doit etre identique à celui d'origine");
        mdpConfirm.className = "invalide";
        valide = false;
    }

    let pays = document.getElementById("pays");
    if (pays.value === "") {
        afficherErreur("errPays", "Vous devez selectionner votre pays de residence");
        valide = false;
    }

    if (valide) {
        alert("Formulaire envoye avec succes !");
    }
}


function afficherErreur(idSpan, message) {
    let span = document.getElementById(idSpan);
    span.textContent = message;
    span.className = "erreur visible";
}


function effacerErreurs() {
    let erreurs = document.getElementsByClassName("erreur");
    for (let i = 0; i < erreurs.length; i++) {
        erreurs[i].textContent = "";
        erreurs[i].className = "erreur";
    }

    let champs = ["nom", "prenom", "age", "pseudo", "mdp", "mdpConfirm"];
    for (let i = 0; i < champs.length; i++) {
        document.getElementById(champs[i]).className = "";
    }
}