<?php

class Vertebrate {
    public function __construct() {
        $this->printVertebrate();
        $this->printType();
        $this->printSpecies();
    }

    protected function printVertebrate() {
        echo "Sono un animale Vertebrato\n";
    }

    protected function printType() {
        // Lasciato vuoto, verrà sovrascritto nelle sottoclassi
    }

    protected function printSpecies() {
        // Lasciato vuoto, verrà sovrascritto nelle sottoclassi
    }
}

// --------- CLASSI INTERMEDIE ---------

class WarmBlooded extends Vertebrate {
    protected function printType() {
        echo "Sono un animale a Sangue Caldo\n";
    }
}

class ColdBlooded extends Vertebrate {
    protected function printType() {
        echo "Sono un animale a Sangue Freddo\n";
    }
}

// --------- CLASSI FINALI ---------

class Mammal extends WarmBlooded {
    protected function printSpecies() {
        echo "Roar!\n";
    }
}

class Bird extends WarmBlooded {
    protected function printSpecies() {
        echo "Cip cip!\n";
    }
}

class Fish extends ColdBlooded {
    protected function printSpecies() {
        echo "Splash!\n";
    }
}

class Reptile extends ColdBlooded {
    protected function printSpecies() {
        echo "Ssssss!\n";
    }
}

class Amphibian extends ColdBlooded {
    protected function printSpecies() {
        echo "Cra cra!\n";
    }
}

// --------- ESEMPIO USO ---------

$magikarp = new Fish();

// Output:
// Sono un animale Vertebrato
// Sono un animale a Sangue Freddo
// Splash!

// NON HO CAPITO COSA FARE IN QUESTO ESERCIZIO