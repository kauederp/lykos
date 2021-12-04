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
        As ONGs (Organizações não governamentais) são associações que realizam
ações solidárias para públicos específicos, sem fins lucrativos, apenas com doações
e voluntários, tornando-se uma organização de interesse público, mas não estatal.
        </p>
        <p>
        Essas organizações estão enfrentando diversas dificuldades conforme se
9
estabelecem na sociedade, e principalmente as associações voltadas ao meio
animal, que contam com menos apoio social pela cultura da população. Além de não
receber ajuda do governo e das empresas, que criticam o papel das associações na
sociedade (normalmente pelo sistema capitalista), elas sofrem também com a falta
de uma administração financeira digna, escassez de recursos e falta de estrutura.
        </p>
        <p>
        Com todas essas dificuldades, não se consegue ajudar todos os animais
abandonados e em fragilidade. Essa situação piorou durante a pandemia do vírus
COVID19, com o aumento de 70% no abandono de animais domésticos. O motivo
principal para a circunstância ter se agravado tanto é a adoção por impulso, as
pessoas ficaram vulneráveis com a nova rotina, logo, adotaram animais de
estimação para cobrir esse buraco emocional, sem pensar nos cuidados e
responsabilidades que teriam ao conviver com alguém novo em seu lar.
        </p>
        <p>
        Em 2019, o Instituto Pet Brasil fez um levantamento de quantas organizações
não governamentais, voltadas à causa animal, trabalhavam no país, foram
entrevistadas e regulamentadas 370, sendo 18% na região sul.
        </p>
        <p class="text-light fw-bolder">
        “As ONGs e protetores forneceram informações diversas sobre a sua
capacidade de acolhimento e o acolhimento real do momento. Com base
nesses dados, o IPB classificou as entidades e estimou sua capacidade
máxima de acolhimento. As de pequeno porte conseguem abrigar até cem
animais, as de médio porte, de 101 a 500, e as de grande porte abrigam
mais de 501 animais. (INSTITUIÇÃO PET BRASIL, “País tem 3,9 milhões
de animais em condição de vulnerabilidade”, 2019).
        </p>
        <p>
        Por seguinte, pode-se notar que a capacidade das organizações já foi
ultrapassada a tempos, com recursos escassos e administração descoordenada, e
mesmo assim, lutam por uma vida melhor para os animais.
        </p>
        <p>
        Para auxiliar essa estrutura de ajuda aos animais a divulgação de informação,
a situação real do sistema e de projetos como: Apadrinhamento de animais, doação
de matéria, adoção responsável e reeducação da população para convivência e
ajuda aos animais precisam se propagar junto com a tecnologia da comunicação,
que se usa hoje em dia.
        </p>
    </div>
   
    <script src="../../../script.js"></script>

</body>

</html>