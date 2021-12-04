<?php
   class Calculadora {
    private $_val1 , $_val2;

    public function __construct($val1, $val2){
        $this->_val1 = $val1;
        $this->_val2 = $val2;
    }

    public function add(){
        return $this->_val1 + $this->_val2;
    }

    public function sub(){
        return $this->_val1 - $this->_val2;
    }

    public function multiply(){
        return $this->_val1 * $this->_val2;
    }

    public function divide() {
        return $this->_val1 / $this->_val2;
    }
}

?>