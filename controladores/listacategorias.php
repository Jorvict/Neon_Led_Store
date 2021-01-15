<?php
require_once "../../modelos/categorias.php";

class ControladorCat
{
    public static function Categorias1()
    {
        $categorias = new ModeloCategorias();
        $lista = $categorias->ListaCategorias1();
        return $lista;
    }

    public static function Categorias2()
    {
        $categorias = new ModeloCategorias();
        $lista = $categorias->ListaCategorias2();
        return $lista;
    }

    

}