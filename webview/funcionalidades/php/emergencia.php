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
            <a class="row justify-content-center text-center text-decoration-none text-light fw-bold" href="info.php">Informações</a>
          </li>
          <li class="m-0 row p-3">
            <a class="row justify-content-center text-center text-decoration-none text-light fw-bold" href="./contatos.php">Contatos</a>
          </li>
          <li class="m-0 row p-3"><a class="row justify-content-center text-center text-decoration-none text-light fw-bold" href="./emergencia.php">Emergências</a>
          </li>
          <li class="m-0 row p-3">
            <a href="./cuidados.php" class="row justify-content-center text-center text-decoration-none text-light fw-bold">Cuidados</a>
          </li>
          <li class="m-0 row p-3">
            <a href="assine.php" class="row justify-content-center text-center text-decoration-none text-light fw-bold">Assine Aqui!</a>
          </li>
          <li id="menu-config" class="m-0 border-0 row p-3">
            <a href="config.php" class="row justify-content-center text-center text-decoration-none text-light fw-bold">Configurações</a>
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
      <a href="./engasgamento.php">
        <p class="emp">Engasgamento</p>
      </a>
    </div>
    <!-- limite -->
    <div class="bars-column">
      <a href="./queimadura.php">
        <p class="emp">Queimadura</p>
      </a>
    </div>
    <!-- limite -->
    <div class="bars-column">
      <a href="./envenenamento.php">
        <p class="emp">Envenamento</p>
      </a>
    </div>
    <!-- limite -->
    <div class="bars-column">
      <a href="./intoxicacao.php">
        <p class="emp">Intoxição</p>
      </a>
    </div>
    <!-- limite -->
    <div class="bars-column">
      <a href="./fratura.php">
        <p class="emp">Fratura</p>
      </a>
    </div>
    <!-- limite -->
    <div class="bars-column">
      <a href="./corte.php">
        <p class="emp">Cortes</p>
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