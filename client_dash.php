
 <?php
include('func.php');
$projects=viewAllProjects();

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
    <?php include 'navclient.php'?>
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
          <a class="nav-link" href="client_dash.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Projects</span>
          </a>
        </li>


        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
           <i class="fas fa-envelope"></i>
            <span>Inbox</span></a>       
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#">
           <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Cart</span></a>
        </li>



        <li class="nav-item">
          <a class="nav-link" href="#">
           <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
        </li>


      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Projects Overview</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Projects</div>
            <div class="card-body">
              <div class="table-responsive">

                <?php if (count($projects) > 0): ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                   <th>Project Title</th>
                    <th>Category</th>
                    <th>Date start</th>
                    <th>Date end</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                  </thead>
             
                  <tbody>
                  <?php foreach ($projects as $p) :?>
          <tr  style= "text-align: center;" >
           <td><?php echo htmlentities($p['proj_name']) ?></td>
           <td><?php echo htmlentities($p['proj_category']) ?></td>

           <td><?php echo htmlentities($p['proj_date_start']) ?></td>

           <td><?php echo "" ?></td>

           <td><?php if($p['proj_status']== 1 ) echo "<p class='text-success'>ACTIVE</p>" ?></td>

           <td><button class="btn btn-md" style="background-color:#F97619; color: white; font-size:13px;" onclick="document.getElementById('view<?php echo htmlentities($p['proj_id'])?>').style.display='block'">VIEW ENTRIES</button></td>


          </tr>
                    <?php endforeach; ?>
                    
                  </tbody>
                </table>
                 <?php else: echo "EMPTY"; endif; ?>
              </div>
            </div>
       
          </div>

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
