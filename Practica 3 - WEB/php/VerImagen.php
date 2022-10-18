<!DOCTYPE html>
<html>
<head>
	<script src="../js/VerTodasAjax.js"></script>
	<script src="../js/VerFiltradas.js"></script>
	<link rel=StyleSheet href="../css/style.css" type="text/css">
</head>
<body>
	<section class="main" id="s1">
		<hr/>
		<img id="logo" src="../Img/Logo.png" />
		<div>
			<h2 id="FreeImages" >Free Images - busca y comparte imagenes en linea</h2>
			<p id="descripcion" >En esta pagina puedes compartir tus fotos de manera rapida
			y sencilla. Asi mismo puedes encontrar miles de fotos mediante 
			la busqueda por descripción. No te olvides dejar la mejor descripcion 
			en tus imagenes para que sea mas accesible para todos.
			¡Disfruta a tope con Free Images!</p>      
		</div>
		<hr/>
	</section>
	<section id="menu">
		<ul id="ULmenu">
			<li> <a href="../html/index.html">Inicio</a> </li>
			<li> <a href="../php/InsertarImagen.php">Insertar imagen</a> </li>
			<li> <a href="../php/VerImagen.php">Ver imagenes</a> </li>
		</ul>
		<br/><br/><br/>
	</section>
	<hr/>
	<h4>Para filtrar imagenes, seleccione un nombre y/o descripcion.</h4>
    <div><br>
        <form name="fquestion" id="fquestion"  enctype="multipart/form-data">
            <p>Seleccione un nombre: </p>
			<select id="Nombre">
				<option value="">
				<?php 
					$cont = 1;
					$xml = simplexml_load_file("../xml/Images.xml");
					foreach ($xml->children() as $assessmentItem){
						$atributos = $assessmentItem->attributes();
						echo '<option id="' .$cont.'" value="'.$atributos['name'].'">'.$atributos['name'].'</option>';
						$cont = $cont + 1;
					}
				?>
			</select>
            <p>Seleccione una descripción: </p>
			<select id="Descripcion">
				<option value="">
				<?php 
					$cont = 1;
					$xml = simplexml_load_file("../xml/Images.xml");
					foreach ($xml->children() as $assessmentItem){
						$atributos = $assessmentItem->attributes();
						echo '<option id="' .$cont.'" value="'.$atributos['description'].'">'.$atributos['description'].'</option>';
						$cont = $cont + 1;
					}
				?>
			</select>
			
			<br><br>
			
			<input type="button" id="VerTodo" value="Ver todas las imagenes" onClick="Mostrar()"><input type="button" id="Filtrar" value="Ver imagenes filtradas" onClick="MostrarFiltradas()">
			<br><br>
            
			<div id="res">
            </div>
        </form>        
    </div> 
</body>
</html>