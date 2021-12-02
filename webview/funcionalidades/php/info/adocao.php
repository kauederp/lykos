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
      <h1>⠀⠀INFORMAÇÕES</h1>
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
    <div class="bars-column-kaue m-4 p-4 text-light">
    <p>Com a pandemia de Covid-19 a adoção de animais teve um crescimento
significativo, fator positivo, pois os animais de rua ganharam novos lares e cuidados.
Por outro lado, o nível de abandono também aumentou em larga escala sendo um
inibidor do lado bom. Precisamos ter em vista que a adoção de um animal deve ser
bem pensada e uma ação responsável, para que não haja um problema em relação
a comodidade e afeto com o pet.</p>

<p>Em casos de adoção inconsciente, pessoas ignoram o fato que animais de
estimação necessitam mais do que um abrigo, água e comida. Eles necessitam de
carinho, um local espaçoso, ou passeios diários, dependendo do estilo do pet,
tratamento veterinário, dentre outras obrigações que um cuidador deve ter em mente
para não deixar o animal triste e deprimido.</p>

<p>Existem diversas formas de adotar um amiguinho, como apoio de ONGs que
visam a melhor estadia do bichinho com um dono responsável e local adequado. A
medida sanitária de distanciamento social, em meio a pandemia, foi um estopim
para o crescimento das adoções principalmente de animais como cães e gatos que
tiveram um crescimento de aproximadamente 50%, fazendo com que o amor seja
distribuído.</p>

<p>Um lado negativo é a adoção inconsciente, pessoas que pensam que ter um
animal de estimação é apenas ter onde ficar, comida e água, quando na verdade
eles necessitam de carinho, um local espaçoso, ou passeios diários, dependendo do
estilo do pet, tratamento veterinário, dentre outras obrigações que um cuidador deve
ter em mente para não deixar o animal triste e deprimido. A pandemia está sendo
algo amedrontador, pois teve um obituário significante em relação a outras doenças
e afins, porém trouxe alguns benefícios, um deles é o companheirismo de pessoas
que se deixaram ter a experiência de um amigo animal, e o crescimento do amor na
relação dos humanos e animais.</p>

<p>Para haver sempre uma boa relação entre criatura e ser humano, uma relação
“EU-TU” como diz a professora Raísa Duquia Giumelli, onde nós vemos os outros
animais como companheiros, extensão familiar e não apenas um objeto. Com esse
intuito foi feito uma aba do LÝKOS para a explicação e demonstração de o que
fazer com seus pets para que haja um amor mútuo entre os dois, assim
trazendo os animais para dentro das casas com mais segurança e dedicação.</p>
    </div>
   
    <script src="../../../script.js"></script>

</body>

</html>