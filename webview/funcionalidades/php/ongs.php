<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>
    <header id="cab">
      <img src="../IMAGENS PROJETO/iconpequeno.png" alt="patapng">
      <h1>⠀⠀ONG'S</h1>
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
    <br><br><br>
  <section id="ongs">
    <!-- limite -->
    <div>
      <div class="estrutura">
        <img class="iconl" src="../IMAGENS PROJETO/sitio4patas.png" alt="sitio 4 patas">
        <p>Os resgates e cuidados diários dos 230 cães do Sítio são realizados 100% com doações. Conheça mais sobre a ONG nos links abaixo.</p>
      </div>
      <div class="redes">
        <a href="#" target="_blank">
          <img src="../IMAGENS PROJETO/instarede.png" alt="">
        </a>
        <a href="#" target="_blank">
          <img src="../IMAGENS PROJETO/localizacao.png" alt="">
        </a>
        <a href="#" target="_blank">
          <img src="../IMAGENS PROJETO/site.png" alt="">
        </a>
      </div>
    </div>
    <!-- limite -->
    <div>
      <div class="estrutura">
        <img class="iconl" src="../IMAGENS PROJETO/apata.png" alt="apata">
        <p>A Apata - Associação Protetora dos Anmais de Taquara é uma entidade de trabalho 100% voluntário, atuando
          somente no município de Taquara/RS, focada na educação para a guarda responsável e na castração para prevenir
          a superpopulação de animais. </p>
      </div>
      <div class="redes">
        <a href="#" target="_blank">
          <img src="../IMAGENS PROJETO/instarede.png" alt="">
        </a>
        <a href="#" target="_blank">
          <img src="../IMAGENS PROJETO/localizacao.png" alt="">
        </a>
        <a href="#" target="_blank">
          <img src="../IMAGENS PROJETO/site.png" alt="">
        </a>
      </div>
    </div>
  </section>
  <script src="../../script.js"></script>

</body>
</html>