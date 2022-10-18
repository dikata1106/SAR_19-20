<link rel=StyleSheet href="../css/style.css" type="text/css">
<?php 
	if (isset($_REQUEST['nom']) && isset($_REQUEST['desc'])){
		$xml = simplexml_load_file("../xml/Images.xml");
		if ($_REQUEST['nom'] != "" && $_REQUEST['desc'] != ""){
			$exist = "no";
			foreach ($xml->children() as $assessmentItem){
				$atributos = $assessmentItem->attributes();
				if ($atributos['name'] == $_REQUEST['nom'] && $atributos['description'] == $_REQUEST['desc']){
					$exist = "yes";
					$item = $assessmentItem->itemBody;
					$imagen = $item->imagen;
					echo '<table border="1"><tr><td><img width="150" height="150" src="data:image/*;base64, '.$imagen.'"></td></tr><tr><td>Titulo: '.$atributos['name'].'</td></tr><tr><td>Descripción: '.$atributos['description'].'</td></tr></table><br>';
				}
			}if ($exist == "no")
				echo '<p>No existe ninguna imagen con ese nombre y descripción.</p>';
		}else if ($_REQUEST['nom'] != ""){
			foreach ($xml->children() as $assessmentItem){
				$atributos = $assessmentItem->attributes();
				if ($atributos['name'] == $_REQUEST['nom']){
					$item = $assessmentItem->itemBody;
					$imagen = $item->imagen;
					echo '<table border="1"><tr><td><img width="150" height="150" src="data:image/*;base64, '.$imagen.'"></td></tr><tr><td>Titulo: '.$atributos['name'].'</td></tr></table><br>';
				}
			}
		}else if ($_REQUEST['desc'] != ""){
			foreach ($xml->children() as $assessmentItem){
				$atributos = $assessmentItem->attributes();
				if ($atributos['description'] == $_REQUEST['desc']){
					$item = $assessmentItem->itemBody;
					$imagen = $item->imagen;
					echo '<table border="1"><tr><td><img width="150" height="150" src="data:image/*;base64, '.$imagen.'"></td></tr><tr><td>Descripción: '.$atributos['description'].'</td></tr></table><br>';
				}
			}
		}else
			echo '<p>Es necesario seleccionar al menos un nombre o una descripción.</p>';
	}
?>
