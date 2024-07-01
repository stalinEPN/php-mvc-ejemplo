<?php

class MainController extends Controller{

  public function __construct(){
    parent::__construct();
    $this->view->render('main/index');
  }

  public function saludo(){
    echo '<p>Ejecutaste el metodo saludo</p>';
  }
}

?>