<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Historico Sonoro</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="dashboardAdmin.php">Home</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <img src="logo2.png" class="center" style="display: block; margin-left: auto;margin-right: auto;" alt="Logotipo Securitas" width="220">
  </div>



  <div class="card">
    <div class="card-header"><strong>Histórico sensor Sonoro</strong> </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Valor</th>
            <th scope="col">Data de atualização</th>
          </tr>
        </thead>

        <?php
        $ficheiro = fopen("api/Files/Sonoro/log.txt", "r") or die("Nao foi possivel abrir o ficheiro");
        while (!feof($ficheiro)) :
          $data = fgets($ficheiro);
          $list = explode(";", $data);

        ?>

          <?php if (strlen($data) != 0) :

          ?>

            <tbody>
              <tr>
                <td><?php echo $list[1] ?></td>
                <td><?php echo $list[0] ?></td>
              </tr>
            </tbody>
          <?php endif ?>
        <?php endwhile ?>
      </table>
    </div>
  </div>

  <?php
  fclose($ficheiro);
  ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>