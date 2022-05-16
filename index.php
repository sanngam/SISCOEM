<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SISCOEM</title>
  <?php require_once 'controllers/app/dependencias.php' ?>
</head>

<body>
  <div class="container">
    <?php
    if (isset($_GET['vista'])) {

      switch ($_GET['vista']) {
        case 'login':
          require_once 'views/Login/login.php';
          break;
        case 'registroLogin':
          require_once 'views/Login/registroLogin.php';
          break;
        case 'personal':
          require_once 'views/personal.php';
          break;

        case 'formatoCompatibilidad':
          require_once 'views/formatoCompatibilidad/formatoCompatibilidad_create.php';
          break;

        case 'listaChecable':
          require_once 'views/formatoCompatibilidad/listaChecable.php';
          break;

          case 'carga':
            require_once 'views/carga.php';
            break;  

        default:
          require_once 'views/Login/login.php';
          break;
      }
    } else {
      require_once 'views/Login/login.php';
    }

    ?>
  </div>
</body>

</html>