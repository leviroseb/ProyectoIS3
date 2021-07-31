<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2019-11-30 at 04:44:16.
 */
require '../Cliente.php';
class ClienteTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Cliente
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Cliente;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Cliente::getIdcliente
     * @todo   Implement testGetIdcliente().
     */
    public function testGetIdcliente() {
        $this->assertEquals(
                1
                , $this->object->getIdcliente()                
                );
    }
    
    public function testGetEmail() {
        $this->assertEquals(
                "frank.cncr@gmail.com"
                , $this->object->getEmail()                
                );
    }

    public function testGetClave() {
        $this->assertEquals(
                "1234qwer"
                , $this->object->getClave()                
                );
    }

    

}