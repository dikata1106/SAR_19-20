<link rel=StyleSheet href="../css/style.css" type="text/css">
<?php 
    $xml = simplexml_load_file("../xml/Images.xml");
    foreach ($xml->children() as $assessmentItem){
		$atributos = $assessmentItem->attributes();
		$item = $assessmentItem->itemBody;
		$imagen = $item->imagen;
        echo '<table border="1"><tr><td><img width="150" height="150" src="data:image/*;base64, '.$imagen.'"></td></tr><tr><td>Titulo: '.$atributos['name'].'</td></tr><tr><td>Descripción: '.$atributos['description'].'</td></tr></table><br>';
    }
?>
