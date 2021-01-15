<?php 
require_once "../modelos/listacompras.php";
$compras = new Compras();
	switch ($_GET["op"]) {

		case 'listar':
			$rspta=$compras->ListaCompras($_POST["id"]);
			$data=Array();
			while ($reg=$rspta->fetch_object()){
				$data[]=array(
					"id" 	  =>$reg->com_id,
					"cliente" =>$reg->com_cliente,
					"producto"=>$reg->com_producto,
					"precio"  =>$reg->com_precio,
					"cantidad"=>$reg->com_cantidad,
					"imagen"  =>$reg->com_imagen,
					"tamano"  =>$reg->com_tamano,
					"total"  =>$reg->com_total,
				);
			}
			echo json_encode($data);
		break;

		case 'montototal':
			$rspta=$compras->MontoTotal($_POST["id"]);
			$abc   = $rspta->fetch_array()[0];
			echo json_encode($abc);
		break;

		case 'productototal':
			$rspta=$compras->ProductoTotal($_POST["id"]);
			$abc   = $rspta->fetch_array()[0];
			echo json_encode($abc);
		break;

		case 'aumentarproducto':
			$id 	    = $_POST["id"];
			$cantidad 	= $_POST["cantidad"];
			$precio     = $_POST["precio"];
	
			$cantidad1  = $cantidad+1;
			$montototal = $cantidad1*$precio;

			$rspta=$compras->AumentarProducto($id,$cantidad1,$montototal);
			if ($rspta) {
				echo "Cambio+";
			}else{
				echo "No cambio";
			}
		break;

		case 'disminuirproducto':
			$id 	    = $_POST["id"];
			$cantidad 	= $_POST["cantidad"];
			$precio     = $_POST["precio"];
	
			$cantidad1  = $cantidad-1;

			if ($cantidad1==0) {
				echo "cantidad0";
			}else{
				
				$montototal = $cantidad1*$precio;
				$rspta=$compras->AumentarProducto($id,$cantidad1,$montototal);
				if ($rspta) {
					echo "Cambio-";
				}else{
					echo "No cambio";
				}
			}

		break;

		case 'insertarcompras':

			$producto=$_POST["producto"];
			$precio	 =$_POST["precio"];
			$tamano	 =$_POST["tamano"];
			$cantidad=$_POST["cantidad"];
			$imagen	 =$_POST["imagen"];
			$cliente =$_POST["cliente"];

		
			if ($producto=="" || $precio=="" || $tamano=="" || $cantidad=="" || !is_numeric($cantidad) || $cantidad<=0|| $imagen=="" || $cliente=="" || $tamano == "0" || strlen($cantidad)>=3) {
				echo "vacio";
			}else{

				$rspta1=$compras->NoRepetirProducto($producto,$cliente,$tamano);
				
				$data=Array();
						while ($reg=$rspta1->fetch_object()){
						$data[]=array(
						"cliente" =>$reg->com_cliente,
						);
					}
				//echo json_encode($data);
				
				if ($data == []) {	
					$monto = $precio*$cantidad;
					$rspta=$compras->InsertarCompras($producto,$precio,$tamano,$cantidad,$imagen,$cliente,$monto);
					if ($rspta){
						echo "guardado";
					}else{
						echo "error en la consulta";
						//echo "$rspta";
					}
				}else{
					echo "producto_repetido";
				}
			}
		break;

		case 'eliminar':

			$id = $_POST["id"];
			$rspta = $compras->EliminarProducto($id);
			//echo json_encode($rspta);
			if (!$rspta) {
				echo "No lo eliminaste";
			}else{
				echo "Si lo eliminaste";
			}	
		break;
	}


	

?>