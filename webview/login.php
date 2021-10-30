<?php
	$User=new User();


	if(isset($_POST['login'])){
		$password = hash("sha256", $_POST['password']);

		$user = $User->login($_POST['name'], $password);

		$_SESSION['name'] = $user['name'];
		header("location: ".$url."?p=home");
	}


?>
<script type="text/javascript">
    document.getElementsByTagName("body")[0].style.height = "100vh";
</script>
<div class="d-flex justify-content-center">
	<img class="col-9" src="./modelo/logo.png">
</div>
<form class="fs-1 d-flex flex-column align-items-center" action="?p=login" method="post">
	<input class="col-8 bg-transparent text-center text-light border-bottom border-light" placeholder="Name" type="text" name="name">
	<input class="col-8 bg-transparent text-center text-light border-bottom border-light" placeholder="Password" type="password" name="password">
	<br>
	<div class="row col-11">
		<input class="btn fs-1" type="submit" value="LOGIN" name="login">
	</div>
	<p class="text-warning h5">É uma empresa ou ONG ? faça seu registro / login <a href="<?php echo $url.'?p=registerEO'; ?>">aqui</a></p>
</form>
