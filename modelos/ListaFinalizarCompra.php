<?php
require_once 'conexion.php';

class ListaFinalizarCompra
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

    public static function ListaFinalizarCompra($id)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM tab_listacompra WHERE com_cliente = '$id'");
        $conexion->cerrar();
        return $listado;
    }

    public static function ListaFinalProducto($id)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT SUM(com_cantidad) AS productototal FROM tab_listacompra WHERE com_cliente = '$id'");
        $conexion->cerrar();
        return $listado;
    }

    public static function ListaFinalMonto($id)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT SUM(com_total) AS montototal FROM tab_listacompra WHERE com_cliente = '$id'");
        $conexion->cerrar();
        return $listado;
    }


}

?>