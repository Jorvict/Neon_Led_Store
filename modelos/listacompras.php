<?php
require_once 'conexion.php';

class Compras
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

    public static function InsertarCompras($producto,$precio,$tamano,$cantidad,$imagen,$cliente,$monto)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("INSERT INTO tab_listacompra (com_producto, com_precio, com_tamano, com_cantidad, com_imagen, com_cliente, com_total) VALUES('$producto','$precio','$tamano','$cantidad','$imagen','$cliente','$monto') ");
        $conexion->cerrar();
        return $listado;
    }

    public static function ListaCompras($id)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM tab_listacompra WHERE com_cliente = '$id'");
        $conexion->cerrar();
        return $listado;
    }

    public static function MontoTotal($id)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT SUM(com_total) AS montototal FROM tab_listacompra WHERE com_cliente = '$id'");
        $conexion->cerrar();
        return $listado;
    }

    public static function ProductoTotal($id)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT SUM(com_cantidad) AS productototal FROM tab_listacompra WHERE com_cliente = '$id'");
        $conexion->cerrar();
        return $listado;
    }

    public static function AumentarProducto($id,$cantidad1,$montototal)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("UPDATE tab_listacompra SET com_cantidad='$cantidad1', com_total='$montototal' WHERE com_id = '$id' ");
        $conexion->cerrar();
        return $listado;
    }

    public static function NoRepetirProducto($producto,$cliente,$tamano)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM tab_listacompra WHERE com_cliente = '$cliente' AND com_tamano = '$tamano' AND com_producto = '$producto'");
        $conexion->cerrar();
        return $listado;
    }

    public function EliminarProducto($id) {
        $conexion = new Conexion ();
        $listado = $conexion->actualizar("DELETE FROM tab_listacompra WHERE com_id = '$id'");
		$conexion->cerrar();
		return $listado;
	}
    
}