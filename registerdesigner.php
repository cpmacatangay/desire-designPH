<?php 
include "func.php"; 
?>

<?php

  $mess = "";

  if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $name = $_POST['name'];
    $email = $_POST['email'];

registerDesigner($username,$password,$name,$email);
  
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>desire&designPH</title>

    <!-- Bootstrap core CSS -->
  </head>
 <body style="background-color: #2b2b2b;">
<?php include('nav.php') ?>

		

            <div class="container">
            <center>
            <div class="card bg-light" style="width:400px;height: 650px; margin-top: 5em;">
              <div class="card-header">
              <img class="card-img-top" src="logo1.png" style="width:20%"> <br>
              <img class="card-img-top" src="logo.png" style="width:50%">
              </div>
                <form method = "post" enctype="multipart/form-data">

                <div class="card-body">
                  </br>
                <h5 class="card-title">Sign up as Designer</h5>
           </br>
                <input type = "text" class = "form-control" name = "username" placeholder="Username">
               </br>
                <input type = "password" class = "form-control" name = "pass" placeholder="Password" required>
                 </br>
                <input type = "text" class = "form-control" name = "name" placeholder="Full name" required>
              </br>
                <input type = "email" class = "form-control" name = "email" placeholder="Email" required>
                </br>
              </br>
                  <button class="btn btn-md" style="background-color:#F97619 ;  color:white;" name = "register">Create Account</button>
                   
                 </div>
              </form>
              </div>
            </center>
          </div>

        
    





      		
      			
             <!--   <input type ="radio" class="w3-radio" name="type" value="client" checked> I am a Client &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
               <input type ="radio"  class="w3-radio" name="type" value="designer" checked> I am a Designer -->
             
      					<!-- <input type = "password" id="myInput" class = "w3-input w3-round" name = "pass" placeholder="Password" required>
      					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      					<input type="checkbox" onclick="myFunction()">Show Password -->
					  <script>
					  	function myFunction() {
					    var x = document.getElementById("myInput");
					    if (x.type === "password") {
					        x.type = "text";
					    } else {
					        x.type = "password";
					    }
                      }
                  </script>
   
                
      					<br/><br/>
        		
        		<div style="color:#f00; padding:0.5em">
				
				</div>

        	</form>
      		</div>
    		</div>
		</div>
      <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

    </html>


