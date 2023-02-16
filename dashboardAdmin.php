<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="5">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Servico seguranca</title>

  <style>
.fcc-btn{
  background-color: black;
  color: white;
  padding: 15px 25px;
  text-decoration: none;
}
</style>

</head>



<body>

  <?php
  $valor_Movimento = file_get_contents("api/files/Movimento/valor.txt");
  $hora_Movimento = file_get_contents("api/files/Movimento/hora.txt");
  $nome_Movimento = file_get_contents("api/files/Movimento/nome.txt");






  $valor_Alarme = file_get_contents("api/files/Alarme/valor.txt");
  $hora_Alarme = file_get_contents("api/files/Alarme/hora.txt");
  $nome_Alarme = file_get_contents("api/files/Alarme/nome.txt");

  $valor_Sonoro = file_get_contents("api/files/Sonoro/valor.txt");
  $hora_Sonoro = file_get_contents("api/files/Sonoro/hora.txt");
  $nome_Sonoro = file_get_contents("api/files/Sonoro/nome.txt");
  
  $valor_Carbono = file_get_contents("api/files/Carbono/valor.txt");
  $hora_Carbono = file_get_contents("api/files/Carbono/hora.txt");
  $nome_Carbono = file_get_contents("api/files/Carbono/nome.txt");
  
  $valor_Fumo = file_get_contents("api/files/Fumo/valor.txt");
  $hora_Fumo = file_get_contents("api/files/Fumo/hora.txt");
  $nome_Fumo = file_get_contents("api/files/Fumo/nome.txt");
  
  $valor_DioxidoCarbono = file_get_contents("api/files/DioxidoCarbono/valor.txt");
  $hora_DioxidoCarbono = file_get_contents("api/files/DioxidoCarbono/hora.txt");
  $nome_DioxidoCarbono = file_get_contents("api/files/DioxidoCarbono/nome.txt");
  
  $valor_Lampada = file_get_contents("api/files/Lampada/valor.txt");
  $hora_Lampada = file_get_contents("api/files/Lampada/hora.txt");
  $nome_Lampada = file_get_contents("api/files/Lampada/nome.txt");
  
  $valor_Porta = file_get_contents("api/files/Porta/valor.txt");
  $hora_Porta = file_get_contents("api/files/Porta/hora.txt");
  $nome_Porta = file_get_contents("api/files/Porta/nome.txt");
  
  $valor_Garagem = file_get_contents("api/files/Garagem/valor.txt");
  $hora_Garagem = file_get_contents("api/files/Garagem/hora.txt");
  $nome_Garagem = file_get_contents("api/files/Garagem/nome.txt");
  
  $valor_Janela = file_get_contents("api/files/Janela/valor.txt");
  $hora_Janela = file_get_contents("api/files/Janela/hora.txt");
  $nome_Janela = file_get_contents("api/files/Janela/nome.txt");
  
  $valor_AlarmeSonoro = file_get_contents("api/files/AlarmeSonoro/valor.txt");
  $hora_AlarmeSonoro = file_get_contents("api/files/AlarmeSonoro/hora.txt");
  $nome_AlarmeSonoro = file_get_contents("api/files/AlarmeSonoro/nome.txt");
  
  $valor_Temperatura = file_get_contents("api/files/Temperatura/valor.txt");
  $hora_Temperatura = file_get_contents("api/files/Temperatura/hora.txt");
  $nome_Temperatura = file_get_contents("api/files/Temperatura/nome.txt");

  session_start();
  if (!isset($_SESSION['username'])) {
    header("refresh:5;url=login.php");
    die("Acesso restrito.");
  }


  

  if ($valor_Sonoro > 100) {                                      //código para definir estado e cor em funçao do valor da distancia
    $estadoSonoro = "Prejudicial";
    $corEstadoSonoro = "badge rounded-pill bg-danger";
  } elseif ($valor_Sonoro > 80) {
    $estadoSonoro = "Warning";
    $corEstadoSonoro = "badge rounded-pill bg-warning text-dark";
  } else {
    $estadoSonoro = "OK";
    $corEstadoSonoro = "badge rounded-pill bg-success";
  }
  ?>



  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">Dashboard EI-TI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboardAdmin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <form class="d-flex">
            <a class="fcc-btn" href="logout.php" >Logout</a> 
          </form>
        </li>
      </ul>
    </div>
  </nav>

  <p> </p>

  <div class="container">
    <div class="card">
      <div class="cardbody">
        <img src="logo2.png" class="float-end" alt="Logotipo Securitas" width="220">
        <h1>&nbsp; Serviço de Segurança Inteligente </h1>
        <p>&nbsp; Bem vindo <strong> <?php echo $_SESSION['username']; ?> </strong> </p>
        <small>&nbsp; Tecnologias de internet - Engenharia Informática </small>
      </div>
    </div>
  </div>
  <p> </p>

  <div class="container" style="text-align: center;">
    <h1>
      <strong>Soluções de Alarme Inteligente para casa ou negócio </strong>
    </h1>
    <h4>
      Conheça o único alarme com registo de vídeo e tripla proteção.
      Sistema de alarme com ligação à Central de Segurança 24h e aviso à polícia.
      Desfrute da tranquilidade que só a Prosegur poderá oferecer à sua família.
    </h4>
    <img src="kitSeguranca.jpg" class="float-center" alt="Kit Segurança" width="1000">
    <br>
  </div>

  <p> </p>

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="card text-center">
          <div class="card-header"><strong><?php echo $nome_Movimento; ?>:</strong> <?php echo $valor_Movimento; ?> </div>
          <div class="card-body"> <img src="movimento1.png" alt="dia" width="200" height="170"> </div>
			<button type="submit"><a href="postMovimento.php">Detetar Movimento</a></button>
			<button type="submit"><a href="postMovimentoReset.php">Reset Movimento</a></button>
          <div class="card-footer"><strong> Atualização:</strong> <?php echo $hora_Movimento; ?> - <a href="histMovimento.php">Histórico</a> </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card text-center">
          <div class="card-header"><strong>Webcam</strong><?php $imagem = "webcam.png"?></div>
          <div class="card-body"> <img src=<?php echo $imagem ?> width="200" height="170" alt="camara"> </div>
		  <button type="submit"><a href="botaoCamara.php">Tirar Fotografia</a></button>
          <div class="card-footer"> </div>
        </div>
      </div>
    </div>
    <p></p>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="card text-center">
            <div class="card-header"><strong><?php echo $nome_Alarme; ?>:</strong> <?php echo $valor_Alarme; ?> </div>
            <div class="card-body"> <img src="alarme.jpg" alt="dia" width="200" height="170"> </div>
			<button type="submit"><a href="postAlarmeReset.php">Reset Alarme</a></button>
            <div class="card-footer"><strong> Atualização:</strong> <?php echo $hora_Alarme; ?> - <a href="histAlarme.php">Histórico</a> </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card text-center">
            <div class="card-header"><strong><?php echo $nome_Sonoro; ?>:</strong> <?php echo $valor_Sonoro; ?></div>
            <div class="card-body"> <img src="sonoro.jpg" width="200" height="170" alt="Sensor sonoro"> </div>
            <div class="card-footer"><strong> Atualização:</strong> <?php echo $hora_Sonoro; ?> - <a href="histSonoro.php">Histórico</a></div>
          </div>
        </div>
		<div class="col-sm-4">
          <div class="card text-center">
            <div class="card-header"><strong>Monoxido de Carbono:</strong> <?php echo $valor_Carbono; ?></div>
            <div class="card-body"> <img src="detetormonoxidodecarbono.jpg" width="200" height="170" alt="Sensor monoxido carbono"> </div>
            <div class="card-footer"><strong> Atualização:</strong> <?php echo $hora_Carbono; ?> - <a href="histCarbono.php">Histórico</a></div>
          </div>
        </div>
      </div>
    </div>
	<p></p>
	<div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="card text-center">
            <div class="card-header"><strong>Sensor de Fumo:</strong> <?php echo $valor_Fumo; ?> </div>
            <div class="card-body"> <img src="Fumo.webp" alt="dia" width="200" height="170"> </div>
            <div class="card-footer"><strong> Atualização:</strong> <?php echo $hora_Fumo; ?> - <a href="histFumo.php">Histórico</a> </div>
          </div>
        </div>
		<div class="col-sm-4">
          <div class="card text-center">
            <div class="card-header"><strong>Temperatura:</strong> <?php echo $valor_Temperatura; ?> </div>
            <div class="card-body"> <img src="Temperatura.jfif" alt="temperatura" width="200" height="170"> </div>
            <div class="card-footer"><strong> Atualização:</strong> <?php echo $hora_Temperatura; ?> - <a href="histTemperatura.php">Histórico</a> </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card text-center">
            <div class="card-header"><strong>Dioxido de Carbono:</strong> <?php echo $valor_DioxidoCarbono; ?></div>
            <div class="card-body"> <img src="DioxidoCarbono.jfif" width="200" height="170" alt="Sensor dioxido de carbono"> </div>
            <div class="card-footer"><strong> Atualização:</strong> <?php echo $hora_DioxidoCarbono; ?> - <a href="histDioxidoCarbono.php">Histórico</a></div>
          </div>
        </div>
      </div>
    </div>
	<p></p>
	<div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="card text-center">
            <div class="card-header"><strong>Lampada:</strong> <?php echo $valor_Lampada; ?> <?php if ($valor_Movimento == "Detetado") {
                                                                            $imagem = "LampadaAcesa.jpg";
                                                                          } else {
                                                                            $imagem = "LampadaApagada.jpg";
                                                                          } ?></div>
            <div class="card-body"> <img src=<?php echo $imagem ?> alt="lampada" width="200" height="170"> </div>
            <div class="card-footer"><strong> Atualização:</strong> <?php echo $hora_Lampada; ?> - <a href="histLampada.php">Histórico</a> </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card text-center">
            <div class="card-header"><strong>Porta:</strong> <?php echo $valor_Porta; ?><?php if ($valor_Movimento == "Detetado") {
                                                                            $imagem = "PortaFechada.png";
                                                                          } else {
                                                                            $imagem = "PortaAberta.png";
                                                                          } ?></div>
            <div class="card-body"> <img src=<?php echo $imagem ?> width="200" height="170" alt="porta "> </div>
            <div class="card-footer"><strong> Atualização:</strong> <?php echo $hora_Porta; ?> - <a href="histPorta.php">Histórico</a></div>
          </div>
        </div>
		<div class="col-sm-4">
          <div class="card text-center">
            <div class="card-header"><strong>Garagem:</strong> <?php echo $valor_Garagem; ?><?php if ($valor_Movimento == "Detetado") {
                                                                            $imagem = "GaragemFechada.png";
                                                                          } else {
                                                                            $imagem = "GaragemAberta.png";
                                                                          } ?></div>
            <div class="card-body"> <img src=<?php echo $imagem ?> width="200" height="170" alt="garagem"> </div>
            <div class="card-footer"><strong> Atualização:</strong> <?php echo $hora_Garagem; ?> - <a href="histGaragem.php">Histórico</a></div>
          </div>
        </div>
      </div>
    </div>
	<p></p>
	<div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="card text-center">
            <div class="card-header"><strong>Janela:</strong> <?php echo $valor_Janela; ?><?php if ($valor_Janela == "Fechada") {
                                                                            $imagem = "JanelaFechada.png";
                                                                          } else {
                                                                            $imagem = "JanelaAberta.png";
                                                                          } ?></div>
            <div class="card-body"> <img src=<?php echo $imagem ?> alt="janela" width="200" height="170"> </div>
			<button type="submit"><a href="postJanelaAbrir.php">Abrir Janela</a></button>
			<button type="submit"><a href="postJanelaFechar.php">Fechar Janela</a></button>
            <div class="card-footer"><strong> Atualização:</strong> <?php echo $hora_Janela; ?> - <a href="histJanela.php">Histórico</a> </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card text-center">
            <div class="card-header"><strong>Alarme:</strong> <?php echo $valor_AlarmeSonoro; ?><?php if ($valor_AlarmeSonoro == "Ativo") {
                                                                            $imagem = "AlarmeSonoroAtivo.png";
                                                                          } else {
                                                                            $imagem = "AlarmeSonoroDesativo.jfif";
                                                                          } ?></div>
            <div class="card-body"> <img src=<?php echo $imagem ?> width="200" height="170" alt="alarme sonoro"> </div>
            <div class="card-footer"><strong> Atualização:</strong> <?php echo $hora_AlarmeSonoro; ?> - <a href="histAlarmeSonoro.php">Histórico</a></div>
          </div>
        </div>
      </div>
    </div>


    <p> </p>
    <div class="card">
      <div class="card-header"><strong>Tabela de sensores</strong></div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Tipo de dispositivo IoT</th>
              <th scope="col">Valor</th>
              <th scope="col">Data de atualização</th>
              <th scope="col">Estado Alertas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php echo $nome_Movimento; ?></th>
              <td><?php echo $valor_Movimento; ?></td>
              <td><?php echo $hora_Movimento; ?></td>
              <td><span class="badge rounded-pill bg-success">Ativo</span></td>
            </tr>
            <tr>
              <th scope="row"><?php echo $nome_Alarme; ?></th>
              <td><?php echo $valor_Alarme; ?></td>
              <td><?php echo $hora_Alarme; ?></td>
              <td><span class="badge rounded-pill bg-danger">Muito Forte</span></td>
            </tr>

            <tr>
              <th scope="row"><?php echo $nome_Sonoro; ?></th>
              <td colspan="1"> <?php echo $valor_Sonoro; ?></td>
              <td><?php echo $hora_Sonoro; ?></td>
              <td><span class="<?php $corEstadoSonoro; ?>"><?php echo $estadoSonoro; ?></span></td>
            </tr>
			<tr>
              <th scope="row">Fumo</th>
              <td colspan="1"> <?php echo $valor_Fumo; ?></td>
              <td><?php echo $hora_Fumo ?></td>
              <td><span class="<?php $corEstadoSonoro; ?>">ok</span></td>
            </tr>
			<tr>
              <th scope="row">Monoxido de carbono</th>
              <td colspan="1"> <?php echo $valor_Carbono; ?></td>
              <td><?php echo $hora_Carbono; ?></td>
              <td><span class="<?php $corEstadoSonoro; ?>">ok</span></td>
            </tr>
			<tr>
              <th scope="row">Dioxido de carbono</th>
              <td colspan="1"> <?php echo $valor_DioxidoCarbono; ?></td>
              <td><?php echo $hora_DioxidoCarbono; ?></td>
              <td><span class="<?php $corEstadoSonoro; ?>">ok</span></td>
            </tr>
			<tr>
              <th scope="row">Temperatura</th>
              <td colspan="1"> <?php echo $valor_Temperatura; ?></td>
              <td><?php echo $hora_Temperatura; ?></td>
              <td><span class="<?php $corEstadoSonoro; ?>">ok</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>