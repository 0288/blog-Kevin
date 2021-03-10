<!DOCTYPE html>
<html>
	<head>
	<title>Greys Anatomy</title>
	<meta charset="utf-8">
	<link rel="icon" type="img/png" href="img/favicon.png"/>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav id="barra" class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
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
      
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
  </div>
</nav>

<div id="inicio" class="card container" style="padding-top: 5px; margin-top: 20px;">
<!--   <img class="card-img-top" src="img/post/post1.jpg"> -->
  <div class="card-body">
    <form method="post" action="php/logar.php">
      <h2 class="card-title">Entrar a su cuenta</h2>
      <div class="form-group">
        <label>email</label>
        <input required type="email" class="form-control" placeholder="Su email" name="email">
      </div>
      <div class="form-group">
        <label>contraseña</label>
        <input required type="password" class="form-control" placeholder="contraseña" name="senha">
      </div>
      <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
  </div>
</div>

<div class="card container" style="padding-top: 5px; margin-top: 20px;">
<!--   <img class="card-img-top" src="img/post/post1.jpg"> -->
  <div class="card-body">
    <form method="post" action="php/registrar.php">
      <h2 class="card-title">No tienes una cuenta? Registrese</h2>
      <div class="form-group">
        <label>Usuario</label>
        <input required type="text" class="form-control" placeholder="nombre de usuario" name="r_usuario">
      </div>
      <div class="form-group">
        <label>E-mail</label>
        <input required type="email" class="form-control" placeholder=" email" name="r_email">
      </div>
      <div class="form-group">
        <label>Contraseña</label>
        <input required type="password" class="form-control" placeholder="contraseña" name="r_senha">
      </div>
      <div class="form-group">
        <label>Contraseña</label>
        <input required type="password" class="form-control" placeholder="Confirmar contraseña" name="r_senha2">
      </div>
      <button type="submit" class="btn btn-danger">Registrar</button>
    </form>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>