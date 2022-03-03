<?php
class AdminModel extends Mysql{
    public function __construct()
    {
        parent::__construct();
    }

    public function actas()
    {
        $sql = "SELECT COUNT(*) FROM actas where estado = 'sin iniciar'";
        $res = $this->selecT($sql);
        return $res;
    }
    public function usuarios()  {
        $sql = "SELECT COUNT(*) FROM usuarios WHERE estado = 1";
        $res = $this->selecT($sql);
        return $res;
    }
}
