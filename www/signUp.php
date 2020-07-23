<?php


require "loginPage.php";

?>



<main
	<div class = "wrapper-main">
		<section class = "wrapper-main">
			<h1>Signup </h1>
			<form action = "includes/signup.inc.php" method = "post">
				<input type = "text" name = "userName" placeholder= "User Name">
				<input type = "text" name = "email" placeholder= "E-mail">
				<input type = "text" name = "name" placeholder= "Name">
				<input type = "password" name = "pwd" placeholder= "Password">
				<input type = "password" name = "pwd-repeat" placeholder= "Password Repeat">
				<button type = "submit" name = "signup-submit">Signup</button>
			</form>
		</section>
	</div>
</main>



<?php 
    require "footer.php";
	
?>

 