<?php 
require './components/header.php';
require_once __DIR__ . "/src/repositories/UsersRepository.php";
?>

<form class="w-75 m-auto g-3">
    <div class="w-auto m-5">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="emailConnexion" placeholder="name@example.com">
        </div>
        <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" id="inputPassword" class="form-control" aria-describedby="passwordHelpBlock">
        <div id="passwordHelpBlock" class="form-text">
            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
        </div>
        <div class=" text-center w-75 mt-2 m-auto">
        <button type="submit" class="btn btn-primary mb-3 mt-3" id="connexionBtn">Se connecter</button>
        </div>  
    </div>
</form>
<div class="response"></div>

<!-- create a btn and p to tell the user if them are not register to click on the button with bootstrap -->

<div class="text-center w-75 m-auto">
    <p>Pas encore de compte ?</p>
    <button type="submit" class="btn btn-primary mb-3 mt-3" id="registerPageBtn">S'enregistrer</button>
</div>


<?php
require './components/footer.php';
?>