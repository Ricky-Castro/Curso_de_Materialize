<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Curso de Materialize</title>

    <!-- CSS  E ICONS-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>

  <nav >
    <!--MENU PARA DESKTOP-->
    <div class="nav-wrapper container">
      <img src="imagens/img.png" alt="" class="brand-logo" width="50" style="top: 7px">
      <ul class="right hide-on-med-and-down">
        <li><a href="#"><i class="material-icons left">home</i>Home</a></li>
        <li><a href="#"><i class="material-icons left">work</i>Portifólio</a></li>
        <li><a href="#"><i class="material-icons left">email</i>Contatdo</a></li>
      </ul>
      <!--MENU PARA MOBILE-->
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#"><i class="material-icons left">home</i>Home</a></li>
        <li><a href="#"><i class="material-icons left">work</i>Portifólio</a></li>
        <li><a href="#"><i class="material-icons left">email</i>Contatdo</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>
</html>