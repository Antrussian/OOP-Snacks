<?php

class Persona {
    private $age;

    public function setAge($age) {
        if (!is_int($age)) {
            throw new InvalidArgumentException('L età deve essere un numero intero.');
        }
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}


$persona = new Persona();

try {
    $persona->setAge(25);
    echo "Età impostata con successo: " . $persona->getAge();
} catch (InvalidArgumentException $e) {
    echo "Errore: " . $e->getMessage();
}
?>


<?php

class Persona {
    private function setAge(age)
}