<?php
require_once "../../modelos/contenidocategoria.php";

class ControladorContenidoCategoria
{
    public static function ListaAnimados()
    {
        $categorias = new ModeloContenidoCategoria();
        $lista = $categorias->ListaAnimados();
        return $lista;
    }

    public static function ListaFestividades()
    {
        $categorias = new ModeloContenidoCategoria();
        $lista = $categorias->ListaFestividades();
        return $lista;
    }

    public static function ListaFrases()
    {
        $categorias = new ModeloContenidoCategoria();
        $lista = $categorias->ListaFrases();
        return $lista;
    }

    
}
