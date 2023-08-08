<?php
class Employee
{


  public $valor1;
  public $valor2;
  public $result;
 
  public function __construct($valor1, $valor2)
  {
    $this->valor1 = $valor1;
    $this->valor2 = $valor2;
  }


  public function suma(){
    $result = $this->valor1 + $this->valor2;
    return $result;
  }
  
   public function resta(){
    $result = $this->valor1 - $this->valor2;
    return $result;
  }
  public function multiplicacion(){
    $result = $this->valor1 * $this->valor2;
    return $result;
  }
  public function division(){
    $result = $this->valor1 / $this->valor2;
    return $result;
  }
  public function potencia(){
    $result = pow($this->valor1 , $this->valor2);
    return $result;
  }
}
  ?>