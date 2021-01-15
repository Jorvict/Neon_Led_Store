<?php
require_once "../../modelos/ListaFinalizarCompra.php";

class ControladorListaFinalizarCompra
{
    public static function ListaFinalizarCompra($id)
    {
        $compras = new ListaFinalizarCompra();
        $lista = $compras->ListaFinalizarCompra($id);
        return $lista;
    }

    public static function ListaFinalProducto($id)
    {
        $compras = new ListaFinalizarCompra();
        $lista = $compras->ListaFinalProducto($id);
        return $lista;
    }

    public static function ListaFinalMonto($id)
    {
        $compras = new ListaFinalizarCompra();
        $lista = $compras->ListaFinalMonto($id);
        return $lista;
    }

}