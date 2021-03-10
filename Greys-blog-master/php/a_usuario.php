<?php include_once "funcoes.php"; include_once "conexao.php";?> 
<div class="card container" style="padding-top: 5px; margin-top: 20px; margin-bottom: 20px;">
  <div class="card-body">
    <form method="post" action="">
      <h2 class="card-title">Cambiar nombre de usuario</h2>
      <div class="form-group">
        <label>Usuario atual</label>
        <input type="text" readonly class="form-control-plaintext" value="<?php mostrar_nome();?>">
      </div>
      <div class="form-group">
        <label>Nuevo nombre</label>
        <input required type="text" class="form-control" placeholder="Usuario" name="usuario">
      </div>
      <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
    <?php
    if(isset($_POST["usuario"])){
        $usuario = $_POST["usuario"];
        $codigo = $_SESSION["id"];
        $con = conecta_mysql();
        if(verificar_usuario($con,$usuario)){
          $sql = "UPDATE usuarios SET usuario = '$usuario' where id = '$codigo'";
          $resultado = mysqli_query($con,$sql);
          if($resultado){
            $_SESSION["usuario"] = $usuario;
            print "<script> alert('Usuario alterado'); window.location.href=window.location.href;</script>";
          }
          else{
            print "<script> alert('Erro de conexao'); window.location.href=window.location.href;</script>";          
          }
        }
        else{
          print "<script> alert('Nome de usuario já está sendo utilizado.')</script>";
        }
      }
    ?>
  </div>
</div>
