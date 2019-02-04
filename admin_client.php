 <?php
include('func.php');
$clients=viewAllClients();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


    <title>desire&designPH</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">
    <?php include 'navadmin.php'?>
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Dashboard</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

  
   
 
    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="admin_client.php">
            <i class="fas fa-fw fa-user"></i>
            <span>Clients</span>
          </a>
        </li>


        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_des.php">
           <i class="fas fa-user"></i>
            <span>Designers</span></a>       
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#">
           <i class="fas fa-fw fa-cog"></i>
            <span>Pending Accounts</span></a>
        </li>


      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Clients</li>
          </ol>


          <div align="right">
            <button class="btn btn-outline-success"  href="#" data-toggle="modal" data-target="#Add"  style="font-size: 15px;">+ Add account</button>

          </div>
        </br>








          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-user-circle"></i>
             Clients</div>
            <div class="card-body">
              <div class="table-responsive">
        <?php if (count($clients) > 0): ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 12px; ">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Phone No</th>
                      <th>Company</th>
                      <th>Action</th>
                    </tr>
                  </thead>
             
                  <tbody>
                  <?php foreach ($clients as $c) :?>
          <tr>
           <td><?php echo htmlentities($c['client_id']) ?></td>
           <td><?php echo htmlentities($c['client_name']) ?></td>

           <td><?php echo htmlentities($c['client_username']) ?></td>

           <td><?php echo htmlentities($c['client_email']) ?></td>

           <td><?php echo htmlentities($c['client_phone']) ?></td>

           <td><?php echo htmlentities($c['client_company']) ?></td>

           <td align="center" >
            <div class="table-responsive">
              <button class="btn btn-light" onclick="document.getElementById('view<?php echo htmlentities($c['client_id'])?>').style.display='block'">
              <i style="font-size: 13px; color: green;" class="fas fa-eye" ></i></button>

               <button class="btn btn-light" onclick="document.getElementById('edit<?php echo htmlentities($c['client_id'])?>').style.display='block'">
              <i style="font-size: 13px; color: blue;" class="fas fa-edit" ></i></button>

                <button class="btn btn-light" onclick="document.getElementById('delete<?php echo htmlentities($c['client_id'])?>').style.display='block'">
              <i style="font-size: 13px;color: red;" class="fas fa-trash" "></i></button>
             </div>

            </td>
          </tr>
                   
                     <?php endforeach; ?>
                  </tbody>
              
      </table>
      <?php else: echo "EMPTY"; endif; ?>
              </div>
            </div>
       
          </div>








<!----------------------MODAAAAAAAAAAAAAAAAAAAALLLLLLLL ---------------------->

   <div class="modal fade " id="Add">
    <div class="modal-dialog modal-dialog-centered mr-auto">
      <div class="modal-content">
      
        <!--------- Modal Header ---------->
        <div class="modal-header">
          <h5 class="modal-title mr-auto">Add account</h5>


          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">

         <form method="post">
          <div class="form-group">
            <center><img src="logo1.png" style="height:15%; width: 15%;"></center>
            <center><img src="logo.png" style="height:50%; width: 50%;"></center>

            <input type="text" class = "form-control mr-sm-2" name="username" placeholder="Username"  required><br/>

            <input type="password" id="myInput" class = "form-control mr-sm-2" name="pass" placeholder="Password" required><br/>

           <input type="text" class = "form-control mr-sm-2" name="name" placeholder="Name"  required><br/>

            <input type="email" class = "form-control mr-sm-2" name="email" placeholder="Email"  required><br/>

           <input type="number" class = "form-control mr-sm-2" name="phone" placeholder="Phone Number"  required><br/>


           <input type="text" class = "form-control mr-sm-2" name="company" placeholder="Company"  required><br/>



          </div>

            
       

          <div class="modal-footer">
          <input type="submit" style="background-color:#f97619; color: white; font-size: 12px;" class="btn btn-md" value="Add" name="add">
          <button type="button" style="background-color:#2b2b2b; color: white; font-size: 12px;" class="btn btn-md " data-dismiss="modal">Close</button>

          </form>

        </div>

        </div>
        
        <!-- Modal footer -->
      


        </div>
        
      </div>


<!----------------------MODAAAAAAAAAAAAAAAAAAAALLLLLLLL ---------------------->




        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
       <!--  <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div> -->
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
