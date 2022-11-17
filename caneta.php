<?php
class Caneta
{

    public $cor; //protected - private
    public $material;
    public $marca;
    private $memoria;
    
public function escrever($texto){
    $this->memoria=$texto;
    echo $texto."<br>";
}
public function desenhar ($simbulo){
    for($i=0;$i<10;$i++){
    echo $simbulo;
}echo"<br>";
}

public function reescrever($vezes)
{echo "reescrevendo a falacia ...<br>";
     for($i=0;$i<$vezes;$i++)
    echo $this->memoria."<br>";}
}
?>