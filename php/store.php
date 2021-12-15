<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>The Greatest Store</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
      />
      <link type="text/css" rel="stylesheet" href="../css/style.css">
      <?php
      include_once "template.php";
      ?>
      <script type="text/javascript" src="../js/Background.js"></script>


   </head>
   <body>

      <div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                     <h1>The Finest Wares From<br>The Biblical World.</h1>
                     <h4>Unique Products You Cannot Find Anywhere Else.</h4>
                     <h4>Dante Coins: <span id = "balance">0</span></h4>
                     <div class="product-sh">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-3">
                           <div class="form-sh">
                              </select>
                           </div>
                        </div>  
                  </div>
               </div>
               <div class="row clearfix">
                  <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="box-img" onclick="buyMug()">
                           <h4>Mug De Scientia <br/> (1800 Denarios) <br/> Inventory: <span id = "MugInventory">0</span> </h4>
                           <img src="https://drive.google.com/uc?export=view&id=1AAHmtoYHyj3XZ7xAx5UfPEnl-_THrvn_" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="box-img" onclick="buyPoster()">
                           <h4>Septem Solaria Pallio <br/> (1800 Denarios) <br/> Inventory: <span id = "PosterInventory">0</span></h4>
                           <img src="https://drive.google.com/uc?export=view&id=1AAHmtoYHyj3XZ7xAx5UfPEnl-_THrvn_" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="box-img" onclick="buyHeavenBear()">
                           <h4>Caelum Ursum <br/> (1800 Denarios) <br/> Inventory: <span id = "BearInventory">0</span></h4>
                           <img src="https://drive.google.com/uc?export=view&id=1AAHmtoYHyj3XZ7xAx5UfPEnl-_THrvn_" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="box-img" onclick="buyUnholyWater()">
                           <h4>Aqua Profanus <br/> (1800 Denarios) <br/> Inventory: <span id = "UWaterInventory">0</span></h4>
                           <img src="https://drive.google.com/uc?export=view&id=1AAHmtoYHyj3XZ7xAx5UfPEnl-_THrvn_" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="box-img" onclick="buyGoatshirt()">
                           <h4>Tunic Caprae <br/> (3500 Denarios) <br/> Inventory: <span id = "GoatShirtInventory">0</span></h4>
                           <img src="https://drive.google.com/uc?export=view&id=1AAHmtoYHyj3XZ7xAx5UfPEnl-_THrvn_" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="box-img" onclick="buyClimbShirt()">
                           <h4>Scandere Tunicam <br/> (3500 Denarios) <br/> Inventory: <span id = "ClimbShirtInventory">0</span></h4>
                           <img src="https://drive.google.com/uc?export=view&id=1AAHmtoYHyj3XZ7xAx5UfPEnl-_THrvn_" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="box-img" onclick="buyGodShirt()">
                           <h4>Deus Tunicam Amo <br/> (3500 Denarios) <br/> Inventory: <span id = "GodShirtInventory">0</span></h4>
                           <img src="https://drive.google.com/uc?export=view&id=1AAHmtoYHyj3XZ7xAx5UfPEnl-_THrvn_" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">                     
                        <div class="box-img" onclick="buyHolyWater()">
                           <h4>Aqua Sanctae <br/> (3500 Denarios) <br/> Inventory: <span id = "HWaterInventory">0</span></h4>
                           <img src="https://drive.google.com/uc?export=view&id=1AAHmtoYHyj3XZ7xAx5UfPEnl-_THrvn_" alt="" />
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
   </body>
</html>