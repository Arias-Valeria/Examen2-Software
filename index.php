<?php
	$productos = array();

	$productos[] = array(
		"nombre" => "Leche lala",
		"precio" => "$56.76",
		"imagen" => "img/lala.jpg",
		"categoria" =>"Lacteos",
		"estatus" => 1
	);

	$productos[] = array(
		"nombre" => "Café Nescafé",
		"precio" => "$76.76",
		"imagen" => "img/nescafe.jpg",
		"categoria" =>"Insumos",
		"estatus" => 1
	);

	$productos[] = array(
		"nombre" => "Hershey's Kisses Party Bag",
		"precio" => "$84.60",
		"imagen" => "img/kisses.jpg",
		"categoria" =>"Dulceria",
		"estatus" => 0
	);

	$productos[] = array(
		"nombre" => "Eggo Waffles",
		"precio" => "$104.90",
		"imagen" => "img/waffles.jpg",
		"categoria" =>"Congelados",
		"estatus" => 1
	);

	$productos[] = array(
		"nombre" => "Kellogs Rice Krispies Treats",
		"precio" => "$36.90",
		"imagen" => "img/rice.jpg",
		"categoria" =>"Galletas",
		"estatus" => 0
	);

	$productos[] = array(
		"nombre" => "Oreo Nabisco",
		"precio" => "$31.00",
		"imagen" => "img/oreo.jpg",
		"categoria" =>"Galletas",
		"estatus" => 1
	);

	$productos[] = array(
		"nombre" => "Nesquik Nestlé",
		"precio" => "$33.55",
		"imagen" => "img/nesquik.jpg",
		"categoria" =>"Insumos",
		"estatus" => 1
	);

	$productos[] = array(
		"nombre" => "Carlota Miel de abeja",
		"precio" => "$50.90",
		"imagen" => "img/miel.jpg",
		"categoria" =>"Insumos",
		"estatus" => 1
	);

	$productos[] = array(
		"nombre" => "Caja Ferrero Rocher",
		"precio" => "$198.00",
		"imagen" => "img/ferrero.jpg",
		"categoria" =>"Dulceria",
		"estatus" => 0
	);

	$productos[] = array(
		"nombre" => "Kellogs Choco Krispies",
		"precio" => "$104.50",
		"imagen" => "img/chocokrispis.jpg",
		"categoria" =>"Cereales",
		"estatus" => 0
	);

	// el campo active 1 disponible 0 no disponible
	header('Content-Type: application/json');
	echo json_encode($productos);
?>