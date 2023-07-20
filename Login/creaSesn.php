<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='../text/css'>
<link href="../css/register.css" rel="stylesheet">

<title>Solo Super!</title>

<div class="testbox">
  <h1>¡Es gratis!</h1>

  <form action="/">
      <hr>
    <div class="accounttype">
      <input type="radio" value="None" id="radioOne" name="account" checked/>
      <label for="radioOne" class="radio" chec>Personal</label>
      <input type="radio" value="None" id="radioTwo" name="account" />
      <label for="radioTwo" class="radio">Empresa</label>
    </div>
  <hr>
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="name" id="name" placeholder="Correo" required/>
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="name" id="name" placeholder="Nombre" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="name" id="name" placeholder="Contraseña" required/>
  <div class="gender">
    <input type="radio" value="None" id="male" name="gender" checked/>
    <label for="male" class="radio" chec>Hombre</label>
    <input type="radio" value="None" id="female" name="gender" />
    <label for="female" class="radio">Mujer</label>
   </div> 
   
   <a href="../index.php" class="button">Registrar</a>
  </form>
</div>