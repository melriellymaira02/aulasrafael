<?php
session_start();
?>
<?php

if(isset($_SESSION['logado'])){
if($_SESSION['logado']==1){
    header('location:index.php');
}
}

?>
<?php
include_once("partials/header.php")
?>
<form method="post" action="verifica.php">
    <div class="container">
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="senha" class="form-label">Password</label>
    <input type="password" class="form-control" name="senha">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

<?php
include_once("partials/footer.php")
?>