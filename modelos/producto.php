<?php
require_once 'conexion.php';

class ModeloProducto
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

    public static function ProductoAnimados($id)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM animados WHERE ani_id = '$id' AND ani_estado = 'Activo'");
        $conexion->cerrar();
        return $listado;
    }

    public static function ProductoFrases($id)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM frases WHERE fra_id = '$id' AND fra_estado = 'Activo'");
        $conexion->cerrar();
        return $listado;
    }

    public static function ProductoFestividades($id)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM festividades WHERE fes_id = '$id' AND fes_estado = 'Activo'");
        $conexion->cerrar();
        return $listado;
    }
    
}