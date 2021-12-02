<?php
    $User=new User();


    if(isset($_POST['entrar'])){
        $password = hash("sha256", $_POST['password']);

        $user = $User->login($_POST['nome'], $password);

        $_SESSION['name'] = $user['name'];
        print_r($user['name']);
        if(empty($user['name'])){
            echo "<div class='row bg-red p-2'><h3 class='text-danger'><b>Nome</b> ou <b>Senha</b> incorretos<h3></div>";
        }
        else{
            header("location: ./funcionalidades/php/home.php?name=".$user['name']."&id=".$user['id']);
        }
    }
?>



<div class="mt-5 d-flex flex-row justify-content-center">
    <div id="sombraLua" class="d-flex flex-row justify-content-center"><img class="" src="./imgs/2_transparent.png"></div>
</div>

<form class="d-flex p-5 flex-column justify-content-center" action="" method="post">
    <label class="text-light text-center" for="nome">Nome</label>
    <input class="text-light bg-transparent border-0 border-bottom " type="text" name="nome"><br>
    <label class="text-light text-center" for="senha">Senha</label>
    <input class="text-light bg-transparent border-0 border-bottom" type="password" name="password">
    <div class="d-flex flex-row justify-content-center">
        <input class="bg-black rounded-pill text-light col-9 p-3 px-5 border-0 mt-5" type="submit" value="ENTRAR" name="entrar">
    </div>
</form>