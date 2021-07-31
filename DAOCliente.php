<?php
include 'credenciales.php';
include 'Cliente.php';

class DAOCliente{
    private $conexion;
    public function __construct(){
        
    }
    public function conectar(){
        try{
            $this->conexion = new mysqli(SERVIDOR,USUARIO,CLAVE,BD) or die ("Error al conectar") ; 
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
    }
    public function desconectar(){
        $this->conexion->close();
    }
    public function getTabla(){
        $sql = "select * from cliente";
        $this->conectar();
        $res = $this->conexion->query($sql);
        $this->desconectar();
        //tabla bootstrap
        $tabla = "<table class='table'>"
                . "<thead class='thead-dark'>";
        $tabla .="<tr>"
                ."<th>IdCliente</th>"
                ."<th>Email</th>"
                ."<th>Clave</th>"
                ."</tr></thead><tbody>";
        while ($fila = mysqli_fetch_assoc($res)){
            $tabla .= "<tr>"
                    ."<td>".$fila['idcliente']."</td>"
                    ."<td>".$fila['email']."</td>"
                    ."<td>".$fila['clave']."</td>"
                    ."</tr>";
        }
        $tabla .="</tbody></table>";
        $res->close();       
        return $tabla;
    }
    public function insertar($obj){
        $prod = new Cliente();
        $prod = $obj;        
        $sqlc = "select * from cliente";
        $this->conectar();
        $res = $this->conexion->query($sqlc);
        while ($fila = mysqli_fetch_assoc($res)){
            $idcliente = $fila['idcliente'];
        }
        $idcliente = $idcliente +1;
        $sql="insert into cliente values(".$idcliente.",'".$prod->getEmail()."','".$prod->getClave()."')";
        //echo $sql;
        if($this->conexion->query($sql)){
            //mensaje SweetAlert
            echo "Cliente Agregado";
        }else{
            echo "Error";
        }
        $this->desconectar();
    }
    public function eliminar($idcliente){
        
        $sql = "delete from cliente where idcliente=$idcliente";        
        $this->conectar();       
        if($this->conexion->query($sql)){
            //mensaje SweetAlert
            echo "<script>swal({title:'Exito',text:'El registro fue eliminado',type:'success'});</script>";
            //echo "Producto Agregado";
        }else{
            echo "<script>swal({title:'Error',text:'No se pudo eliminar el registro',type:'success'});</script>";
            //echo "Error";
        }
        $this->desconectar();
    }
}
//$obj = new DAOCliente;
//echo $obj->getTabla();

/*
$obj = new DAOCliente;
$objc = new Cliente;
//$objc->setIdcliente(3);
$objc->setEmail("co6rreo@gmail.com");
$objc->setClave("12W5j1234");
echo $obj->insertar($objc);*/

$obj = new DAOCliente;
echo $obj->eliminar(5);