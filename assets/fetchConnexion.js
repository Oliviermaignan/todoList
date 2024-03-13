function appelFetchConnexion() {
  let email = document.getElementById('emailConnexion').value;
  console.log(email);
  let pwd = document.getElementById('inputPassword').value;
  console.log(pwd);

  let dataObj = {
    "email": email,
    "pwd" : pwd
  }

  let JSONdata = JSON.stringify(dataObj);
  console.log(JSONdata);
  
  const request = new XMLHttpRequest();
  request.open('POST', './src/traitementLogin.php', true);

  request.setRequestHeader('content-type', 'application/json');

  request.send(JSONdata);

  request.onreadystatechange = function() {
    if (request.readyState === 4 && request.status === 200) {
      //ici si c'est un succes on redirige avc window.location.href 
      console.log(request.responseText);
      document.body.innerHTML += request.responseText+ "<br>";
    }
  }
}