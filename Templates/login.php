<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>SAC-INT</title>
  <link rel="stylesheet" type="text/css" href="../css/csslogin.css" />
</head>

<body>

  <div class="cabecera" id="cabecera"><img src="../img/EsCayambe.png" id="logo" class="logo" /></div>
  <form action="../ec.edu.intsuperior/controlador/controladores/loginacceso.php" method="POST" enctype="application/x-www-form-urlencoded" name="login">
    <div class="login">
      <input type="text" placeholder="Usuario" name="username" id="username" required="required" />
      <input type="password" placeholder="Contraseña" name="password" id="password" required="required" />
      <a href="#" class="forgot">Olvido su Contraseña?</a>
      <input type="submit" value="Ingresar">
    </div>
    <div class="shadow"></div>
  </form>
</body>

</html>