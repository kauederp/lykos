<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  </head>
</head>
<body>
    <header id="cab">
      <img src="../IMAGENS PROJETO/iconpequeno.png" alt="patapng">
      <h1>⠀⠀CONFIGURAÇÕES</h1>
      <button id="menuBtn"><i class="bi bi-list"></i></button>
      <nav id="menu" class="bg-transparent rounded-5">
      <ul class="text-light container-fluid p-0 m-0">
          <li id="menu-info" class="m-0 row p-3">
            <a class="row justify-content-center text-center text-decoration-none text-light fw-bold" href="informacoes.php?name=<?php echo $_GET['name'];?>">Informações</a>
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
  <br>
  <?php
    
    if(isset($_POST['enviar'])){
      $texto = $_POST['sugestao'];
    }
    if(isset($_GET['sair']) and $_GET['sair'] == 'y'){
      header('Location:  http://localhost/lykos/webview/index.php?p=inicio');
        
    }

?>
  <section id="configuracoes" class="mt-5">
    <!-- limite -->
    <div class="bars-column">
      <a href="http://localhost/lykos/webview/index.php?p=editar&name=<?php echo $_GET['name'];?>">
        <img src="../IMAGENS PROJETO/perfil.png" alt="">
        <p class="configp">Perfil</p>
      </a>
    </div>
    <!-- limite -->
    <div class="bars-column">
      <a href="?sair=y">
        <img src="../IMAGENS PROJETO/sair.png" alt="">
        <p class="configp">Sair</p>
      </a>
    </div>
    <!-- limite -->
    <div class="px-5 m-2 pt-1">
    <form action="" method="post" id="form-config" class="border border-2 rounded-4 border-white">
      <div class="row justify-content-between py-3">
        <div class="col-4" ><img class="col-12" src="../IMAGENS PROJETO/lamp.png"></div>
		<textarea id="txtarea" class="col-8" name="sugestao" id="" cols="30" rows="10"></textarea>
	  </div>
		<div class="row justify-content-center">
			<input class="btn btn-light col-5" type="submit" value="enviar" name="enviar">
		</div>
    </form>
  </section>
  <script src="../../script.js"></script>
</body>

</html>
