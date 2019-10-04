<?php
// php -S localhost:8080     : comando para ejecutar el server php
// http://localhost:8080

echo "REQUEST";
print_r($_REQUEST);  // se recibe todos los parametros que devuelve el post de la pagina padre

// get obtiene datos las variables si se ven en la url // posta envia datos (las variables no se ven en la url)

echo "GET";
print_r($_GET);

echo "POST";
print_r($_POST);

class Animal{
    private $nombre;
    public static $especie = 'canino';

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function hola() {
        echo 'Soy un '.$this->nombre;
    }
}

$a = new Animal('chanchi');
$a->hola();

Animal::$especie;

class Perro extends Animal {
    public function __construct()
    {
        self::__construct('chanchiño');
    }
}