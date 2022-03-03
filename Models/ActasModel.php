<?php
class ActasModel extends Mysql{
    public $id, $cedula, $cargo, $sitio, $fecha, $hora, $tema, $estado, $participantes, $conclusion;
    public $responsable, $actividad, $estadoa, $fechaa;
    public function __construct()
    {
        parent::__construct();
    }
    
    public function insertarActas(String $cedula, string $cargo, string $sitio, string $fecha, string $hora, string $tema, string $estado,
     string $participantes, string $conclusion, string $responsable, string $actividad, string $estadoa, string $fechaa) {
        $return = "";
        $this->cedula = $cedula;
        $this->cargo = $cargo;
        $this->sitio = $sitio;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->tema = $tema;
        $this->estado = $estado;
        $this->participantes = $participantes;
        $this->conclusion = $conclusion;
        $this->responsable = $responsable;
        $this->actividad = $actividad;
        $this->estadoa = $estadoa;
        $this->fechaa = $fechaa;
        $sql = "SELECT * FROM actas WHERE cedula = '{$this->cedula}'";
        $result = $this->select_all($sql);
        if (empty($result)) {
            $query = "INSERT INTO actas(cedula, cargo, sitio, fecha, hora, tema, estado, 
            participantes, conclusion, responsable, actividad, estadoa, fechaa ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $data = array($this->cedula, $this->cargo, $this->sitio, $this->fecha, $this->hora, $this->tema, $this->estado, $this->participantes,
             $this->conclusion, $this->responsable, $this->actividad, $this->estadoa, $this->fechaa);
            $resul = $this->insert($query, $data);
            $return = $resul;
        }else {
            $return = "existe";
        }
        return $return;
    }

    public function actualizarActas(String $cedula, string $cargo, string $sitio, string $fecha, string $hora, string $tema, string $estado,
     string $participantes, string $conclusion, string $responsable, string $actividad, string $estadoa, string $fechaa,  int $id)
    {
        $return = "";
        $this->cedula = $cedula;
        $this->cargo = $cargo;
        $this->sitio = $sitio;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->tema = $tema;
        $this->estado = $estado;
        $this->participantes = $participantes;
        $this->conclusion = $conclusion;
        $this->responsable = $responsable;
        $this->actividad = $actividad;
        $this->estadoa = $estadoa;
        $this->fechaa = $fechaa;
        $this->id = $id;
        $query = "UPDATE actas SET cedula=?, cargo=?, sitio=?, fecha =?, hora=?, tema=?, estado=?,
         participantes=?, conclusion=?, responsable=?, actividad=?, estadoa=?, fechaa=?  WHERE id=?";
        $data = array($this->cedula, $this->cargo, $this->sitio, $this->fecha, $this->hora, $this->tema, $this->estado, $this->participantes, 
        $this->conclusion, $this->responsable, $this->actividad, $this->estadoa, $this->fechaa, $this->id);
        $resul = $this->update($query, $data);
        $return = $resul;
        return $return;
    }

    public function editarActas(int $id)
    {
        $this->id = $id;
        $sql = "SELECT * FROM actas WHERE id = '{$this->id}'";
        $res = $this->select($sql);
        if (empty($res)) {
            $res = 0;
        }
        return $res;
    }
    
    public function selectActas()
    {
        $sql = "SELECT * FROM actas";
        $res = $this->select_all($sql);
        return $res;
    }

    public function selectActividad(string $cedula)
    { $this->ced = $cedula;
        $sql = "SELECT * FROM actas WHERE cedula = $this->ced";
        $res = $this->select_all($sql);
        return $res;
    }

    public function selectActasInactivos()
    {
        $sql = "SELECT * FROM actas WHERE estado = 0";
        $res = $this->select_all($sql);
        return $res;
    }
    public function BuscarActa(string $cedula)
    {
        $this->ruc = $cedula;
        $sql = "SELECT * FROM actas WHERE cedula = $this->ruc AND estado = 1";
        $res = $this->select($sql);
        return $res;
    }

    public function eliminarActas(int $id)
    {
        $return = "";
        $this->id = $id;
        $query = "UPDATE actas SET estado = 0 WHERE id=?";
        $data = array($this->id);
        $resul = $this->update($query, $data);
        $return = $resul;
        return $return;
    }
    public function reingresarActas(int $id)
    {
        $return = "";
        $this->id = $id;
        $query = "UPDATE actas SET estado = 1 WHERE id=?";
        $data = array($this->id);
        $resul = $this->update($query, $data);
        $return = $resul;
        return $return;
    }

}
?>