<?php
    class Calculadora{
      public $numero1;
      public $numero2;

      public function __construct($numero1,$numero2){
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;

      }
      public function somaNumeros(){
       echo nl2br("$this->numero1 + $this->numero2 =".$this->numero1 + $this->numero2."\n");
      }

      public function subtracaoNumeros(){
        echo nl2br("$this->numero1 - $this->numero2 =".$this->numero1 - $this->numero2."\n");
       }

       public function divisaoNumeros(){
        echo nl2br("$this->numero1 / $this->numero2 =".$this->numero1 / $this->numero2."\n");
       }

       public function MultiplicacaoNumeros(){
        echo ("$this->numero1 * $this->numero2 =".$this->numero1 * $this->numero2);
       }
    }
?>