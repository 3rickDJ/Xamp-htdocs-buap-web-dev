<?
class encuesta
{
    public $conn;
    public function __construct()
    {
        $this->conn = new sql();
    }
    public function buscausuario($ip)
    {
        $sql = "select * from usuario where ip = '" . $ip . "'";
        $result = $this->conn->select($sql);

        $estado = "";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $estado = $row["ip"];
            }
        }
        return $estado;
    }
    public function ultimo()
    {
        $count = 0;
        $sql = "select max(id) ultimo from usuario";
        $result = $this->conn->select($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $count = $row["ultimo"];
            }
        }
        $count++;
        return $count;
    }

    public function insertar($nom, $ip)
    {
        if ($this->buscausuario($ip) == "") {
            $ultimo = $this->ultimo();
            $sql = "insert into usuario ('" . $ultimo . "','" . $nom . "','" . $ip . "','" . gethostname() . "')";
            $result = $this->conn->select($sql);
        }
    }

    public function preguntas($id_encuesta, $id)
    {
        $sql = "SELECT e.id eid, e.nom enom,p.id pid, p.nom pnom, p.sub psub, p.id_encuasta pid_encuesta, r.id rid, r.nom rnom, r.valor rvalor, r.id_encuesta rid_encuesta , r.id_pregunta rid_pregunta FROM encuesta e inner join pregunta p on e.id = p.id_encuasta inner join respuesta r on p.id= r.id_pregunta where r.id_encuesta= '" . $id_encuesta . "'and p.id= '" . $id . "'";

        $result = $this->conn->select($sql);

        $obj = new stdClass();
        $obj->encuesta = "";
        $obj->pregunta = "";
        $obj->numero = 0;
        $obj->total = $this->totalDePreguntas($id_encuesta);
        $obj->respuesta = [];


        if ($result->num_rows > 0) {
            $aux = 0;
            while ($row = $result->fetch_assoc()) {
                //$count = $row["ultimo"];

                $obj->encuesta = $row["enom"];
                $obj->pregunta = $row["pnom"];
                $obj->numero = $row["pid"];
                $obj->respuesta[$aux] = new stdClass();
                $obj->respuesta[$aux]->respuestaId = $row["rid"];
                $obj->respuesta[$aux]->respuesta = $row["rnom"];
                $obj->respuesta[$aux]->valor = $row["rvalor"];
                $aux++;
            }
        }
        return $obj;
    }

    public function totalDePreguntas($id_encuesta)
    {
        $sql = "SELECT count(id_encuasta) total FROM encuesta e inner join pregunta p on e.id = p.id_encuasta where id_encuasta='" . $id_encuesta ."'";
        $result = $this->conn->select($sql);
        $total = 0;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $total = $row["total"];
            }
        }
        return $total;
    }
}