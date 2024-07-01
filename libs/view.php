<?php

class View{
  public $mensaje;
  public function __construct() {
  }

  public function render($nombre){
    require 'views/' . $nombre . '.php';
  }
}

?>