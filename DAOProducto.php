<?php
include 'credenciales.php';
include 'Producto.php';

class DAOProducto{
    private $conexion;
    public function __construct(){
        
    }
    public function conectar(){
        try{
            $this->conexion = new mysqli(SERVIDOR,USUARIO,CLAVE,BD) or die ("Error al conectar") ; 
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function desconectar(){
        $this->conexion->close();
    }
    public function getTabla(){
        $sql = "select * from producto";
        $this->conectar();
        $res = $this->conexion->query($sql);
        $this->desconectar();
        //tabla bootstrap
        $tabla = "<table class='table'>"
                . "<thead class='thead-dark'>";
        $tabla .="<tr>"
                ."<th>Codigo</th>"
                ."<th>Nombre</th>"
                ."<th>Descripcion</th>"
                ."<th>Precio</th>"
                ."<th>Tipo</th>"
                ."</tr></thead><tbody>";
        while ($fila = mysqli_fetch_assoc($res)){
            $tabla .= "<tr>"
                    ."<td>".$fila['codigo']."</td>"
                    ."<td>".$fila['nombre']."</td>"
                    ."<td>".$fila['descripcion']."</td>"
                    ."<td>".$fila['precio']."</td>"
                    ."<td>".$fila['tipo']."</td>"
                    ."</tr>";
        }
        $tabla .="</tbody></table>";
        $res->close();       
        return $tabla;
    }
    public function insertar($obj){
        $prod = new Producto();
        $prod = $obj;
        $sqlc = "select * from producto";        
        $this->conectar();
        $res = $this->conexion->query($sqlc);
        while ($fila = mysqli_fetch_assoc($res)){
            $codigo = $fila['codigo'];
        }
        $codigo = $codigo+1;
        
        $sql="insert into producto values(".$codigo.",'".$prod->getNombre()."','".$prod->getDescripcion()."',".$prod->getPrecio().",'".$prod->getTipo()."')";
        //echo $sql;
        
        if($this->conexion->query($sql)){
            //mensaje SweetAlert
            echo "<script>swal({title:'Exito',text:'El registro fue insertado satisfactoriamente',type:'success'});</script>";
            //echo "Producto Agregado";
        }else{
            echo "<script>swal({title:'Error',text:'El registro no se pudo agregar',type:'success'});</script>";
            //echo "Error";
        }
        $this->desconectar();
    }
    public function eliminar($codigo){
        
        $sql = "delete from producto where codigo=$codigo";        
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
//$obj = new DAOProducto;
//echo $obj->getTabla();

/*
$obj = new DAOProducto;
$objp = new Producto;
//$objp->setCodigo(3);
$objp->setNombre("f");
$objp->setDescripcion("f");
$objp->setPrecio(12.15);
$objp->setTipo("jpg");
echo $obj->insertar($objp);*/

$obj = new DAOProducto;
echo $obj->eliminar(8);



