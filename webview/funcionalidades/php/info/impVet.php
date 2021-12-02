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
        O médico veterinário se tornou uma das profissões mais relevantes no
presente momento, a população tem dado cada vez mais importância a saúde dos
animais, e, apesar da sociedade pensar que esse profissional só afeta ao mundo
animal, ele exerce muitas profissões de saúde pública, como cuidar dos bovinos e
outros animais de criação.
        </p>
        <p>A profissão foi legalizada no Brasil em 9 de setembro de 1933, por um decreto
do governo Vargas, mas só em 1940 o diploma passou a ser obrigatório para
exercer a função. Um fato curioso, é que antes do conhecimento da medicina
veterinária como uma profissão, em 1911, a Escola São Bento, em Pernambuco, já
tinha o primeiro hospital veterinário do país.</p>

<p>A principal responsabilidade de um veterinário é orientar e explicar o cotidiano
de cada espécie animal para seus tutores, bem como ensinar adequadamente as
necessidades conforme o animal se desenvolve. Esse profissional realiza todo o tipo
de procedimento, como exames de rotina, vacinações e cirurgias.
</p>
<p>Apesar de ser uma profissão de muita importância, uma parte da população
ainda evita usufruí-la. Os motivos são variados, mas os mais comuns são: falta de
confiança nos profissionais, não dar importância a saúde animal, não ter condições
de pagar o tratamento e principalmente pela falta de informação, o que é irônico ao
se pensar que vivemos na era do conhecimento.</p>
<p>
Deste modo, a população precisa de uma plataforma confiável, que
proporcione as informações necessárias para a escolha de um profissional correto,
bem como comparativo de preços. Além de informações sobre consciência do
cuidado animal e dicas para improviso de cuidados para a parte que não tem
condições de pagar uma consulta veterinária apropriada.</p>
    </div>
   
    <script src="../../../script.js"></script>

</body>

</html>