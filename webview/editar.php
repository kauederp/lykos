<?php 
	$User = new User();
	if(isset($_POST['editar'])){
			$password=hash("sha256",$_POST['password']);
			$User->update($_POST['name'], $_POST['email'], $_POST['oldEmail'], $password);
			
			header("Location: ".$url."?p=entrar");
	}
	if(isset($_POST['excluir'])){
		
		$password=hash("sha256",$_POST['password']);
		echo $password;
		$User->excluir($_POST['name'], $password);
		
		header('Location: '.$url.'?p=inicio');
	
		echo "ok";
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
	<input pattern="[a-zA-ZáóêâõãíÍÁÓÊÂÕ]+$" class="ph-light col-8 bg-transparent my-3 text-center text-light border-0 border-bottom border-light" placeholder="Nome" id="input-name-register" type="text" name="name" value="<?php echo $_GET['name'];?>">
	<input pattern="[a-zA-Z0-9@.]+$" class="ph-light col-8 bg-transparent my-3 text-center text-light border-0 border-bottom border-light" placeholder="Email" id="input-email-register" type="email" name="email">
	<input pattern="[a-zA-Z0-9@.]+$" class="ph-light col-8 bg-transparent my-3 text-center text-light border-0 border-bottom border-light" placeholder="Old email" id="input-email-register" type="email" name="oldEmail">
	<input pattern="[a-zA-Z0-9,.~^\]/~´[=-¨&*(#@!)]+$" class="ph-light col-8 bg-transparent my-3 text-center text-light border-0 border-bottom border-light" placeholder="Password" id="input-password-register" type="password" name="password">
	<input pattern="[a-zA-Z0-9,.~^\]/~´[=-¨&*(#@!)]+$" class="ph-light col-8 bg-transparent my-3 text-center text-light border-0 border-bottom border-light" placeholder="Repeat password" id="input-oldPassword-register" type="password" name="repeatPassword">
	<br>
	<div class="row col-8  rounded-pill bg-black">
		<input class="btn fs-1 text-light" type="submit" name="editar" value="EDITAR">
	</div>
	<div class="row col-8  rounded-pill bg-danger mt-4">
		<input class="btn fs-1 text-light" type="submit" name="excluir" value="EXCLUIR">
	</div>
</form>
