<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2019-11-30 at 04:39:29.
 */
require '../DAOProducto.php';
class DAOProductoTest extends PHPUnit_Framework_TestCase {

    /**
     * @var DAOProducto
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new DAOProducto;
    }

    protected function tearDown() {
        
    }    

   
    public function testGetTabla() {
        $this->assertEquals(
                "<tr><td>.['codigo']
                <td>['nombre']</td>
                <td>['descripcion']</td>
                <td>['precio']</td>
                <td>['tipo']</td>
                </tr>"
                , $this->object->getTabla()                
                ); 
    }
    
    public function testInsertar() {
        $this->assertEquals(
                "Producto Agregado"
                , $this->object->Insertar()                
                );
    }

}
