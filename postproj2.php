<?php 
include 'func.php';
if(isset($_GET['next'])){
    $project_category = $_GET['type'];
    $proj_title = $_GET['proj_title'];
    $proj_desc = $_GET['proj_desc'];
    }

    if(isset($_POST['submit']))
    {
     $client_id = 1;
     $proj_category = $_POST['proj_category'];
     $proj_name = $_POST['proj_title'];
     $proj_desc = $_POST['proj_desc'];
     $package = $_POST['package'];
     if($_FILES['picture']['tmp_name'] != null){$pic = file_get_contents($_FILES['picture']['tmp_name']);}
     else {$pic=null;}
      
     
     postproj($client_id,$proj_name,$proj_desc,$proj_category,$pic,$package); 
   
    }
     
    
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>desire&designPH</title>

    <style type="text/css">
     /* HIDE RADIO */
      [type=radio] { 
        position: ;
        opacity: 0;
        width: 50px;
        height: 10px;
        margin-top: 70px;
      }
      /* IMAGE STYLES */
      [type=radio] + img {
        cursor: pointer;
         width: 80%;
         height: auto%;
      }
      /* CHECKED STYLES */
      [type=radio]:checked + img {
        outline: 3px solid black;
      }
    </style>
  </head>
 <body>
  <?php include 'navclient.php'; ?>  
  <form method = "post" enctype="multipart/form-data">
<div class ="w3-container" align="center"> 
  <div>
        <h1 class="w3-text-black">3 </h1>
        <h1 class="w3-text-black">CHOOSE PACKAGE DEAL </h1>
        <div class="w3-container w3-padding">
      	<label>
        <input type="radio" name="package" value="pack1"  >
        <img src="http://placehold.it/40x60/0bf/fff&text=A">  
      </label>

        <label>
          <input type="radio" name="package" value="pack2">
          <img src="http://placehold.it/40x60/b0f/fff&text=B">
        </label>

          <label>
          <input type="radio" name="package" value="pack3" >
          <img src="http://placehold.it/40x60/0bf/fff&text=A">
        </label>

  </div>
  <br/>


        <div>
          <h1 class="w3-text-black">4</h1>
          <h1 class="w3-text-black">PAYMENT</h1>
          <div class="w3-container w3-padding w3-show">
            <div class="w3-card-4 w3-animate-top w3-white" style="width:44%;margin-top: 2%">
            <div class="w3-container w3-center">        
                      <br/>  
                      <div class="w3-left w3-left-align">          
                      <h7>Project Name: </h7> <label><?php echo $proj_title;?></label>
                       <br/>  
                       <h7>Category: </h7><label><?php echo $project_category; ?></label>
                       <br/>  
                       <h7>Description:</h7><label><?php echo $proj_desc; ?></label>
                       <br/>  
                       <h7>Additional Files:</h7> <input type="file" name="picture" /></label>
                       <br/>  
                       <h7>Total Project Cost:</h7>
                       <input type="hidden" name="proj_title" value="<?php echo $proj_title ?>"/>
                       <input type="hidden" name="proj_category" value="<?php echo $project_category ?>"/>
                       <input type="hidden" name="proj_desc" value="<?php echo $proj_desc ?>"/>

                       <br/><br/> 
                     </div>
                   <!--   <input type ="radio" class="w3-radio" name="type" value="client" checked> I am a Client &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     <input type ="radio"  class="w3-radio" name="type" value="designer" checked> I am a Designer -->
                    
                    <!--  <button class="w3-button w3-round-large" style="background-color:#F97619" name = "register">CREATE ACCOUNT
                  </button> -->
                   
                  </div>
            </div>
          </div>
      </div>

    </div>
     <input type="submit" class="w3-button w3-round-large" style="background-color:#F97619" value="POST PROJECT"  name="submit"/>

      
    
     
  </div>
</form>
<button class="w3-button w3-round-large" style="background-color:#F97619" onclick="goBack()">Go Back</button>
<script>
    function goBack() {
    window.history.back();
}
    </script>
  </body>

    </html>


