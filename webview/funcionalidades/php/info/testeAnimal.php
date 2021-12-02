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
    <p>Grande parte dos conhecimentos produzidos, na área das ciências da saúde,
envolvem pesquisas realizadas com modelos animais. Os testes em animais vêm
sendo utilizados como segurança para que produtos sejam colocados no mercado
de consumo da população, esse fenômeno pode ser chamado de especismo, um
termo criado pelo famoso psicólogo Richard Ryder, em 1970.</p>
<p class="text-light fw-bolder">
“As revoluções dos anos 1960 contra o racismo, sexismo e classismo quase
deixaram de lado os animais. Isso me preocupou. A ética e a política da
época simplesmente negligenciam os não-humanos por completo. Todos
pareciam estar preocupados em reduzir os preconceitos contra os humanos.
Eles não tinham ouvido falar de Darwin? Eu odiava racismo, sexismo e
classismo também, mas por que parar por aí? Como cientista de hospital,
acreditava que centenas de outras espécies de animais sofrem tanto medo,
dor e angústia quanto eu. Algo precisava ser feito a respeito. Precisávamos
traçar um paralelo entre a situação das outras espécies e a nossa. Um dia
em 1970, deitado em meu banho na velha Sunninghill Manor, perto de
Oxford, de repente me ocorreu: ESPECISMO!“(Sociedade crítica, edição 2,
2010).
</p>
<p>Os principais produtos testados na indústria são cosméticos de beleza, de
higiene, remédios, pomadas, vacinas, produtos de limpeza e/ou qualquer substância
que tenha uma fórmula química. Esses testes são feitos para estudo das reações
prejudiciais que essas substâncias podem causar ao organismo, existem diversos
testes que podem ser feitos, como:</p>
<ul>
    <li><p>Teste de irritação da pele: Os animais têm parte do pelo raspado e a
pele é esfolada para que apliquem o produto, o objetivo é concluir se o
produto pode causar danos à pele. Este tipo de teste pode ter como
consequência vermelhidão, coceira, irritação na pele, inflamações e
queimaduras.</p></li>

    <li><p>Teste de fototoxicidade: Este teste segue o mesmo processo do da
irritação, mas desta vez a pele do animal é exposta a raios ultravioleta. O
objetivo é concluir se o produto pode causar danos à pele em contato com o
sol. Este teste pode ter como consequência vermelhidão, descamação da
pele e queimaduras.</p></li>
<li><p>Teste de toxicidade ou Dose letal 50%: Os animais, geralmente
macacos por terem uma anato fisiologia semelhante ao ser humano, são
forçados a ingerir o produto por meio de um tubo que é inserido na boca e vai
diretamente até o estômago. O objetivo é descobrir a dose máxima que pode
se suportar do produto no organismo, logo, eles fazem os animais ingerirem o
produto até a morte, mas até chegar a este ponto o teste pode causar dor,
convulsões, diarréias, sangramentos e lesões internas. O nome DL50 (Dose
Letal 50%) é utilizado porque metade dos animais morrem, e a outra metade
que sobrevive é sacrificada.</p></li>
<li><p>Testes de Toxidade Alcoólica e Tabaco: Os animais são obrigados a
inalar a fumaça e/ou ingerir bebidas alcoólicas. O objetivo é descobrir as
consequências desses produtos no organismo, então posteriormente ao óbito
do animal ocorre a dissecação para estudo dos efeitos destas substâncias no
organismo.</p></li>
<li><p>Testes comportamentais: os animais recebem diversos tipos de
privações como água, comida, amor materno, sono, agressões, drogas, entre
outros. O objetivo é o estudo de como o organismo reage com ou sem esses
estímulos, podendo ser com eletrodos dentro do cérebro. As consequências
são diversas.</p></li>
<li><p>Testes armamentistas: os animais são submetidos à radiação de
armas químicas, colisões, inalação de fumaça, gases tóxicos e explosões.
Estes são alguns exemplos de testes, mas existe um universo expansivo
deste tipo de crueldade. Muitos destes exames são ineficazes, pois as reações do
organismo animal são diferentes das do organismo humano, um grande exemplo
disso é a ineficácia da penicilina nos coelhos. Neste meio, a questão ética tem
grande peso, afinal, qual é o direito do ser humano de utilizar os animais como
objetos?</p></li>
</ul>
<p>Os argumentos utilizados pelos especistas tem como base a superioridade do
ser humano, afirmando que humanos possuem maior inteligência e capacidade
cognitiva, maior capacidade emocional, têm mais relações de solidariedade e se
consideram mais fortes do que os animais, por isso teriam o direito de explorá-los.</p>
<p>
Por outro lado, existem os anti especistas que argumentam que a hipótese de
inteligência superior justificaria a exploração da maioria da humanidade, que teria
que subordinar seus interesses a uma minoria de pessoas com capacidades
maiores. Isso também validaria a exploração de crianças e pessoas com
necessidades especiais, por não terem tanta capacidade cognitiva.
</p>
<p>Esse movimento apresenta pesquisas que comprovam cientificamente que os
animais são seres complexos e conscientes, que podem sentir sofrimento, raiva,
amor ou prazer, diferente dos fungos ou plantas que não possuem essa capacidade.
Em oposição ao argumento de solidariedade, os anti especistas apresentam que
não explicaria as atitudes preconceituosas, como: racismo, homofobia e machismo
que os seres humanos apresentam, a solidariedade está cobrindo a humanidade
toda ou só parte dela?</p>
<p>
O argumento da força é visto como desconexo, pois poderia justificar a
exploração entre os próprios seres humanos com base na força física de cada um,
onde o mais forte sempre comandaria tudo.
</p>
<p>Mudar a mentalidade de uma humanidade de bilhões de anos é realmente
difícil, o pensamento especista está enraizado em nossa evolução como seres vivos,
mas já existem movimentos e métodos criados com a tecnologia atual para que não
necessite dos meios do sofrimento animal para continuar a jornada evolutiva. Um
dos métodos desenvolvidos para testes de produtos são os sistemas biológicos in
vitro, que possibilitaram a abolição do uso dos animais nestes testes, possibilitando
assim a observação de toxicidade nas células, sem nenhum sofrimento.</p>
    </div>
   
    <script src="../../../script.js"></script>

</body>

</html>