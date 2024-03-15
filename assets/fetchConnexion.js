let connexionBtn = document.querySelector('#connexionBtn');

connexionBtn.addEventListener('click', (e)=>{
  e.preventDefault();
  appelFetchConnexion()
})


function appelFetchConnexion() {
  let email = document.getElementById('emailConnexion').value;
  let pwd = document.getElementById('inputPassword').value;
  let response = document.querySelector('.response')
  let dataObj = {
    "email": email,
    "password" : pwd
  }

  let JSONdata = JSON.stringify(dataObj);
  
  const request = new XMLHttpRequest();
  request.open('POST', './../src/treatment/traitementLogin.php', true);

  request.setRequestHeader('content-type', 'application/json');
  request.send(JSONdata);

  request.onreadystatechange = function() {
    if (request.readyState === 4 && request.status === 200) {
      let responseData= JSON.parse(request.responseText);
      if (responseData === true) {
        //redirection vers la page d'accueil
        window.location.href = "./../index.php";
    } else {
        //ici on peut rediriger l'utilisateur ou gere l'erreur en affichant un toast
        response.innerHTML = "Connexion échouée";
    }
    }
  }
}