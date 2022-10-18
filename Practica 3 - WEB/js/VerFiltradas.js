function MostrarFiltradas(){
	if(XMLHttpRequest)
        xhr = new XMLHttpRequest();
    else
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
	var n = document.getElementById('Nombre');
	var nom = n.options[n.selectedIndex].value;
	var d = document.getElementById('Descripcion');
	var desc = d.options[d.selectedIndex].value;
    xhr.open('GET','MostrarImagenesFiltradas.php?nom='+ nom + '&desc=' + desc,true);
    xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			document.getElementById('res').innerHTML = xhr.responseText;
		}
	}
	xhr.send('');
}