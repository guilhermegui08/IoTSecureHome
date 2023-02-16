<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>logIN</title>
  <link rel="stylesheet" href="mystyle.css">
</head>

<body>

  <?php

  session_start();
  $username = "admin";
  $password = "admin";
  $username1 = "user";
  $password1 = "user";
  $username2 = "manel";
  $password2 = "123";

  if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {

      $_SESSION["username"] = $_POST['username'];
      header("refresh:1; url=dashboardAdmin.php");
    } elseif ($_POST['username'] == $username1 && $_POST['password'] == $password1) {
      $_SESSION["username"] = $_POST['username'];

      header("refresh:1; url=dashboardUser.php");
	} elseif ($_POST['username'] == $username2 && $_POST['password'] == $password2) {
      $_SESSION["username"] = $_POST['username'];

      header("refresh:1; url=dashboardManel.php");
    } else {
      echo "Credenciais erradas";
      header('location:login.php');
    }
  }
  ?>

  <div class="container">
    <form class="login" method="post">
      <a href="login.php">
        <img src="logo1.png" alt="logo" width="350" class="left">
      </a>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username:</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Escreva o username" name="username" required>
        <div class="mb-3">
          <p>
          </p>
          <label for="exampleInputPassword1" class="form-label">Password:</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Escreva a password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>