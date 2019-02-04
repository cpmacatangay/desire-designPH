
 <?php
include('func.php');
$designer=viewAllDesigners();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">




    <title>desire&designPH</title>

    <style type="text/css">
    </style>

    <!-- Bootstrap core CSS -->
  </head>
 <body style="background-color: #2b2b2b">
<?php include('navdes.php') ?>

 


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">

           <!--  <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="category.html">Categories <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.html">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.html">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
 -->
            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
          
            </form>
        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h3 class="jumbotron-heading">DESIGNERS</h3>
        <p class="lead text-muted mb-0">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte...</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Designers</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">



    <?php if (count($designer) > 0): ?>
     
           

            <div class="container">
                    <div class="row">
                        <?php foreach ($designer as $c) :?>

                        <div class="col-12 col-md-6 col-lg-3">
                 
                          <div class="card" style="width:250px; height:350px; text-align: center;">
                           <center><img class="card-img-top" src="logo1.png" alt="Card image" style="width:30%; margin-top: 10px; "></center> 
                            <div class="card-body">
                              <h5 class="card-title"><?php echo htmlentities($c['des_name']) ?></h5>
                              <p  style="font-size:14px; "class="card-text">Some example text some example text. John Doe is an architect </p>

                           <div class="card-footer" >
                            
                             <a href="designer_profile.php" class="btn btn-dark btn-sm btn-block" style="margin-bottom:10px">VIEW</a>
                             <a href="#" class="btn btn-sm btn-block" style="background-color: #f97619; color: white;">INVITE</a>
                           </div>
                             
                           </div>
                        </div>

                           
              </div>

      <?php endforeach; ?>
                  </div>
            </div>

                 


        

        
   <?php else: echo "EMPTY"; endif; ?>
    </div>
</div>




 </body>

</html>
