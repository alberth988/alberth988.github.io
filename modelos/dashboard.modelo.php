<?php

require_once "conexion.php";

class DashboardModelo{

    static public function mdlGetDatosDashboard(){// metodos dashboard

        $stmt = Conexion::conectar()->prepare('call prc_ObtenerDatosDashboard()');//procedimeiento almacenado

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);// fetchAll obtener datos en forma de objetos

       
    }

    static public function mdlGetVentasMesActual(){

        $stmt = Conexion::conectar()->prepare('call prc_ObtenerVentasMesActual()');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlProductosMasVendidos(){
    
        $stmt = Conexion::conectar()->prepare('call prc_ListarProductosMasVendidos()');
    
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlProductosPocoStock(){
    
        $stmt = Conexion::conectar()->prepare('call prc_ListarProductosPocoStock');
    
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlVentasPorCategoria(){
    
        $stmt = Conexion::conectar()->prepare('call prc_top_ventas_categorias');
    
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}