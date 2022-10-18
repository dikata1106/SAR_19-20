<!DOCTYPE html>
<html>
<head>
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/ShowImageInForm.js"></script>
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
    <div><br>
        <form action="Insertar.php" method="post" name="fquestion" id="fquestion"  enctype="multipart/form-data">

            <p>Introduce nombre de la imagen: </p>
            <input type="text" size="60" id="nomIMG" name="nomIMG" required>
			
            <p>Introduzca una descripción para la imagen: </p>
            <input type="text" size="60" id="descIMG" name="descIMG" required>
			
			<br><br>
            
			<div id="selector">
            
			<input name="Imagen" type="file" id="file" accept="image/*" required>
            
			</div>
			
			<br><br>
			
			<input type="submit" id="Insert" value="Insertar imagen">
			<br><br>
        </form>        
    </div>
</body>
</html>