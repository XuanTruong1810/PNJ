<?php
require_once __DIR__ . '../../DesignPattern/Singleton.php';
$GLOBALS['Instance'] = Singleton::getInstance();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <div class="app">
    <?php
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $views_position = strpos($url, 'Views/');
    $after_views = substr($url, $views_position + strlen('Views/'));
    if ($after_views === 'index.php' || $after_views === '' || $after_views === false) {
      header('Location: ./Home/');
      exit();
    }
    switch ($after_views) {
      case 'Customer/':
        include './Customer';
        break;
      case 'Admin/':
        include './Admin';
        break;
      default:
        break;
    }
    ?>
  </div>
</body>

</html>