<?php

class ErrorController extends Controller{
  public $mensaje;
  public function __construct(){
    parent::__construct();
    $this->view->mensaje = "Error al cargar Recurso";
    $this->view->render('error/index');
  }
}

?>