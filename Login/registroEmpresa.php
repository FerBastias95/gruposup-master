<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='../text/css'>
<link href="../css/register.css" rel="stylesheet">

<div class="testbox">
  <h1>Registro Empresas</h1>

  <form action="/" method="POST">
    <hr>
      <label id="icon" for="name"><i class="icon-user"></i></label>
      <input type="text" name="name" id="name" placeholder="Nombre" required/>
      <label id="icon" for="name"><i class="icon-user"></i></label>
      <input type="text" name="name" id="name" placeholder="Nombre Empresa" required/>
      <label id="icon" for="name"><i class="icon-envelope "></i></label>
      <input type="text" name="name" id="name" placeholder="Correo" required/>
      <label id="icon" for="name"><i class="icon-shield"></i></label>
      <input type="password" name="name" id="name" placeholder="Contraseña" required/>
   
   <a href="../index.php" class="button" type="submit">Registrar</a>
  </form>
</div>
<div id="oink" class="text-center">
  <a href="../Login/registroPersona.php" class="text-middle">Registro Cuenta Personas</a>
</div>

<div id="usuariosRegistrados">
  <?php
    require("../conexion/conexion.php");

    if(isset($_POST))
  ?>
</div>