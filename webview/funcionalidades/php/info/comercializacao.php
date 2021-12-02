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
        <p>A relação entre humanos e animais acontece desde a pré-história. Essa
aproximação fez com que os animais deixassem de ser objetos utilizados pelo
homem, para serem membros da família, tornando-os mais dependentes e mais
integrados aos costumes e sistemas dos seres humanos.</p>
<p>Neste cenário, com a evolução do homem capitalista criou-se um mercado de
comércio animal, gerando muito lucro aos criadores pela alta demanda mercante de
filhotes de raça.</p>
<p class="text-light fw-bolder">“O mercado brasileiro de produtos para animais de estimação continua
mostrando seu fôlego, mesmo frente à crise financeira do país nos últimos
anos. Em 2018, o setor movimentou mais de R $20 bilhões, 9,8% a mais
que em 2017. Com isso, o Brasil se tornou o segundo maior mercado global
de produtos pet, com 6,4% de participação, ultrapassando o Reino Unido
(6,1%) pela primeira vez. Em primeiro lugar estão os Estados Unidos, com
50%. Segundo relatório da Euro monitor, a mudança no estilo de vida da
sociedade tem impacto direto nestes resultados. Com o aumento no número
de lares com uma só pessoa, taxas de natalidade em queda e famílias
tendo filhos cada vez mais tarde, os pets se tornaram uma opção de
companhia. “O tratamento do animal como membro da família impulsiona o
crescimento do mercado em volume e, de forma mais acelerada, em
faturamento à medida que os consumidores elegem produtos Premium e
investem mais na saúde e bem-estar do animal”, explica Caroline Kurzweil,
analista da Euro monitor.” (A GAZETA DO POVO, 2019).</p>
<p>Com a rápida crescente deste mercado, os criadouros foram sendo
produzidos sem infraestrutura, sem acompanhamento médico necessário, cuidados
precários de higiene e grande procriação em massa. Além disso, estes métodos
ocasionaram um dos maiores problemas que afligem as pequenas e grandes
cidades, o abandono.</p>
<p>Milhões de animais são abandonados a cada ano, e com a preferência por
raças e a adoção impulsiva, este número só tende a aumentar. Este desfecho leva a
outra trágica finalidade a vida dos animais: o corredor da morte. As instituições
responsáveis por recolher animais de rua, não tem muitos recursos para manter
esse animal por muito tempo e como eles não são adotados facilmente, são
destinados a eutanásia.</p>
<p>Não é proibido comprar animais, mas é responsabilidade do cidadão saber a
que está contribuindo, certificar-se que está comprando de criadores confiáveis que
dão todo o auxílio possível aos animais. O preferível nessas situações é adotar, pois
há muitos animais de rua que precisam de um lar e que tem muito amor e carinho
para oferecer aos seus tutores.</p>
    </div>
   
    <script src="../../../script.js"></script>

</body>

</html>