
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <!--   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <link rel="stylesheet" type="text/css" href="css/button.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->




    <title>desire&designPH</title>

    <style type="text/css">
    [type=radio] { 
          position: absolute;
          opacity: 0;
          width: 0;
          height: 0;
        }

        /* IMAGE STYLES */
        [type=radio] + img {
          cursor: pointer;
        }

        /* CHECKED STYLES */
        [type=radio]:checked + img {
         /* outline: 1px solid #f97619*/
            -webkit-box-shadow: 8px 15px 38px -2px rgba(214,214,214,1);
            -moz-box-shadow: 8px 15px 38px -2px rgba(214,214,214,1);
            box-shadow: 8px 15px 38px -2px rgba(214,214,214,1);

        }
        img{
            height: 70%;
            width: 70%;
            border-radius: 5px;
        /*   margin-left: 50px;
           margin-right: 50px;*/
         
        }








    </style>

    <!-- Bootstrap core CSS -->
  </head>
 <body style="background-color: #f4f4f4">
<?php include('navclient.php') ?>

 

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
   <h5 style="color: white; margin-top: auto;"> Post Project </h5>
    </div>
</nav>
    
<br>



<div class="container" >
    <h1 align="center" style="color:#f97619"> 1 </h1>
    <h3 align="center" style="margin-top: 50px; margin-bottom: 80px;"> Choose design type</h3>
    <div class="row mb-3">
        <div class="col-sm-3"> 
        <label>
            <input type="radio" name="type" value="logo"  >
            <img src="resources/logo.jpg">  
        </label>
        </div>    
        <div class="col-sm-3">
         <label>
          <input type="radio" name="type" value="tshirt">
          <img src="resources/apparel.jpg">
        </label>
        </div>
        <div class="col-sm-3">
        <label>
          <input type="radio" name="type" value="business" >
          <img src="resources/business.jpg">
        </label>
        </div>


        <div class="col-sm-3">
        <label>
          <input type="radio" name="type" value="appweb">
          <img src="resources/appweb.jpg">
        </label>
        </div>       
    </div>


    <div class="row mb-3">
        <div class="col-sm-3"> 
         <label>
            <input type="radio" name="type" value="print" >
            <img src="resources/print.jpg">
        </label>
         </div>
        <div class="col-sm-3"> 
        <label>
            <input type="radio" name="type" value="graphic">
            <img src="resources/graphic.jpg">
        </label>
        </div>
        <div class="col-sm-3"> 
        <label>
            <input type="radio" name="type" value="publication" >
            <img src="resources/publication.jpg">
        </label>
        </div>
        <div class="col-sm-3"> 
            <label>
            <input type="radio" name="type" value="other">
            <img src="resources/other.jpg">
            </label>
        </div>     
      </div>
</div>
 


 <div class="container">
    <h1 align="center" style="color:#f97619"> 2 </h1>
    <h3 align="center" style="margin-top: 50px; margin-bottom: 50px;"> Add project details</h3>
   

   <center>
     <div class="card" style="height: 50%; width: 50%;">
  <div class="card-body">
    
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Project title">
    </div>

    <div class="form-group">
  <textarea class="form-control" rows="5" id="comment" placeholder="Description"></textarea>
</div>

<form>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
  </div>
</form>

  
  </div>
</div>




           <div class="container">
               <div class="row  " >
                <div class="col">
                  <div style="margin: auto; margin-top: 80px; "> 
                    <a href="#" class="btn btn-dark btn-xs btn-block" style="padding: 10px">SAVE</a>
                  </div>
              </div>
                
                <div class="col">
                 <div  style="margin: auto ; margin-top: 80px;">
                      <a href="add_proj2.php"  class="btn btn-xs btn-block" style="background-color: #f97619; color: white;padding: 10px">NEXT</a>
                  </div>
                   </div>
                 </div>
             </div>

         


 </div>
 </div>


<br>
<br>

 </body>

</html>
