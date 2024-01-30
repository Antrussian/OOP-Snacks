<?php

class Persona {
    private $age;

    public function setAge($age) {
        if (is_int($age)) {
            $this->age = $age;
        } else {
            throw new InvalidArgumentException('L età deve essere un numero intero.');
        }
    }

    public function getAge() {
        return $this->age;
    }
}

$persona = new Persona();

try {
    $persona->setAge('stringa'); 
    echo "Età impostata con successo: " . $persona->getAge();
} catch (InvalidArgumentException $e) {
    echo "Errore: " . $e->getMessage();
}

?>
