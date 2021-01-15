<?php
require_once 'conexion.php';

class ModeloContenidoCategoria
{
    public $id;
    public $nombre;
    private $conexion;

    public function __construct()
    {
        $this->id = 0;
        $this->nombre = '';
        $this->conexion = new Conexion();
    }

    public static function ListaAnimados()
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM animados WHERE ani_estado = 'Activo'");
        $conexion->cerrar();
        return $listado;
    }

    public static function ListaFestividades()
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM festividades WHERE fes_estado = 'Activo'");
        $conexion->cerrar();
        return $listado;
    }

    public static function ListaFrases()
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM frases WHERE fra_estado = 'Activo'");
        $conexion->cerrar();
        return $listado;
    }

    
}