function Mostrar(){
	if(XMLHttpRequest)
        xhr = new XMLHttpRequest();
    else
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    xhr.open('GET','MostrarImagenes.php',true);
    xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			document.getElementById('res').innerHTML = xhr.responseText;
		}
	}
	xhr.send('');
}