function submitForm(){

xhr = new XMLHttpRequest;
x=document.getElementById('search-text').value;

	URL="fichier_cinema_safwene.php?x="+x;

xhr.open("GET",URL, true);

xhr.send(null);

xhr.onreadystatechange=result;

function result(){

document.getElementById("wrap_safwene").innerHTML=xhr.responseText;
}
}

function dynamic_Select(ch){
xhr = new XMLHttpRequest;
x=document.getElementById('dropdown').value;

	URL="fichier_cinema_safwene.php?ch="+ch;

xhr.open("GET",URL, true);

xhr.send(null);

xhr.onreadystatechange=result;

function result(){

document.getElementById("wrap_safwene").innerHTML=xhr.responseText;
}	
}