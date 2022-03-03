<?php
    class Actas extends Controllers{
        public function __construct()
        {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url());
        }
            parent::__construct();

        }       
        public function insertar()
        {
            $cedula = $_POST['cedula'];
            $cargo = $_POST['cargo'];
            $sitio = $_POST['sitio'];
            $fecha = $_POST['fecha'];
            $hora = $_POST['hora'];
            $tema = $_POST['tema'];
            $estado = $_POST['estado'];
            $participantes = $_POST['participantes'];
            $conclusion = $_POST['conclusion'];
            $responsable = $_POST['responsable'];
            $actividad = $_POST['actividad'];
            $estadoa = $_POST['estadoa'];
            $fechaa = $_POST['fechaa'];
            $insert = $this->model->insertarActas($cedula, $cargo, $sitio, $fecha, $hora, $tema, $estado, $participantes, 
            $conclusion, $responsable, $actividad, $estadoa, $fechaa);
            if ($insert > 0) {
            $alert = 'registrado';
            }else if ($insert == 'existe') {
            $alert = 'existe';
            }else{
            $alert =  'error';
            }
            $this->model->selectActas();
            header("location: " . base_url() . "Actas/Listar?msg=$alert");
            die();
        }

        public function actualizar()
        {
            $id = $_POST['id'];
            $cedula = $_POST['cedula'];
            $cargo = $_POST['cargo'];
            $sitio = $_POST['sitio'];
            $fecha = $_POST['fecha'];
            $hora = $_POST['hora'];
            $tema = $_POST['tema'];
            $estado = $_POST['estado'];
            $participantes = $_POST['participantes'];
            $conclusion = $_POST['conclusion'];
            $responsable = $_POST['responsable'];
            $actividad = $_POST['actividad'];
            $estadoa = $_POST['estadoa'];
            $fechaa = $_POST['fechaa'];
            $actualizar = $this->model->actualizarActas($cedula, $cargo, $sitio, $fecha, $hora, $tema, $estado, $participantes, $conclusion ,$responsable, $actividad, $estadoa, $fechaa, $id);
            if ($actualizar == 1) {
                $alert = 'modificado';
            }else {
                $alert = 'error';
            }
            header("location: " . base_url() . "Actas/Listar?msg=$alert");
            die();
        }
       
        public function Listar()
        {
            $data = $this->model->selectActas();         
            $this->views->getView($this, "Listar", $data, "");
        }

        public function ListarActividad()
        {$id = $_GET['cedula'];
            $data = $this->model->selectActividad($id);       
            $this->views->getView($this, "ListarActividad", $data, "");
        }

        public function Crear()
        {
            $data = $this->model->selectActas();         
            $this->views->getView($this, "Crear", $data, "");
        }
        
        public function eliminados()
         {
            $data = $this->model->selectActasInactivos();
            $this->views->getView($this, "Eliminados", $data, "");
         }
       
        public function editar()
        {
            $id = $_GET['id'];
            $data = $this->model->editarActas($id);
            if ($data == 0) {
                $this->Listar();
            }else{
                $this->views->getView($this, "Editar", $data);
            }
        }
  
    public function eliminar()
    {
        $id = $_GET['id'];
        $this->model->eliminarActas($id);
        header("location: " . base_url() . "Actas/Listar");
        die();
    }
    public function reingresar()
    {
        $id = $_GET['id'];
        $this->model->reingresarActas($id);
        $data = $this->model->selectActas();
        header("location: " . base_url() . "Actas/Listar");
        die();
    }
    public function buscar()
    {
        $cedula = $_POST['cedula'];
        $data = $this->model->BuscarActa($cedula);
        echo json_encode($data);
    }

}
