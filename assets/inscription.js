
//si le btn existe dans le HTML sinon ça a crée une erreur dans la console
if (document.querySelector('#registerPageBtn')) {

    //recupération du bouton de redirection vers register.php
    let inscriptionBtn = document.querySelector('#registerPageBtn');
    //gestion du bouton d'inscription
    inscriptionBtn.addEventListener('click', (e)=>{
        e.preventDefault();
        window.location.href = "./register.php";

    })
}

// verif si le btn d'inscription existe
if (document.querySelector('#registerBtn')) {
    //gestion du bouton d'envoi du formulaire
    let btnSubmit = document.querySelector('#registerBtn');
    btnSubmit.addEventListener('click', (e)=>{
        e.preventDefault();
        if (validationInscription()) {
            appelFetchInscription();
        }
    })
}

function appelFetchInscription() {
    //récupération des champs de register.php
    let nom = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let email = document.getElementById('email').value;
    let pwd = document.getElementById('password').value;
    let pwdConfirmation = document.getElementById('password_confirmation').value;
    let response = document.querySelector('.registerResponse');

    let dataObj = {
        "nom": nom,
        "prenom": prenom,
        "email": email,
        "password": pwd,
        "password_confirmation": pwdConfirmation
    }

    let JSONdata = JSON.stringify(dataObj);

    //utiliser fetch

    fetch('./../src/treatment/registerTreatment.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSONdata
    })
    .then(response => response.json())
    .then(responseData => {
        if (responseData) {
            //redirection vers la page d'accueil
            window.location.href = "./../index.php";
        } else {
            //ici on peut rediriger l'utilisateur ou gere l'erreur en affichant un toast
            console.log(responseData);
            response.innerHTML = "Inscription échouée";
        }
    })
    .catch(error => {
        console.error('Erreur lors de la requête fetch:', error);
        response.innerHTML = "Une erreur s'est produite. Veuillez réessayer.";
    });
}

