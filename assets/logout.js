
const logoutButton = document.getElementById('logout-button');

logoutButton.addEventListener('click', function() {
    fetch('./../logout.php', {
        method: 'GET',
        credentials: 'same-origin' // Inclure les informations d'authentification (cookies) dans la requête
    })
    .then(response => {
        if (response.ok) {
        // Rediriger l'utilisateur vers la page de connexion ou une autre page appropriée
        window.location.href = 'login.php';
        } else {
        console.error('Une erreur s\'est produite lors de la déconnexion');
        }
    })
});
