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
        <p>
        A muito tempo os bichinhos são utilizados como segurança aos humanos
mostrando as consequências para os cientistas mudarem seus produtos, assim
destruindo a fauna mundial para meios de se auto satisfazer ignorando a dor e a
vida dos animais, isso se dá ao especismo, que fala sobre o ser humano ser
soberbo se vendo acima dos animais, levando-os a explorá-los para seu próprio
bem. Existem testes como o de irritação ocular que consiste em manter o animal
imóvel com os olhos abertos, sendo assim possível pingar substâncias que podem
causar dor, inchaço entre outras coisas maléficas para com a criatura.
        </p>
        <p>
        Os animais por grande parte das pessoas são vistas como criaturas fofas e
companheiras, tendo eles como pets para acompanharem em suas jornadas de
vida, porém algo que muitas pessoas não sabem é que a maioria dos cosméticos de
beleza, produtos de higiene, são testados em animais.
        </p>
        <p>
        Ainda sim com tudo isso, os bichinhos que são adotados por pessoas
maldosas ou até mesmos as pessoas que podem ser desinformadas no quesito de
como criar um animal, e após estas pessoas não se sentirem satisfeitas com seu
pet, eles maltratam, machucam e abandonam os animais.
        </p>
        <p>
        O governo ao invés de tentar sanar este problema vem crescendo em meio a
pandemia. Foi enviado ao STF (Supremo Tribunal Federal) um pedido que visa
sacrificar os animais que forem achados com vestígios de maus tratos, o pedido foi
aprovado gerando assim uma grande mobilização de ativistas pedindo para
reconsiderar essa condenável decisão. Foram feitos abaixo-assinados com a
proposta de fazer o STF rever o pedido da Advocacia Geral da União. 
        </p>
        <p>
        Dados do
disque denúncia mostra que sofreram um aumento de 111,6% em denúncias de
maus tratos em casos de animais domésticos, e isso apenas no paraná, uma
mudança de 2.298 para um total de 4.864 casos, isso pode ser visto apenas como
algo ruim, entretanto mostra um maior nível de confiança na ferramenta de denúncia
o que faz as pessoas denunciarem quando virem.
        </p>
        <p>
        Animais que sofrem de maus tratos muitas vezes são abandonados por seus
donos tempo após o ato, e as pessoas pensam que estão garantindo o bem estar do
pet apenas por tirar eles de uma ONG ou das ruas é onde muitos se enganam o fato
de que adotando eles não estão ajudando os animais é inegável, porém é
necessário cuidados médicos caso a ONG não tenha feito e em caso de eles
estarem na rua é obrigatório para tirar carrapatos, dar vacinas. Eles precisam ficar
certo tempo longe de outros pets para se re-acostumar com humanos, pois grandes
partes dos animais abandonados sofrem de agressão física de seus antigos donos,
é necessário um espaço que seja suficientemente confortável para o animal ficar,
passeios diários em casos de casas com pequenos pátios ou de apartamento. Isso é
para o pet se sentir bem com a vida e não viver triste e deprimido.
        </p>
        <p>
        O convívio com crianças também pode ser algo perigoso para eles, pois elas
não têm noção de como agir com os animais por falta de conhecimento de mundo e
experiência, em caso de adoção de filhotes ou animais de rua é sempre bom cuidar
muito para eles não se machucarem um ao outro em algum tipo de brincadeira.
Para isso foi pensado em uma parte do Lýkos com números e ajuda caso
queiram denunciar e ajudar a diminuir os casos de violência animal.
        </p>
    </div>
   
    <script src="../../../script.js"></script>

</body>

</html>