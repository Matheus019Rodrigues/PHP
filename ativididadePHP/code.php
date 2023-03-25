<?php
class Sequencia{
    private $inicial;
    private $final;

    public function setStart($inicial){
        $this -> inicial = $inicial;
    }
    public function setEnd($final)
    {
        $this->final = $final;
    }
    public function mostrarnumero(){
        for ($this -> inicial; $this -> inicial < $this -> final; $this -> inicial ++ ){
            echo $this->inicial. "<br>";
        }
    }
    public function mostrarnumeroImpares(){
    
        for ($this->inicial; $this->inicial < $this->final; $this->inicial++) {
            if ($this -> inicial % 2 == 0){
                echo $this->inicial . "<br>";
            }
        }
    }
    public function mostrarnumeroPares(){

        for ($this->inicial; $this->inicial < $this->final; $this->inicial++) {
            if ($this -> inicial % 2 != 0) {
                echo $this -> inicial . "<br>";
            }
        }
    }
}