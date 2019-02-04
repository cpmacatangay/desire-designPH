
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
    .checked {
  color: orange;
}
    </style>

    <!-- Bootstrap core CSS -->
  </head>
 <body style="background-color:#f4f4f4;">
<?php include('nav.php') ?>

 


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">

<!--             <ul class="navbar-nav m-auto">
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
</br>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Browse</a></li>
                    <li class="breadcrumb-item"><a href="designers.php">Designers</a></li>
                    <li class="breadcrumb-item active" aria-current="designer_profile.php">Designer</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">

   
     
         <!--------------------------------------FIRST CARD ---------------------------------->  
            <div class="container">
                <div class="card flex-row">
                      <div class="card-header border-0">
                            <img src="//placehold.it/200" alt="">
                        </div>

                        <div class="card-block px-2 ">
                       </br>
                        <div class="row">
                            <h4 class="card-title" style="margin-left: 1em;margin-right: 10px;">Your Name</h4>
                            <div style="margin-top: 2px;">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            </div>
                        </div>
                            <p class="card-text" style="font-size: 13px;margin-left: 10px;">Lorem ipsum dolor sit amet, id libero arcu vestibulum, sodales vivamus donec. Nunc metus ac condimentum et pellentesque, duis in sed et dolor urna tellus. Suscipit nullam sit cras sed curae, placerat maecenas lorem turpis, libero a. </p>

                            <div class="row" style="font-size: 18px">
                                  <p style="margin-right: 10px; margin-left: 30px ">Rank: #1 </p>
                                  <p style="margin-right: 10px;"> Ratings:5.0   </p>
                                  <p style="margin-right: 10px;"> Earnings: $500 </p>
                     
                            </div>
                        </div> 
                        <div class="card-block px-2" style="margin-left:auto; margin-top:40px;margin-right: 40px;">
                        <a href="#" class="btn btn-outline btn-lg" style="color:white; background-color: #f97619;">HIRE DESIGNER</a>
                        </div>
                    </div>                
              </div>
          </br>

                <!-------------------------------------- END FIRST CARD ---------------------------------->  
<div class="container">
  <div class="row">
     <div class="col-sm-8">
        <div class="card p-3 mb-5" style="margin-top: 10px; margin-right: -13px; padding: 25px; border-radius: 0px 0px 0px 0px">
        <div class="card-block px-2">
                <h5 class="card-title">About</h5>
            <p class="card-text" style="font-size: 13px;">
              Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte...
              <br style="margin-bottom: 15px">
              Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte...
         
        </div>
    </div>
  </div>

  <div class="col">
    <div class="card  mb-3" style="margin-top:10px; padding: 25px; ">
        <div class="card-block px-2">
          <div class="row" align="center" >
           
              <h3 class="card-title">Portfolio </h3>

               <div class="row">

                    <div class="col-md-2 col-md-6 mb-2">
                      <a href="#">
                            <img class="img-fluid" src="http://placehold.it/500x300" alt=""">
                          </a>
                    </div>

                    <div class="col-md-2 col-md-6 mb-2">
                      <a href="#">
                            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                          </a>
                    </div>

 
                    <div class="col-md-2 col-md-6 mb-2">
                      <a href="#">
                            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                          </a>
                    </div>

                    <div class="col-md-2 col-md-6 mb-2">
                      <a href="#">
                            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                          </a>
                    </div>
             
            </div>
        
          </div>
        </div>
    </div>
   
  </div>
</div>
</div>
















                  </div>
            </div>

                 
    </div>
</div>




 </body>

</html>
