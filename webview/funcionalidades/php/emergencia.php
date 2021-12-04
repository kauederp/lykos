<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emergências</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"><link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  </head>

<body>
  <header id="cab">
      <img src="../IMAGENS PROJETO/iconpequeno.png" alt="patapng">
      <h1 class="text-center">⠀⠀EMERGÊNCIAS</h1>
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
  <section class="mt-5" id="emergencia">
    <div id="start" class="px-4">
      <p>O que fazer em casos de emergências</p>
      <img src="../IMAGENS PROJETO/medkit.png" alt="">
    </div>
    <!-- limite -->
    <div class="bars-column mt-3">
      <a href="./emergencias/engasgamento.php?name=<?php echo $_GET['name'];?>">
        <p class="emp">Engasgamento</p>
      </a>
    </div>
    <!-- limite -->
    <div class="bars-column">
      <a href="./emergencias/queimadura.php?name=<?php echo $_GET['name'];?>">
        <p class="emp">Queimadura</p>
      </a>
    </div>
    <!-- limite -->
    <div class="bars-column">
      <a href="./emergencias/envenenamento.php?name=<?php echo $_GET['name'];?>">
        <p class="emp">Envenamento</p>
      </a>
    </div>
    <!-- limite -->
    <div class="bars-column">
      <a href="./emergencias/fratura.php?name=<?php echo $_GET['name'];?>">
        <p class="emp">Fratura</p>
      </a>
    </div>
    <!-- limite -->
    <div class="bars-column">
      <a href="./emergencias/corte.php?name=<?php echo $_GET['name'];?>">
        <p class="emp">Corte</p>
      </a>
    </div>
    <!-- limite -->
    <hr>
    <div id="telemer">
        <img src="../IMAGENS PROJETO/cell.png" alt="">
        <p>Telefones <br>de<Br> emergência</p>
    </div>
    <!-- limite -->
    <div class="bars-column">
      <a href="tel:193">
        <p class="emp">Bombeiros 193</p>
      </a>
    </div>
  </section>
  <br>
  <script src="../../dicas.js"></script>
  <script src="../../script.js"></script>
</body>

</html>