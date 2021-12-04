<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  </head>
</head>
<body>
    <header id="cab">
      <img src="../../IMAGENS PROJETO/iconpequeno.png" alt="patapng">
      <h1 class="text-center">⠀⠀EMERGÊNCIAS</h1>
      <button id="menuBtn"><i class="bi bi-list"></i></button>
      <nav id="menu" class="bg-transparent rounded-5">
      <ul class="text-light container-fluid p-0 m-0">
          <li id="menu-info" class="m-0 row p-3">
            <a class="row justify-content-center text-center text-decoration-none text-light fw-bold" href="../info.php?name=<?php echo $_GET['name'];?>">Informações</a>
          </li>
          <li class="m-0 row p-3">
            <a class="row justify-content-center text-center text-decoration-none text-light fw-bold" href="../contatos.php?name=<?php echo $_GET['name'];?>">Contatos</a>
          </li>
          <li class="m-0 row p-3"><a class="row justify-content-center text-center text-decoration-none text-light fw-bold" href="../emergencia.php?name=<?php echo $_GET['name'];?>">Emergências</a>
          </li>
          <li class="m-0 row p-3">
            <a href="../cuidados.php?name=<?php echo $_GET['name'];?>" class="row justify-content-center text-center text-decoration-none text-light fw-bold">Cuidados</a>
          </li>
          <li class="m-0 row p-3">
            <a href="../assine.php?name=<?php echo $_GET['name'];?>" class="row justify-content-center text-center text-decoration-none text-light fw-bold">Assine Aqui!</a>
          </li>
          <li id="menu-config" class="m-0 border-0 row p-3">
            <a href="../config.php?name=<?php echo $_GET['name'];?>" class="row justify-content-center text-center text-decoration-none text-light fw-bold">Configurações</a>
          </li>
        </ul>
      </nav>
    </header>
    <br><br><br>
  <section id="cuidados" class="p-4">
    <!-- limite -->
    <div class="bars-column-kaue m-2 p-4 text-light">
    <p>Existem alguns alimentos e remédios que podem ser muito tóxicos para os animais de estimação, e no caso da ingestão de algum deles, o primeiro passo é identificar o que causou a intoxicação. 
        
        Dependendo do que o animal ingeriu, é provável que a reação seja pontual, como uma diarreia ou vômito isolado. Mas caso esses sintomas persistam por mais de um dia, o ideal é que se procure ajuda veterinária. O pet intoxicado também pode apresentar salivação excessiva, sangue na urina e pupilas dilatadas, o que indica que a situação é mais grave.
        
        Evite receitas caseiras para fazer seu pet vomitar ou cuspir o alimento. Muitos tutores acreditam que oferecer sal, óleo ou mel para o animal pode curar a intoxicação, mas existe o risco de agravar a situação. O ideal é sempre procurar ajuda veterinária.
      </p>
    </div>
  </section>
  <script src="../../../script.js"></script>
</body>

</html>