 
<?php
if(isset($_POST['login']))
  {
    $username= trim($_POST['username']);
    $password= trim($_POST['pass']);

    $users = login($username, $password);
    if($users["client_username"] == $username && $users["client_pass"] == $password)
      {
        
        header("location:ecommerce.php");
          }
          else
          {
           /* echo "<div class='w3-panel w3- w3-red w3-container w3-display-bottomright' style='width:20%'>
              <span onclick='this.parentElement.style.display='none'
          class='w3-button w3-large w3-display-topright'>&times;</span>
          <p>INVALID USERNAME/PASSWORD!</p>
      </div>"; */
    }
        }
 ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <style type="text/css">
        
    body{
        
        font-family: "Poppins";
      }
      .nav-link{
        font-size: 12px;
        margin-top: 10px;
        color: white;



      }

      button{
        opacity: 0px;
      }
       .nav-item:hover { 
        background-color:#ff9448;
        color: white;
       
       }
        </style>

 <!--------------------- Navigation ------------------->
    <nav class="navbar navbar-expand-lg navbar-dark navbarResponsive" style="background-color:  #f97619">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="logo2.png" style="height:60px; width: 50px; margin-left:30px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

    <!---------------NABAR ITEMS ---------------->      
          <ul class="navbar-nav" >
            <li class="nav-item">
              <a class="nav-link" style="color: white;"  href="home.php">Home</a>
            </li>

               <li class="nav-item dropdown">
              <a  style="color: white;" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Browse</a>
              <div class="dropdown-menu">
              <a class="dropdown-item" href="browse_projects.php">Projects</a>
              <a class="dropdown-item" href="templates_des.php">Templates</a>
        
            </div>
          </li>

                   <li style="margin-left:40em">
         <a class="nav-link btn btn-lg"  style="opacity: 0px; border-color: white;  color: white;">Sell Template</a>
        </li>


          <li class=nav-item style="margin-left: 1em">
       <a class="nav-link "  href="#" data-toggle="modal" data-target="#Signup" style="opacity: 0px; color: white; ">Profile</a>
        </li>



             
  <!-- Signup Modal -->
  <div class="modal fade " id="Signup">
    <div class="modal-dialog modal-dialog-centered mr-auto">
      <div class="modal-content">
      
        <!--------- Modal Header ---------->
        <div class="modal-header">
          <h5 class="modal-title mr-auto">Log in</h5>


          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">

         <form method="post">
          <div class="form-group">
            <center><img src="logo1.png" style="height:15%; width: 15%;"></center>
            <center><img src="logo.png" style="height:50%; width: 50%;"></center>
            <input type="text" class = "form-control mr-sm-2" name="username" placeholder="Username"  required><br/>
            <input type="password" id="myInput" class = "form-control mr-sm-2" name="pass" placeholder="Password" required>
          </div>

            
         <p style="font-size: 12px; margin-left: 10px; ">Don't have account?<a href="register.php">  Register Here</a></p>
          
          

          <div class="modal-footer">
          <input type="submit" style="background-color:#f97619; color: white; font-size: 12px;" class="btn btn-md" value="Login" name="login">
          <button type="button" style="background-color:#2b2b2b; color: white; font-size: 12px;" class="btn btn-md " data-dismiss="modal">Close</button>

          </form>

        </div>

        </div>
        
        <!-- Modal footer -->
      


        </div>
        
      </div>

<!--------END MODAL ---------------->


    </div>

  
       



&nbsp &nbsp
            <li class="nav-item">
              <a class="nav-link" href="register.php" style="color: white; ">Signup</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>



<!-- 
<script>
function browse() {
    var x = document.getElementById("Demo");
    if (x.className.indexOf("w3-show") == -1) {  
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

</script>
 -->