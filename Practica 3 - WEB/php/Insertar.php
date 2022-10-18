<?php
	$xml = simplexml_load_file('../xml/Images.xml');
	if (!$xml) die("Error: Fallo al entrar en la carpeta xml");
	$assessmentItem = $xml->addChild('assessmentItem');
	$assessmentItem -> addAttribute('name', $_REQUEST['nomIMG']);
	$assessmentItem -> addAttribute('description', $_REQUEST['descIMG']);
	$itemBody = $assessmentItem->addChild('itemBody'); 
	$imagen = $_FILES['Imagen']['tmp_name'];
	$itemBody->addChild('imagen',base64_encode(file_get_contents($imagen)));
	$xml->asXML();
	$xml->asXML('../xml/Images.xml');
	echo "Imagen añadida correctamente";
	echo"<br><a href='../html/index.html'>Volver a la aplicación</a>";
?>