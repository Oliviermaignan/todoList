//selection de l'element de response
let response = document.querySelector('.registerResponse');
response.classList.remove('alert', 'alert-warning');

//valider que tout les champs ne soient pas vide sinon afficher un toast bootstrap dnas la response
function validationInscription() {
    let nom = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let email = document.getElementById('email').value;
    let pwd = document.getElementById('password').value;
    let pwdConfirmation = document.getElementById('password_confirmation').value;


    if (nom === '' || prenom === '' || email === '' || pwd === '' || pwdConfirmation === '') {
        response.classList.add('alert', 'alert-warning');
        response.innerHTML = 'Veuillez remplir tous les champs';
        return false;
    } else if (pwd !== pwdConfirmation) {
        response.classList.add('alert', 'alert-warning');
        response.innerHTML = 'Les mots de passe ne sont pas identiques';
        return false;
    } else {
        return true;
    }
}