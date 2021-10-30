var btnMenu = document.getElementById("btn-menu-home");

var menu = document.getElementById("list-home");
btnMenu.onclick = function (){
	if(menu.style.display == "block")
		menu.style.display = "none";
	else
		menu.style.display = "block";
}


var dicas = JSON.parse(dicasJSON) 






var divDicas = document.getElementById("dicas");
var divContent = document.getElementById("content-dicas");
var imgDicas = document.getElementById("img-dicas");
imgDicas.setAttribute('src', dicas[0]["img"]);
var titleDicas = document.getElementById("title-dicas");
var pDicas = document.getElementById("p-dicas");
var i=0

divContent.style.position = "absolute";
divContent.style.top = "25vh";
divContent.style.width ="calc(8.33%*10)";
divContent.style.left ="calc(8.33%*1)";
divContent.style.color = "#fff";


setInterval(function (){
	if(i<dicas.length){
		imgDicas.setAttribute('src', dicas[i]["img"]);
		titleDicas.innerText = dicas[i]["title"];;
		pDicas.innerText = dicas[i]["text"];
		i++;
	}else{
		i=0;
	}
},3000);
