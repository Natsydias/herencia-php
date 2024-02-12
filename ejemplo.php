<?php
// Clase padre
class Animal {
    public $name;
    // Constructor para clase padre
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
    // Método de clase padre
    public function haceSonido() {
        echo "El animal haces un sonido.\n";
    }
}
// Clase hija
class Perro extends Animal {
    // Constructor para clase hija
    public function __construct($nombre) {
        // Llamar el constructor del padre
        parent::__construct($nombre);
    }

    // Override de la funcion haceSonido
    public function haceSonido() {
        echo "El perro ladra.\n";
    }
}

// Crear un nuevo objeto de la clase perro
$perro = new ("Rex");

// Llamar el método haceSonido
$perro->haceSonido();  // Outputs: El perro ladra.

//Llamar el método desde la clase padre
$perro->nombre = "Spot";
echo $perro->nombre;  // Outputs: Spot
?>