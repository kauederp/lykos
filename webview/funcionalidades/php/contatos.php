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
<body>
    <header id="cab">
      <img src="../IMAGENS PROJETO/iconpequeno.png" alt="patapng">
      <h1>⠀⠀CONTATOS</h1>
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
  <section id="conscientizacao">
    <a href="./ongs.php?name=<?php echo $_GET['name'];?>">
      <div href="#" id="orga" class="icdi">
        <img src="../IMAGENS PROJETO/ongs.png" alt="">
        <p id="imv">Organizações não governamentais</p>
      </div>
    </a>
    <a href="./clinicas.php?name=<?php echo $_GET['name'];?>">
      <div class="icdi">
        <img src="../IMAGENS PROJETO/veticon.png" alt="">
        <p>Veterinários</p>
      </div>
    </a>
    <a class="" href="./perfisex.php?name=<?php echo $_GET['name'];?>">
      <div class="icdi">
        <img src="../IMAGENS PROJETO/redes.png" alt="">
        <p>Perfis exemplo</p>
        <br>
      </div>
    </a>
  </section>
  <script src="../../script.js"></script>
</body>

</html>