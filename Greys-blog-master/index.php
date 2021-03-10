<!DOCTYPE html>
<html>
<head>
	<title>Greys Anatomy</title>
	<meta charset="utf-8">
  <link rel="icon" type="img/png" href="img/favicon.png"/>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <?php include_once "php/funcoes.php"; ?>
</head>
<body style="background-color: #F8F9FA">
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="img/logo.jpeg" width="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav justify-content-start">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="noticias.php">Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="galeria.php">Galeria</a>
      </li>
      
        <a class="nav-link" href="<?php mostrar_link(); ?>"><span style="color: red;"><?php mostrar_nome(); ?></span></a>
      </li>
    </ul>
  </div>
</nav>

<div id="inicio" class="card container col-8" style="padding-top: 5px; margin-top: 20px;">
  <h2 style="text-align: center;">Conoces Grey's Anatomy?</h2>
  <img class="card-img-top" src="img/greys.jpeg">
  <div class="card-body">
    <p class="card-text">......AQUI MODIFICAS TEXTO .....Grey's Anatomy es una série de estadunidense de drama médico exibida no horário nobre da rede ABC. Seu episódio piloto foi transmitido pela primeira vez em 27 de março de 2005 nos Estados Unidos. A série é protagonizada por Ellen Pompeo, que interpreta Meredith Grey, inicialmente interna do fictício hospital cirúrgico Seattle Grace (mais tarde Hospital Memorial Grey-Sloan), em Seattle, Washington, um dos programas de residência em cirurgia médica mais rígidos do país. A série é focada nela e seus colegas, também internos: Cristina Yang, Isobel Stevens, George O'Malley e Alex Karev, mostrando suas vidas amorosas e as dificuldades pelas quais passam no trabalho. Grey's Anatomy já se estabeleceu como uma das maiores séries americanas dos últimos anos. Com um elenco que se renova a cada ano, enquanto alguns veteranos se despedem de tempos em tempos e novos rostos se juntam à equipe médica.</p>
    <p>FONTE: <a href="https://pt.wikipedia.org/wiki/Grey%27s_Anatomy">Wikipedia</a></p>
  </div>
</div>

<div class="card container col-8" style="padding-top: 5px; margin-top: 20px;">
  <h2 style="text-align: center;">Un poco sobre mi</h2>
  <img class="card-img-top" src="img/eu.jpg">
  <div class="card-body">
    <p class="card-text"> </p>
  </div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
