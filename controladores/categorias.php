<?php
require_once "../modelos/categorias.php";

class ControladorCategorias
{
    public static function ListaCategorias1()
    {
        $categorias = new ModeloCategorias();
        $lista = $categorias->ListaCategorias1();
        return $lista;
    }

    public static function ListaCategorias2()
    {
        $categorias = new ModeloCategorias();
        $lista = $categorias->ListaCategorias2();
        return $lista;
    }

    public static function Prueba()
    {
        $categorias = new ModeloCategorias();
        $lista = $categorias->Prueba();
        return $lista;
    }

    public static function Prueba2()
    {
        $categorias = new ModeloCategorias();
        $lista = $categorias->Prueba2();
        return $lista;
    }

}
