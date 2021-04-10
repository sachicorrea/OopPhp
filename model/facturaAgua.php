<?php 

class FacturaAgua 
{
    private $nombreCliente;
    private $direccion;
    private $estrato;
    private $metrosAcueducto;
    private $metrosAlcantarillado;

    public function __construct($nCli, $dir, $est, $mAc, $mAl)
    {
        $this->nombreCliente = $nCli;
        $this->direccion = $dir;
        $this->estrato = $est;
        $this->metrosAcueducto = $mAc;
        $this->metrosAlcantarillado = $mAl;
    }

    public function getNombreCliente(){
        return $this->nombreCliente;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getEstrato(){
        return $this->estrato;
    }

    public function getmetrosAcueducto(){
        return $this->metrosAcueducto;
    }

    public function getMetrosAlcantarillado(){
        return $this->metrosAlcantarillado;
    }

    public function getTotalAcueducto(){
        $total = 0;

        if($this->metrosAcueducto <= 20) {
            $total = $this->metrosAcueducto * 1450;
        }
        else
        {
            $total = (20 * 1450) + (($this->metrosAcueducto - 20) * 1450 * 1.5);
        }
        return $total;
    }

    public function getTotalAlcantarillado(){
        $total = 0;

        if($this->metrosAlcantarillado <= 20) {
            $total = $this->metrosAlcantarillado * 1100;
        }
        else
        {
            $total = (20 * 1150) + (($this->metrosAlcantarillado - 20) * 1100 * 1.5);
        }
        return $total;
    }

    public function getSubtotal(){
        return $this->getTotalAcueducto() + $this->getTotalAlcantarillado();
    }

    public function getDescuento(){
        $descuento = 0;
        
        switch($this->estrato){
            case 1:
            $descuento = $this->getSubtotal() * 0.2;
            break;
            
            case 2:
            $descuento = $this->getSubtotal() * 0.1;
            break;
            
            case 3:
            $descuento = $this->getSubtotal() * 0.05;
            break;
        }
        return $descuento;
    }

    public function getTotalAPagar(){
        return $this->getSubtotal() - $this->getDescuento();
    }
}

?>