<?php
require_once "../../modelos/producto.php";

class ControladorProducto
{
    public static function ProductoAnimados($id)
    {
        $animales = new ModeloProducto();
        $lista = $animales->ProductoAnimados($id);
        return $lista;
    }

    public static function ProductoFrases($id)
    {
        $frutas = new ModeloProducto();
        $lista = $frutas->ProductoFrases($id);
        return $lista;
    }

    public static function ProductoFestividades($id)
    {
        $jerga = new ModeloProducto();
        $lista = $jerga->ProductoFestividades($id);
        return $lista;
    }

}