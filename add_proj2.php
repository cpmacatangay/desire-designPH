
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <script src="https://www.paypalobjects.com/api/checkout.js"></script>


    <title>desire&designPH</title>

    <style type="text/css">
  /**/



input[type="radio"] {
    display:none; 
}

label {
    display:inline-block;
    background-color:#fefefe;
    padding: 9px 30px;
    font-family:Poppins;
    font-size:16px;
    border: 2px solid #f97619;
    border-radius: 4px;    
}

 label:hover {
  background-color: ##f97619;
}

input[type="radio"]:checked + label { 
    background-color:#f97619;
    color: white;
    
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


<div class="container mb-5 mt-5">
   <h1 align="center" style="color:#f97619"> 3 </h1>
    <h3 align="center" style="margin-top: 50px; margin-bottom: 80px;"> Choose package deal</h3>


    <div class="pricing card-deck flex-column flex-md-row mb-3">
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom text-white shadow-sm" style="background-color:  #f97619;">Starter</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-center mb-0" data-pricing-value="15" style="color:  #f97619;">$<span class="price">3</span><span class="h6 text-muted ml-2">/ per month</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
                 <input type="radio" id="radioOrange" name="radioFruit" value="orange">
               <label for="radioOrange">Select Package</label> 


            </div>
        </div>
        <div class="card card-pricing popular shadow text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom  text-white shadow-sm"  style="background-color:  #f97619;">Professional</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-center mb-0" data-pricing-value="30"  style="color:#f97619;">$<span class="price">6</span><span class="h6 text-muted ml-2">/ per month</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
                      <input type="radio" id="radioBanana" name="radioFruit" value="banana">
                      <label for="radioBanana">Select Package</label>
            </div>
        </div>



        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom text-white shadow-sm"  style="background-color:  #f97619;">Business</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-center mb-0" data-pricing-value="45"  style="color:  #f97619;">$<span class="price">9</span><span class="h6 text-muted ml-2">/ per month</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Up to 5 users</li>
                    <li>Basic support on Github</li>
                    <li>Monthly updates</li>
                    <li>Free cancelation</li>
                </ul>
                        <input type="radio" id="radioApple" name="radioFruit" value="apple" checked>
                        <label for="radioApple">Select Package</label>
            </div>
        </div>
  
    </div>
</div>

<br>
<br>
<!--INVVVVVVVVVVVVVVVVVVOOOOOOIIIIIIIIIIIIIIIIIICCCCCCCCCCCEEEEE--------->
 <h1 align="center" style="color:#f97619"> 4 </h1>
    <h3 align="center" style="margin-top: 50px; margin-bottom: 80px;"> Invoice </h3>

</br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                       

                        <div class="col-md-12 text-right">
                            <p class="font-weight-bold mb-1">Invoice #550</p>
                            <p class="text-muted">Due to: 4 Dec, 2019</p>
                        </div>
                    </div>

                  <!--   <hr class="my-5"> -->

                    <div class="row  p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Client Information</p>
                            <p class="mb-1">John Doe, Mrs Emma Downson</p>
                            <p>Acme Inc</p>
                            <p class="mb-1">Berlin, Germany</p>
                            <p class="mb-1">6781 45P</p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Payment Details</p>
                            <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                            <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                            <p class="mb-1"><span class="text-muted">Payment Type: </span> Root</p>
                            <p class="mb-1"><span class="text-muted">Name: </span> John Doe</p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Project Name</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Software</td>
                                        <td>LTS Versions</td>
                                        <td>21</td>
                                        <td>$321</td>
                                        <td>$3452</td>
                                    </tr>

                                   
                               
                                </tbody>

                            </table>
                            <br>

                            <div class= "col-md-12 text-right">
                            <div id="paypal-button-container"></div>
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


<br>
<br>


<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<div id="paypal-button-container"></div>

<script>

    // Render the PayPal button

    paypal.Button.render({

        // Set your environment

        env: 'sandbox', // sandbox | production

        // Specify the style of the button

        style: {
            label: 'pay',
            size:  'large', // small | medium | large | responsive
            shape: 'rect',   // pill | rect
            color: 'blue',   // gold | blue | silver | black
            tagline:'false'
        },

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create

        client: {
            sandbox:    'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
            production: '<insert production client id>'
        },

        // Show the buyer a 'Pay Now' button in the checkout flow
        commit: true,
        
        // Wait for the PayPal button to be clicked

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '0.01', currency: 'USD' }
                        }
                    ]
                }
            });
        },

        // Wait for the payment to be authorized by the customer

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                window.alert('Payment Complete!');
            });
        }

    }, '#paypal-button-container');

</script>
    



 </body>

</html>
