<?php

class NuevoController extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('nuevo/index');
        $this->loadModel('nuevo');
    }

    function registrarAlumno(){
        $datos = [
            'matricula' => $_POST['matricula'],
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido']
        ];

        if($this->model->insert($datos)){
            echo "Nuevo alumno creado";
        }else{
            echo "No se pudo registrar el alumno";
        }

        
    }
}

?>