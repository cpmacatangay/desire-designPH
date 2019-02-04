<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>desire&designPH</title>

    <style type="text/css">
    
    </style>
  </head>
 <body>
  <?php include('navclient.php') ?>  
  <form method = "get" action="postproj2.php" enctype="multipart/form-data">
<div class ="w3-container" align="center"> 
  <!-- DESIGN TYPE -->
  <div> 
        <h1 class="w3-text-black">1 </h1>
        <h1 class="w3-text-black">CHOOSE A DESIGN TYPE </h1>
        <div class="w3-container">
          <div class="w3-row-padding">
      	<label>
        <input type="radio" name="type" value="logo" checked >
        <img src="resources/logo.jpg">  
      </label>
        
        <label>
          <input type="radio" name="type" value="tshirt">
          <img src="resources/apparel.jpg">
        </label>

          <label>
          <input type="radio" name="type" value="business" checked>
          <img src="resources/business.jpg">
        </label>

        <label>
          <input type="radio" name="type" value="appweb">
          <img src="resources/appweb.jpg">
        </label>
      </div>
         <br/><br/>
         <div class='w3-row-padding'>
          <label>
          <input type="radio" name="type" value=""print" checked>
          <img src="resources/print.jpg">
        </label>

        <label>
          <input type="radio" name="type" value=""graphic">
          <img src="resources/graphic.jpg">
        </label>

        <label>
          <input type="radio" name="type" value=""publication" checked>
          <img src="resources/publication.jpg">
        </label>

        <label>
          <input type="radio" name="type" value="other">
          <img src="resources/other.jpg">
        </label>
      </div>
      </div><br/><br/>
    </div>
    <!-- DESIGN TYPE END -->
      <!-- PROJECT DETAILS -->
        <div>
          <h1 class="w3-text-black">2</h1>
          <h1 class="w3-text-black">ADD PROJECT DETAILS</h1>
          <div class="w3-container w3-padding w3-show">
            <div class="w3-card-4 w3-animate-top w3-white" style="width:44%;margin-top: 2%">
            <div class="w3-container w3-center">        
                      <br/>            
                      <input type = "text" class = "w3-input w3-round" name = "proj_title" placeholder="Project Title" required>
                      <br/>
                      <br/>
                      <textarea placeholder="Proeject Description" style="margin-right: " rows="10"  cols="62"  name="proj_desc"></textarea>
                      
                     
                   <!--   <input type ="radio" class="w3-radio" name="type" value="client" checked> I am a Client &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     <input type ="radio"  class="w3-radio" name="type" value="designer" checked> I am a Designer -->
                    
                    <!--  <button class="w3-button w3-round-large" style="background-color:#F97619" name = "register">CREATE ACCOUNT
                  </button> -->
                   <br/><br/><br/>
            </div>
            </div>
          </div>
      </div>
      <!-- PROJECT DETAILS END -->
  </div>
    <input type="submit" class="w3-button w3-round-large" value="NEXT" style="background-color:#F97619;margin-left:90% "  name="next"/>
    
     
  </div>
</form>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

    </html>


