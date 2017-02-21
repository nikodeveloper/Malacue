<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="portal confesiones">
    <meta name="author" content="Nicolas">
    <link rel="icon" href="../../favicon.ico">

    <title>proyecto Malacue</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <style type="text/css">    
      body 
      {
        padding-bottom: 40px;
      }
      .brand
      {
        height: 10px; 
        width: 200px;
      }        
    </style> 
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body background="img/bg.jpg">
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Malacue</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <!--div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
            
              <input type="password" placeholder="Clave" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Inicio Sesion</button>-->

            <ul class="nav pull-right" style="margin-top: 4px">
            <div class="control-group">
              <?php
                ini_set('error_reporting',E_ALL & ~E_NOTICE);
                session_start(); 
                if ($_SESSION["usuario"]!='')
                {    
                  $usu = "".$_SESSION['usuario']; 
                  echo "<a href='Perfil.php'> $usu </a>";
                  echo "&nbsp&nbsp<a href='log_out.php'><button type='submit' class='btn'> Cerrar Sesion </button></a>";                       
                }
                else
                {
                  echo '<a class="btn" data-toggle="modal" href="#login">Login </a>&nbsp&nbsp';
                  echo '<a class="btn" data-toggle="modal" href="#registro">Registro </a>';
                }
              ?>
            </div>                
          </ul> 
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <br><br><br><br>


    <div class="container">  
      <div class="navbar"> <!--Inicio navbar--> 
        <div class="row">
          <div class="col-md-8">
             <span class="label label-danger">LOGOTIPO Malacue</span>
          </div>
          <div class="col-md-4" align="right">
              <h2>Tu nuevo portal ya está aquí</h2>
              <p>Las mejores confesiones en un solo portal
              <p>
                <a class="btn-sm btn-warning" href="#" role="button">Aleatorio &raquo;</a>
                <a class="btn-sm btn-warning" href="#" role="button">Lo mejor de la semana &raquo;</a>
          </div>
        </div>
      </div><!--fin navbar-->




  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2>Videos de la semana<small> Los mas vistos de esta semana</small></h2>
        <div class="hero-unit">

 cuadro de texto
        </div>
      </div>

      <div class="col-md-4" align= "center">
       
          <span class="label label-danger">FAN PAGE FACEBOOK</span>
          <!--
          DE ESTA MANERA SE DISPONDRÁ EL FANPAGES DE FACEBOOK O TWITER

          <div class="span4">
            <div class="fb-like-box" data-href="https://www.facebook.com/yourinstrumentfans?ref_type=bookmark" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
          </div> 
          /.span4 -->
      </div> <!-- div social media -->
    </div> <!--div row -->  
  </div> <!-- /container -->

<br>
<br>
<br>
<br>
    <footer>
      <p><code>&copy; 2017 Designed by Nicolas Celis.</code></p>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>