<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">

    <!-- Icono -->
    <link rel="shortcut icon" type="image/ico" href="images/icono.ico" />

    <!-- CSS principal -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Titulo -->
    <title>Contacto - Random Happiness Productions</title>

    <!-- Responsive -->
    <meta name="viewport" content="width=900px" />

    <meta name="description" content="Contacta con la compañía. - Random Happiness Productions." />
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          
          <div class="col-8">
            <img id="imagen-cabecera" class="rounded float-right" src="images/logo.png" alt="Random Happiness Productions" width="50%">

          </div>

          <div class="col-4">
            <ul class="social-header list-inline text-sm-right">
              <li class="list-inline-item">
                <div class="fa-2x">
                <a href="https://www.facebook.com/RandomHappinessProductions/" target="new_blank">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="https://www.instagram.com/randomhappinessproductions/" target="new_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://twitter.com/RandomHappiPro" target="new_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                  </div>
                </a>
              </li>
            </ul>
          </div>    
        </div>
      </div>

      <div class="menu-bar text-center">
        <nav class="container" role="menu" >
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="index.php"  >Inicio</a>
            </li>
            <li class="list-inline-item">
              <a href="compania.html">Compañía</a>
            </li>
            <li class="list-inline-item">
              <a href="espectaculos.html">Espectáculos</a>
            </li>
            <li  id="actual" class="list-inline-item">
              <a href="contacto.php">Contacto</a>
            </li>

          </ul>
        </nav>
      </div>
    </header>

         <div id="main">
         <h2>Contacto<i class="fas fa-envelope float-right hidden-xs-down"></i></h2> <!-- Para que en moviles desaparezca y no de problema -->
          <br><br><br>
        </div>

        <div class="container">
      <div class="row">
        <div class="col-8" id="separaColumnasFormulario">
          <form id="formu" name="frmContacto" method="post" action="contacto.php">
            <p> Rellene el siguiente formulario y nos pondremos en contacto con usted a la mayor brevedad posible: </p>
              <table width="500px">
                <tr>
                  <td>
                    <label for="first_name">Nombre/Name:</label>
                  </td>
                  <td>
                    <input type="text" name="first_name" maxlength="50" size="25">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="email">E-mail:</label>
                  </td>
                  <td>
                    <input type="text" name="email" maxlength="80" size="25">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="comments">Mensaje/Message:</label>
                  </td>
                  <td>
                    <textarea name="comments" maxlength="500" cols="27" rows="5"></textarea>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align:left">
                    <input id="boton-enviar" type="submit" value="Enviar">
                  </td>
                </tr>
              </table>
          </form>
        </div>
        <div class="col-4">
          <h4>Compañía y distribución:</h4>
          <br>
          <p class="text-justify">Avenida Ciudad de Barcelona 210, 2ºI</p>
          <p>Madrid, España</p>
          <br>
          <p>
            Tel: +34 675 70 69 66
          </p>
          <p class="text-justify">
            <strong>randomhappinesspro@gmail.com </strong>
          </p>
        </div>
      </div>
    </div>

      <br><br><br>


    </div>
  </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div style="float: left;">© 2018 Random Happiness Productions </div>
            <div style="float: right;" >Diseño web: Javier Sánchez Escribano </div>
          </div>
        </div>
      </div>

    </footer>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <?php
if(isset($_POST['email'])) {
// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "randomhappinesspro@gmail.com";
$email_subject = "Formulario web";
// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['first_name']) ||
!isset($_POST['email']) ||
!isset($_POST['comments'])) {
echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}
$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Mensaje: " . $_POST['comments'] . "\n\n";
// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
}
?> 
  </body>
</html>