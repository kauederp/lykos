<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"><link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  </head>

<body>
  <header id="cab">
      <img src="../IMAGENS PROJETO/iconpequeno.png" alt="patapng">
      <h1 class="text-center">⠀⠀CUIDADOS</h1>
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
  <section id="emergencia" class="mt-5">
    <div id="amorpet">
      <img src="../IMAGENS PROJETO/coracao.png" alt="">
      <p>Dicas para cuidar<br>do seu<Br>companheiro!</p>
    </div>
    <!-- limite -->
    <div class="bars-column">
      <a href="./banhos.php?name=<?php echo $_GET['name'];?>">
        <p class="emp">Banhos</p>
      </a>
    </div>
    <div class="bars-column">
      <a href="./nutricao.php?name=<?php echo $_GET['name'];?>">
        <p class="emp">Nutrição</p>
      </a>
    </div>
    <div class="bars-column">
      <a href="./ajudaAnimalRua.php?name=<?php echo $_GET['name'];?>">
        <p class="emp">Ajudar animais de rua</p>
      </a>
    </div>
    <!-- limite -->
    <div id="amorpet">
      <img src="../IMAGENS PROJETO/casinha.png">
      <p>seu parceiro precisa viver uma vida feliz e tranquila com todos os auxílios possíveis</p>
    </div>
  </section>
  <script src="../../script.js"></script>
</body>
</html>