<?php
include "func.php";
if(isset($_POST['login']))
	{
		$username= trim($_POST['email']);
		$password= trim($_POST['pass']);

		$users = login($username, $password);
		if($users["client_username"] == $username && $users["client_pass"] == $password)
			{
				
				header("location:admin.php");
	        }
	        else
	        	echo "INVALID USERNAME/PASSWORD"
 ?>
<?php include 'nav.php';?> 

<div class="w3-card-4 w3-container w3-black w3-opacity-min w3-display-right"  style="width:27%; margin-right: 3em; margin-top: 3em; ">
			<div class="w3-container">
				<h2>LOGIN</h2>
				<img src="elogo2.png" alt="Avatar" class="avatar" height="200" width="200"><br/><br/>
			
				<form method="post">
					<div class="w3-container">
	       			<input type="text" class = "w3-input w3-round" name="email" placeholder="Email" required><br/>
   				
					<input type="password" id="myInput" class = "w3-input w3-round" name="pass" placeholder="Password" required>
					<br/><br/>
					<input type="submit" value="login" name="login" class="w3-button w3-round-large w3-white">
					<br/><br/>
					<a href="register.php">Register Here</a>
					<br/><br/>
					</div>
				</form>
			</div>
		</div>