<?php
class Car {
  private $num_telaio;
 protected function numeroTelaio($num_telaio){
    $this->num_telaio = $num_telaio;
  }
protected function getnumeroTelaio() {
    return $this->num_telaio;
  }
}

class Fiat extends Car {
  protected $license;
  protected $name;
  protected $targa;
  protected $modello;
  public function __construct($num_telaio, $name, $targa, $modello) {
    $this->numeroTelaio($num_telaio);
    $this->name = $name;
    $this->targa = $targa;
    $this->modello = $modello;
    echo "La mia macchina e' una {$this->name}, con targa {$this->targa}, modello {$this->modello} e numero di telaio {$this->getnumeroTelaio()} .\n";
  }
}
$Fiat = new Fiat("1234", "Fiat", "ND 123 OJ", "Panda");