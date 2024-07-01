<?php
require_once 'controller/errorController.php';
class App
{

  function __construct()
  {
    $url = isset($_GET['url']) ? $_GET['url']: null;
    $url = rtrim($url, '/');
    $url = explode('/', $url);

    if(empty($url[0])){
      
      $url[0] = 'main';
    }

    $archivoController = 'controller/' . $url[0] . 'Controller.php';

    if (file_exists(($archivoController))) {
      require_once $archivoController;
      $controller = new ($url[0].'Controller');

      if(isset($url[1])){
        $controller->{$url[1]}();
      }

    } else {
      $controller = new ErrorController();
    }

  }
}

?>