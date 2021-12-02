<?php 
	$_SESSION['name'] = $_GET['name'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"><link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  </head>
</head>
<body>
  	<header id="cab">
	    <img src="../IMAGENS PROJETO/iconpequeno.png" alt="patapng">
	    <h1>HOME</h1>
	    <button id="menuBtn"><i class="bi bi-list"></i></button>
	    <nav id="menu" class="bg-transparent rounded-5">
			<ul class="text-light container-fluid p-0 m-0">
				<li id="menu-info" class="m-0 row p-3">
					<a class="row justify-content-center text-center text-decoration-none text-light fw-bold" href="info.php?name=<?php echo $_GET['name'];?>">Informações</a>
				</li>
				<li class="m-0 row p-3">
					<a class="row justify-content-center text-center text-decoration-none text-light fw-bold" href="./contatos.php?name=<?php echo $_GET['name'];?>">Contatos</a>
				</li>
				<li class="m-0 row p-3"><a class="row justify-content-center text-center text-decoration-none text-light fw-bold" href="./emergencia.php?name=<?php echo $_GET['name'];?>">Emergências</a>
				</li>
				<li class="m-0 row p-3">
					<a href="./cuidados.php?name=<?php echo $_GET['name'];?>" class="row justify-content-center text-center text-decoration-none text-light fw-bold">Cuidados</a>
				</li>
				<li class="m-0 row p-3">
					<a href="assine.php?name=<?php echo $_GET['name'];?>" class="row justify-content-center text-center text-decoration-none text-light fw-bold">Assine Aqui!</a>
				</li>
				<li id="menu-config" class="m-0 border-0 row p-3">
					<a href="config.php?name=<?php echo $_GET['name'];?>" class="row justify-content-center text-center text-decoration-none text-light fw-bold">Configurações</a>
				</li>
			</ul>
	    </nav>
  	</header>
  	<br>
  	<br>
	
	<div class="mt-4 p-0 px-5">
		<button id="btnBack" class="btn-dica bg-transparent border-0"><i class="bi bi-caret-left-fill text-light"></i></button>
		<img id="dica-img" class="col-12" src="../../imgs/CAFE.jpg">
		<button id="btnNext" class="btn-dica bg-transparent border-0"><i class="bi bi-caret-right-fill text-light"></i></button>
	</div>
	
	<div id="divDica" class="row p-4 m-0 mt-3">
		<p id="textoDica"></p>
	</div>
	<div class="text-light row p-4 m-0 mt-3">
		<p class="texto-amostra">
			Ao decorrer da evolução da humanidade os animais foram sendo excluídos de sua liberdade e felicidade, sendo agredidos, presos e abandonados. Isso se deve ao fenômeno chamado Especismo, que é descrito como o ser humano se sentir superior às outras espécies...
		</p>
		<p class="texto-escondido">
			Ao decorrer da evolução da humanidade os animais foram sendo excluídos de sua liberdade e felicidade, sendo agredidos, presos e abandonados. Isso se deve ao fenômeno chamado Especismo, que é descrito como o ser humano se sentir superior às outras espécies. Este problema vem atingindo a natureza e ao mundo animal cada vez mais, levando a extinção de diversos organismos no planeta, bem como ao sofrimento e exploração dos mesmos. Com o intuito de melhorar a consciência do mundo animal na população, o projeto Lýkos surge com a ideia de disponibilizar informações acessíveis em uma aplicação.
		</p><button id="btnShowText">ler mais</button>
	</div>
	<script src="../../dicas.js"></script>
	<script src="../../script.js"></script>
	<script type="text/javascript">
		var textoAmostra = document.getElementsByClassName("texto-amostra")
var textoEscondido = document.getElementsByClassName("texto-escondido")
var divDicas = document.getElementById("divDica")
var textoDicas = document.getElementById("textoDica")
var dicas = JSON.parse(dicasJSON)
var dicaImg = document.getElementById("dica-img")

dicaImg.src = "../.."+dicas[0].img

divDicas.innerHTML = "<h3 class='text-light text-start'>"+dicas[0].title+"</h3>"+
	"<p class='text-light'>"+dicas[0].text+"</p>"

	btnShowText.onclick = ()=>{
	if(btnShowText.innerText == "ler mais"){
		btnShowText.innerText = "mostrar menos"
		textoAmostra[0].style.display = "none"
		textoEscondido[0].style.display = "block"
	}else {
		btnShowText.innerText = "ler mais"
		textoAmostra[0].style.display = "block"
		textoEscondido[0].style.display = "none"
	}
}
var iteradorDicas = 0
function slide(){	
	divDicas.innerHtml = ""
	textoDicas.innerText = ""
	divDicas.innerHTML = "<h3 class='text-light text-start'>"+dicas[iteradorDicas].title+"</h3>"+
	"<p class='text-light'>"+dicas[iteradorDicas].text+"</p>"
	dicaImg.src = "../.."+dicas[iteradorDicas].img

	console.log(iteradorDicas)
	
}


btnsDicas = document.querySelectorAll(".btn-dica")
btnsDicas.forEach( function(element, index) {
	element.onclick = ()=>{
		if(element.id == "btnNext"){
			if(iteradorDicas <2 )
				iteradorDicas = iteradorDicas+1
			else
				iteradorDicas = 0
		}
		else if(element.id == "btnBack"){
			if(iteradorDicas > 0)
				iteradorDicas = iteradorDicas-1
			else
				iteradorDicas = 2
		}
		
		slide()
	}
});
	</script>
</body>
</html>