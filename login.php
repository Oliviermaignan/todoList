<?php 
require './components/header.php';

$erreur = 0;
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
        <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3 mt-3" id="connexionBtn">Se connecter</button>
        </div>  
    </div>
</form>
<div class="response"></div>

<?php if ($erreur): ?>
<div class="alert alert-danger w-50 m-auto g-3" role="alert">
    <?= $erreur ?>
</div>
<?php endif ?> 

<?php
require './components/footer.php';
?>