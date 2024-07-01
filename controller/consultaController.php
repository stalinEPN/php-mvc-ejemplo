<?php

class ConsultaController extends Controller{
  function __construct(){
    parent::__construct();
    $this->view->render('consulta/index');
    //echo "<p>Nuevo controlador Main</p>";
}
}

?>