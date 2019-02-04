
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
            a.card-title:hover {
                  text-decoration: none;
                 
                }

                h4:hover {
                 color:#f97619;
                    }


    </style>

    <!-- Bootstrap core CSS -->
  </head>
 <body style="background-color:#f4f4f4;">
<?php include('navdes.php') ?>

 


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
<!-- 
            <ul class="navbar-nav m-auto">
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
        <h3 class="jumbotron-heading">PROJECTS</h3>
        <p class="lead text-muted mb-0" style="font-size: 15px;">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte...</p>
    </div>
</section>


<div class="container" >
    <div class="row">
        <div class="col" >
            <nav aria-label="breadcrumb" >
                <ol class="breadcrumb"  style="background-color: #2b2b2b;">
                    <li class="breadcrumb-item"><a href="#" style="color: white;" >Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: #f97619">Browse Projects</li>
                </ol>
            </nav>
        </div>
    </div>
</div>



<div class="container">

<div class="row"> 
    <div class="col-lg-5">
  <form>
    <select name="categories" class="custom-select mb-2">
      <option selected disabled="">Categories</option>
      <option value="volvo">Volvo</option>
      <option value="fiat">Fiat</option>
      <option value="audi">Audi</option>
    </select>
  </form>
  </div>

  <div class="col-lg-2">
  <form>
    <select name="categories" class="custom-select mb-2">
      <option selected disabled="">Sort by</option>
      <option value="volvo">Volvo</option>
      <option value="fiat">Fiat</option>
      <option value="audi">Audi</option>
    </select>
  </form>
  </div>

  <div class="col-lg-2">
  <form>
    <select name="categories" class="custom-select mb-2">
      <option selected disabled="">Status</option>
      <option value="volvo">Volvo</option>
      <option value="fiat">Fiat</option>
      <option value="audi">Audi</option>
    </select>
  </form>
  </div>


</div>
</div>




<div class="container">
    <div class="row">

            <div class="container">
                  <div class="card p-3 mb-5" style="padding: 25px; border-radius:5px">
                            <div class="card-block px-2">
                                <div class="row">
                                  <div class="col-sm-9">
                                    <a href="browse_projects.php" style="color: black;" class="card-title"><h4>Digital agency needs logo and branding</h4></a>
                                     <p class="card-text">
                                        <span class="badge badge-pill bg-secondary" style="color: white;">Logo design</span>
                                        <span class="badge badge-pill bg-secondary" style="color: white;">Photoshop</span>
                                        <span class="badge badge-pill bg-secondary" style="color: white;">Illustrator</span>
                                    </p>
                                     <p style="font-size: 12px;">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard livre spécimen de polices de texte...</p>
                                  </div>

                                      <div class="col-lg-3" >
                                        <a href="#" class="btn btn-outline btn-md" style="color:white; background-color: #f97619;margin-left: 35%;">+Add to Watchlist</a>
                                      </div>


                                    <div class="d-flex  justify-content-center" style="margin-left: 10px;font-size: 15px;">
                                      <div class="p-2 text-dark"><i class="fas fa-users"></i> Designers:  </div>
                                      <div class="p-2 text-dark"><i class="fas fa-folder"></i> Submissions:  </div>
                                      <div class="p-2 text-dark"><i class="fas fa-stopwatch"></i> Time left:  </div>
                                      <div class="p-2 text-dark"><i class="fas fa-money-bill-alt"></i> Prize:  </div>
                                    </div>

                                 </div>
                            </div>
                    </div>
            </div>


    </div>
</div>




 </body>

</html>
