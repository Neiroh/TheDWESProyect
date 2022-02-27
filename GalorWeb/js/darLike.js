
function darLike(idImg, idUser) {
  
	var xmlhttp = new XMLHttpRequest();


	console.log(this.responseText);

	xmlhttp.open("GET","app/anadeLike.php?idImg="+idImg+"&idUser="+idUser,true);
	xmlhttp.send();
}
