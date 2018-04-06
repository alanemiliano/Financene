<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>.: FINANCENE :.</title>
  <link href="res/bootstrap/css/bootstrap.css" rel="stylesheet">
  <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  -->


  <link rel="stylesheet" href="res/font-awesome/css/font-awesome.min.css">
  <script src="res/js/jquery.min.js"></script>
  <script src="res/plugins/morris/raphael-min.js"></script>
  <script src="res/plugins/morris/morris.js"></script>
  <link rel="stylesheet" href="res/plugins/morris/morris.css">
  <link rel="stylesheet" href="res/plugins/morris/example.css">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  
  <meta name="apple-mobile-web-app-title" content="Financene">
  <link rel="apple-touch-icon" href="../../../res/AppIcon/Financene.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../../../res/AppIcon/Financene.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../../../res/AppIcon/Financene.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../../../res/AppIcon/Financene.png">



</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">FINANCENE</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="./">INICIO</a></li>
          <li><a href="./?view=ins&opt=all">ENTRADAS</a></li>
          <li><a href="./?view=outs&opt=all">SALIDAS</a></li>
          <li><a href="./?vview=help">AYUDA</a></li>
        </ul>
      </div>
    </div>
  </nav>





  <?php 
  View::load("index");
  ?>
  <script src="res/bootstrap/js/bootstrap.min.js"></script>


</body>
</html>
