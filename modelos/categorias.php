<?php
require_once 'conexion.php';

class ModeloCategorias
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

    public static function ListaCategorias1()
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM tab_categorias WHERE cat_estado = 'Activo' ORDER BY cat_id ASC LIMIT 5");
        $conexion->cerrar();
        return $listado;
    }

    public static function ListaCategorias2()
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM tab_categorias WHERE cat_estado = 'Activo' ORDER BY cat_id DESC LIMIT 5");
        $conexion->cerrar();
        return $listado;
    }

    public static function Prueba()
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM tab_categorias WHERE cat_estado = 'Activo'");
        $conexion->cerrar();
        return $listado;
    }

    public static function Prueba2()
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM tab_categorias WHERE cat_estado = 'Activo' ORDER BY cat_id ASC LIMIT 5");
        $conexion->cerrar();
        return $listado;
    }

}
