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
    "pwd" : pwd
  }

  let JSONdata = JSON.stringify(dataObj);
  
  const request = new XMLHttpRequest();
  request.open('POST', './../src/traitementLogin.php', true);

  request.setRequestHeader('content-type', 'application/json');
  request.send(JSONdata);

  //cette fonction est a revoir pour pouvoir lui envoyé tout un tas de chose et pas que du texte
  request.onreadystatechange = function() {
    if (request.readyState === 4 && request.status === 200) {
      let responseData= JSON.parse(request.responseText);
      let stringResponse = JSON.stringify(responseData);
      response.innerHTML += "<p>" + stringResponse + "</p>";
    } else {
      console.log('erreur de reception données')
    }
  }
}