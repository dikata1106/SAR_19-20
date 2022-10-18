function Limpiar(){
	var element = document.getElementById('verImagen');
	if (element != null) element.parentNode.removeChild(element);
	document.getElementById('res').innerHTML = " ";
	document.getElementById('nomIMG').value = " ";
	document.getElementById('descIMG').value = " ";
}
	