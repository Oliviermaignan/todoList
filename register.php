<?php 
require './components/header.php';
require_once __DIR__ . "/src/repositories/UsersRepository.php";
?>


<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <h2 class="mt-5">Inscription</h2>
      <form action="./src/treatment/registerTreatment.php" method="POST">
        <div class="form-group">
          <label for="nom">Nom*</label>
          <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
        </div>
        <div class="form-group">
          <label for="prenom">Prénom*</label>
          <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom">
        </div>
        <div class="form-group">
          <label for="password">Mot de passe*</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe">
        </div>
        <div class="form-group">
          <label for="password_confirmation">Confirmation du mot de passe*</label>
          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmation">
        </div>
        <div class="form-group">
          <label for="email">Email*</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Votre email">
        </div>
        <button type="submit" class="btn btn-primary mt-3" id="registerBtn">S'inscrire</button>
      </form>
    </div>
  </div>
</div>
<!-- faire un toast avec la classe responseEmptyRegister de warning bootstrap vide -->
<div class="responseEmptyRegister alert alert-warning registerResponse w-25 m-auto mt-3" role="alert">

</div>

<?php
require './components/footer.php';
?>