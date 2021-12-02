<?php 
	$User = new User();
	unset($_SESSION['name']);
	if(isset($_POST['register'])){
			$password=hash("sha256",$_POST['password']);
			$User->save($_POST['name'], $_POST['email'], $password);
			
			header("location: ".$url."?p=entrar");
	}

?>

<script type="text/javascript">
    document.getElementsByTagName("body")[0].style.height = "100vh";
</script>
<div id="div-person-1" class="d-flex flex-column align-items-center">
			<div id="borda-icon" class="row m-0 mt-5 col-12 justify-content-center">
				<div class="bg-light">
					<img id="icon-registro"  src="funcionalidades/IMAGENS PROJETO/icon-plus.png">
				</div>
			</div>
		</div>
</div>


<form method="POST" action="" class="fs-1 d-flex flex-column align-items-center">
	<input pattern="[a-zA-ZáóêâõãíÍÁÓÊÂÕ]+$" class="ph-light col-8 bg-transparent my-3 text-center text-light border-0 border-bottom border-light" placeholder="Nome" id="input-name-register" type="text" name="name">
	<input pattern="[a-zA-Z0-9@.]+$" class="ph-light col-8 bg-transparent my-3 text-center text-light border-0 border-bottom border-light" placeholder="Email" id="input-email-register" type="email" name="email">
	<input pattern="[a-zA-Z0-9,.~^\]/~´[=-¨&*(#@!)]+$" class="ph-light col-8 bg-transparent my-3 text-center text-light border-0 border-bottom border-light" placeholder="Password" id="input-password-register" type="password" name="password">
	<br>
	<div class="row col-8  rounded-pill bg-black">
		<input class="btn fs-1 text-light" type="submit" name="register" value="CADASTRAR">
	</div>
</form>
