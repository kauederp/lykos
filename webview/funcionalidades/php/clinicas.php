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
      <h1>⠀⠀CLÍNICAS</h1>
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
  <section id="clinica">
    <!-- limite -->
    <div>
      <div class="estrutura">
        <img class="iconl" src="../IMAGENS PROJETO/transferir (1).png" alt="marildo zanini">
        <p>Telefone: <a href="tel:+5505135431616">(51) 3543-1616</a><br>Preço consulta: R$ 95,00</p>
      </div>
      <div class="redes">
        <a href="https://www.instagram.com/banhoetosamarildozanini/" target="_blank">
          <img src="../IMAGENS PROJETO/instarede.png" alt="">
        </a>
        <a href="https://goo.gl/maps/WqL9s8Mn5rsPnYDs6" target="_blank">
          <img src="../IMAGENS PROJETO/localizacao.png" alt="">
        </a>
        
      </div>
    </div>
    <!-- limite -->
    <div>
      <div class="estrutura">
        <img class="iconl" src="../IMAGENS PROJETO/bem estar.png" alt="bem estar">
        <p>Telefone: <a href="tel:+55051998280708">(51) 99828-0708</a><br>Preço consulta: R$ 100,00</p>
      </div>
      <div class="redes">
        <a href="https://www.instagram.com/clinica_bemestaranimal/" target="_blank">
          <img src="../IMAGENS PROJETO/instarede.png" alt="">
        </a>
        <a href="https://goo.gl/maps/W44BdUXsH5uXjdkK7" target="_blank">
          <img src="../IMAGENS PROJETO/localizacao.png" alt="">
        </a>
      </div>
    </div>
    <!-- limite -->
    <div>
      <div class="estrutura">
        <img class="iconl" src="../IMAGENS PROJETO/clinica de estimação.jpg" alt="clinica de estimação">
        <p>Telefone: <a href="tel:+55051986204828">(51) 98620-4828</a><br>Preço consulta: R$ 180,00</p>
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
        <img class="iconl" src="../IMAGENS PROJETO/clinivet.jpg" alt="clinivet">
        <p>Telefone: <a href="tel:+5505135414460">(51) 3541-4460</a><br>Preço consulta: R$ 90,00</p>
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
        <img class="iconl" src="../IMAGENS PROJETO/univet.png" alt="univet">
        <p>Telefone: <a href="tel:+55051982424111">(51) 98242-4111</a><br>Preço consulta: R$ 90,00</p>
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
        <img class="iconl" src="../IMAGENS PROJETO/vetemcasa.png" alt="apata">
        <p>Telefone: <a href="tel:+55051998814670">(51) 99881-4670</a><br>Preço consulta: R$ 180,00</p>
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