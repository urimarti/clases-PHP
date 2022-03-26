<?php

class Animal
{
    const PERRO = 'Perro';
    const DESCONOCIDO = 'Desconocido';
    const SIN_NOMBRE = 'Sin Nombre';
    const SIN_RAZA = 'Sin Raza';

    public $tipo;
    public $nombre;
    public $raza;
    public $peligroso;
    private $mascota = 0;

    public function __construct(string $tipo = '')
    {
        $this->setTipo($tipo);
    }

    private function setTipo(string $tipo)
    {
        $this->tipo = strlen($tipo) ? $tipo : self::DESCONOCIDO;
    }

    private function setNombre(string $nombre)
    {
        $this->nombre = strlen($nombre) ? $nombre : self::SIN_NOMBRE;
    }

    private function setPeligroso(int $peligroso)
    {
        $this->peligroso = $peligroso;
    }

    private function setRaza(string $raza)
    {
        $this->raza = strlen($raza) ? $raza : self::SIN_RAZA;
    }

    public static function createPerro(string $nombre, string $raza, int $peligroso): Animal
    {
        $tipo = self::PERRO;
        $perro = new Animal($tipo);
        $perro->setNombre($nombre);
        $perro->setRaza($raza);
        $perro->setPeligroso($peligroso);
        return $perro;
    }

    public static function createPerroMascota(string $nombre, string $raza, int $peligroso): Animal
    {
        $perro = self::createPerro($nombre, $raza, $peligroso);
        $perro->mascota = 1;
        return $perro;
    }

    public static function isMascota(Animal $animal): bool
    {
        return $animal->mascota == 1;
    }

    public function describe(): string
    {
        $texto = 'El animal es un ' . $this->tipo;
        $texto .= ' que se llama ' . $this->nombre;
        $texto .= ' y es de raza ' . $this->raza . '. ';

        if ($this->peligroso) {
            $texto .= '¡Cuidado que es peligroso!';
        } else {
            $texto .= 'Tranquil@. ¡No es peligroso!';
        }

        return $texto;
    }
}
