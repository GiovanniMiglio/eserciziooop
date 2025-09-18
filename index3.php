<?php
class Vertebrate {
    public function __construct() {
       $this->descrizione();
    }
   
    protected function descrizione() {
        echo "Sono un vertebrato.\n";
    }
    
    
}
class WarmBlooded extends Vertebrate {
    public function __construct() {
        $this->descrizione();
    }
    protected function descrizione() {
        parent::descrizione();
        echo "Sono a sangue caldo.\n";
    }
}
class Mammal extends WarmBlooded {
    public function __construct() {
        $this->descrizione();
    }
    protected function descrizione() {
        parent::descrizione();
        echo "Sono un mammifero.\n";
    }
}
class Bird extends WarmBlooded {
    public function __construct() {
        $this->descrizione();
    }
    protected function descrizione() {
        parent::descrizione();
        echo "Sono un uccello.\n";
    }

}
class ColdBlooded extends Vertebrate {
    public function __construct() {
        $this->descrizione();
    }
    protected function descrizione() {
        parent::descrizione();
        echo "Sono a sangue freddo.\n";
    }

}
class Fish extends ColdBlooded {
    public function __construct() {
        $this->descrizione();
    }

    protected function descrizione() {
        parent::descrizione();
        echo "Splash!\n";
    }
}
class Reptile extends ColdBlooded {
    public function __construct() {
        $this->descrizione();
    }
    protected function descrizione() {
        parent::descrizione();
        echo "Sono un rettile.\n";
    }
  
}
class Amphibian extends ColdBlooded {
    public function __construct() {
        $this->descrizione();
    }
    protected function descrizione() {
        parent::descrizione();
        echo "Sono un anfibio.\n";
    }

}
$magikarp = new Fish();
