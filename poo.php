<?php 

class Multiplicacao {
    
    private $primeiroNumero;
    private $segundoNumero;
    private $terceiroNumero;
    
    public function getPrimeiroNumero() {
        return $this->primeiroNumero;
    }
    
    public function getSegundoNumero() {
        return $this->segundoNumero;
    }

    public function getTerceiroNumero() {
        return $this->terceiroNumero;
    }

    /**
     * Método construtor da classe.
     *
     * @name __construct
     * @access public
     * @param int $primeiroNumero
     * @param int $segundoNumero
     * @param int $terceiroNumero
     * @param operator $operacao
     * @return void
     */
    public function __construct($primeiroNumero = null, $segundoNumero = null, $terceiroNumero = null) {
        $this->primeiroNumero = $primeiroNumero;
        $this->segundoNumero = $segundoNumero;
        $this->terceiroNumero = $terceiroNumero;
    }
    
    public function calcular() {
        return $this->getPrimeiroNumero() * $this->getSegundoNumero() * $this->getTerceiroNumero();
    }

}

$multiplicacao = new Multiplicacao(2,2,2);

$resultado = $multiplicacao->calcular();

echo $multiplicacao->getPrimeiroNumero() .' x ' . $multiplicacao->getSegundoNumero() . ' x ' . $multiplicacao->getTerceiroNumero() . ' = ' . $resultado;

?>