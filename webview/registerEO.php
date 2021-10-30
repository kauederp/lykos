
<?php 
	$User = new User();
	unset($_SESSION['name']);
	echo $url;	
	if(isset($_POST['register'])){
			$password=hash("sha256",$_POST['password']);
			$User->save($_POST['name'], $_POST['email'], $password);
			
			header("location: ".$url."?p=login");
	}

?>
<script type="text/javascript">
    document.getElementsByTagName("body")[0].style.height = "100vh";
</script>
<div id="div-person-1" class="d-flex flex-column align-items-center">
	<div id="div-person-2">
		<i id="icon-person" class="bi bi-people-fill"></i>
	</div>
	
</div>
<?php
$form='
	<form method="POST" action="" class="fs-1 d-flex flex-row ">
	<input type="radio" name="ong" id="ong-radio-input-registerEO">
	<label for="ong">d</label>
		
		<input type="radio" name="empresa" id="empresa-radio-input-registerEO">
	</form>
';
echo $form;
//if(isset());
echo '
<form method="POST" action="" class="fs-1 d-flex flex-column align-items-center">
	<input class="col-8 bg-transparent text-center text-light border-bottom border-light" placeholder="Name" id="input-name-register" type="text" name="name">
	<input class="col-8 bg-transparent text-center text-light border-bottom border-light" placeholder="Email" id="input-email-register" type="email" name="email">
	<input pattern="[a-zA-z0-9,.)(*&¨%!´ç@]+$" class="col-8 bg-transparent text-center text-light border-bottom border-light" placeholder="Password" id="input-password-register" type="password" name="password">
	<br>
	<div class="row col-11">
		<input class="btn fs-1" type="submit" name="register" value="REGISTER">
	</div>
</form>
';
?>
