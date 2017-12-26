<?php
require_once('includes/config.php');
if( !$user->is_logged_in() ){ header('Location: login.php'); }

require_once "core/init.php";
$id = $_SESSION['id'];

$user = $db->query("SELECT * FROM sellers WHERE id = $id");
$userfetch = mysqli_fetch_assoc($user);
?>
<!DOCTYPE html>
<html>
<head>
  <title>JoogleeMT</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js" ></script>
   <script src="js/jquery-3.2.1.min.js"></script>
   <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=f2a3eb86bdd3fquqa2hrn7n9g7up3g81vcr7wq9gjo2o59pm"></script>
   <script>tinymce.init({ selector:'textarea' });</script>
    
</head>
<body>
  <?php include 'includes/Header2.php';?>
 <div style="width:50px; height:50px;"></div>
 <?php include 'includes/sidebar.php';?>
             

 
    <div class="col-lg-10">
       <div style="width: 50px;height: 50px;"></div> 
          <h1>Products <a href="add_product.php" class="pull-right btn btn-primary">Add New Product</a></h1> 
            <div class="col-md-3">
               <div class="panel panel-danger">
                   <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-3"><i class="glyphicon glyphicon-signal" style="font-size: 4.5em"></i></div>
                        <div class="col-xs-9 text-right">
                        <?php
                        $proT = $db->query("SELECT * FROM products WHERE store_name = $id AND deleted = 0");
                        $proF = mysqli_num_rows($proT);
                        ?>
                          <div style="font-size: 2.5em"><?=$proF;?></div>
                          <div>TOTAL</div>
                        </div>
                      </div> 
                   </div>
                 <a href="#">
                      <div class="panel-footer">
                          <div class="pull-left">TOTAL PRODUCTS</div>
                          <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
                          <div class="clearfix"></div>
                      </div>
                 </a>
               </div>
            </div>

            <!-- <div style="width: 50px;height: 50px;"></div>-->
            <div class="col-md-3">
               <div class="panel panel-success">
                   <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-3"><i class="glyphicon glyphicon-th-list" style="font-size: 4.5em"></i></div>
                        <div class="col-xs-9 text-right">
                        <?php
                        $proLQ = $db->query("SELECT * FROM products WHERE store_name = $id AND featured = 1");
                        $proliF = mysqli_num_rows($proLQ);
                        ?>
                          <div style="font-size: 2.5em"><?=$proliF;?></div>
                          <div>LIVE</div>
                        </div>
                      </div> 
                   </div>
                 <a href="#">
                      <div class="panel-footer">
                          <div class="pull-left">LIVE ON SITE</div>
                          <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
                          <div class="clearfix"></div>
                      </div>
                 </a>
               </div>
            </div>

             <!-- <div style="width: 50px;height: 50px;"></div>-->
            <div class="col-md-3">
               <div class="panel panel-warning">
                   <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-3"><i class="glyphicon glyphicon-user" style="font-size: 4.5em"></i></div>
                        <div class="col-xs-9 text-right">
                        <?php
                        $proR = $db->query("SELECT * FROM products WHERE store_name = $id AND featured = 0 AND rejected = 0");
                        $prorF = mysqli_num_rows($proR);
                        ?>
                          <div style="font-size: 2.5em"><?=$prorF;?></div>
                          <div>REVIEW</div>
                        </div>
                      </div> 
                   </div>
                 <a href="#">
                      <div class="panel-footer">
                          <div class="pull-left">UNDER REVIEW</div>
                          <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
                          <div class="clearfix"></div>
                      </div>
                 </a>
               </div>
            </div>

            <!-- <div style="width: 50px;height: 50px;"></div>-->
            <div class="col-md-3">
               <div class="panel panel-info">
                   <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-3"><i class="glyphicon glyphicon-comment" style="font-size: 4.5em"></i></div>
                        <div class="col-xs-9 text-right">
                        <?php
                        $proS = $db->query("SELECT * FROM products WHERE store_name = $id AND sold > 0 AND deleted = 0");
                        $prosC = mysqli_num_rows($proS);
                        ?>
                          <div style="font-size: 2.5em"><?=$prosC;?></div>
                          <div>OUT</div>
                        </div>
                      </div> 
                   </div>
                 <a href="#">
                      <div class="panel-footer">
                          <div class="pull-left">SOLD OUT</div>
                          <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
                          <div class="clearfix"></div>
                      </div>
                 </a>
               </div>
            </div><div class="clearfix"></div>
    </div><br>



<!--The nest section for users-->
    <div class="col-lg-10">
       <!-- <div style="width: 50px;height: 50px;"></div>-->
        <div class="page-header"><h3>PRODUCT</h3></div>

            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">ALL</a></li>
              <li><a data-toggle="tab" href="#menu2">LIVE ON SITE</a></li>
              <li><a data-toggle="tab" href="#menu3">UNDER REVIEW</a></li>
              <li><a data-toggle="tab" href="#menu4">REJECTED</a></li>
              <li><a data-toggle="tab" href="#menu5">PAUSED</a></li>
              <li><a data-toggle="tab" href="#menu6">SOLD OUT</a></li>
            </ul><br><br>
           <div class="table-responsive">
         
           <div class="clearfix"></div>
               
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <div class="table-responsive">
                    <table class="table">
                    <thead>
                      <th>
                        <label>Product</label>
                      </th>
                      <th>
                        <label>SKU</label>
                      </th>
                      <th>
                        <label>Image</label>
                      </th>
                      <th>
                        <label>Price</label>
                      </th>
                      <th>
                        <label>Added Date</label>
                      </th>
                      <th>
                        <label>Options</label>
                      </th>
                    </thead>
                    <tbody>
                    <?php
                    while($total = mysqli_fetch_assoc($proT)):
                    ?>
                      <tr>
                        <td><?=$total['title'];?></td>
                        <td><?=$total['product_code'];?></td>
                        <td><a href="<?=$total['image'];?>"><img src="<?=$total['image'];?>" width="70" height="100"></a></td>
                        <td><?=$total['price'];?></td>
                        <td><?=$total['addeddate'];?></td>
                        <td>
                            <a href="" class="btn btn-xs btn-warning">Edit</a>
                            <a href="" class="btn btn-xs btn-danger" onclick="confirm('Do You Really Want to delete this file');">Delete</a>
                        </td>
                      </tr>
                    <?php endwhile; ?>
                    </tbody>
                  </table>
                   <?php
                  if ($proF == 0) {
                    ?>
                    <p class="bg-success">You have No product <a href="add_product.php">start uploading</a></p>
                    <?php
                  }
                  ?>
                </div>
              </div>
              <div id="menu2" class="tab-pane fade">
                <div class="table-responsive">
                    <table class="table">
                    <thead>
                      <th>
                        <label>Product</label>
                      </th>
                      <th>
                        <label>SKU</label>
                      </th>
                      <th>
                        <label>Image</label>
                      </th>
                      <th>
                        <label>Price</label>
                      </th>
                      <th>
                        <label>Added Date</label>
                      </th>
                      <th>
                        <label>Options</label>
                      </th>
                    </thead>
                    <tbody>
                       <?php
                    while($live = mysqli_fetch_assoc($proLQ)):
                    ?>
                      <tr>
                        <td><?=$live['title'];?></td>
                        <td><?=$live['product_code'];?></td>
                        <td><a href="<?=$live['image'];?>"><img src="<?=$live['image'];?>" width="70" height="100"></a></td>
                        <td><?=$live['price'];?></td>
                        <td><?=$live['addeddate'];?></td>
                        <td>
                            <a href="" class="btn btn-xs btn-warning">Edit</a>
                            <a href="" class="btn btn-xs btn-danger" onclick="confirm('Do You Really Want to delete this file');">Delete</a>
                        </td>
                      </tr>
                    <?php endwhile; ?>
                    </tbody>
                  </table>
                  <?php
                  if ($proliF == 0) {
                    ?>
                    <p class="bg-success">You have No live product</p>
                    <?php
                  }
                  ?>
                </div>
             </div>
          <div id="menu3" class="tab-pane fade">
           <div class="table-responsive">
                    <table class="table">
                    <thead>
                      <th>
                        <label>PRODUCT</label>
                      </th>
                      <th>
                        <label>SKU</label>
                      </th>
                      <th>
                        <label>QUANTITY</label>
                      </th>
                      <th>
                        <label>PRICE</label>
                      </th>
                      <th>
                        <label>STATUS</label>
                      </th>
                      <th>
                        <label>Options</label>
                      </th>
                    </thead>
                    <tbody>
                       <?php
                    while($review = mysqli_fetch_assoc($proR)):
                    ?>
                      <tr>
                        <td><?=$review['title'];?></td>
                        <td><?=$review['product_code'];?></td>
                        <td><a href="<?=$review['image'];?>"><img src="<?=$review['image'];?>" width="70" height="100"></a></td>
                        <td><?=$review['price'];?></td>
                        <td><?=$review['addeddate'];?></td>
                        <td>
                            <a href="" class="btn btn-xs btn-warning">Edit</a>
                            <a href="" class="btn btn-xs btn-danger" onclick="confirm('Do You Really Want to delete this file');">Delete</a>
                        </td>
                      </tr>
                    <?php endwhile; ?>
                    </tbody>
                  </table>
                  <?php
                  if ($prorF == 0) {
                    ?>
                    <p class="bg-success">You have No product under review</p>
                    <?php
                  }
                  ?>
                </div>
          </div>
          <div id="menu4" class="tab-pane fade">
           <div class="table-responsive">
                    <table class="table">
                    <thead>
                      <th>
                        <label>PRODUCT</label>
                      </th>
                      <th>
                        <label>SKU</label>
                      </th>
                      <th>
                        <label>QUANTITY</label>
                      </th>
                      <th>
                        <label>PRICE</label>
                      </th>
                      <th>
                        <label>STATUS</label>
                      </th>
                      <th>
                        <label>Options</label>
                      </th>
                    </thead>
                    <tbody>
                       <?php
                       $regQ = $db->query("SELECT * FROM products WHERE store_name = $id AND rejected = 1");
                       $reqC = mysqli_num_rows($regQ);
                    while($rejected = mysqli_fetch_assoc($regQ)):
                    ?>
                      <tr>
                        <td><?=$rejected['title'];?></td>
                        <td><?=$rejected['product_code'];?></td>
                        <td><a href="<?=$rejected['image'];?>"><img src="<?=$rejected['image'];?>" width="70" height="100"></a></td>
                        <td><?=$rejected['price'];?></td>
                        <td><?=$rejected['addeddate'];?></td>
                        <td>
                            <a href="" class="btn btn-xs btn-warning">Edit</a>
                            <a href="" class="btn btn-xs btn-danger" onclick="confirm('Do You Really Want to delete this file');">Delete</a>
                        </td>
                      </tr>
                    <?php endwhile; ?>
                    </tbody>
                  </table>
                  <?php
                  if ($reqC == 0) {
                    ?>
                    <p class="bg-success">You have No Rejected product</p>
                    <?php
                  }
                  ?>
                </div>
          </div>
          <div id="menu5" class="tab-pane fade">
           <div class="table-responsive">
                    <table class="table">
                    <thead>
                      <th>
                        <label>PRODUCT</label>
                      </th>
                      <th>
                        <label>SKU</label>
                      </th>
                      <th>
                        <label>QUANTITY</label>
                      </th>
                      <th>
                        <label>PRICE</label>
                      </th>
                      <th>
                        <label>STATUS</label>
                      </th>
                      <th>
                        <label>Options</label>
                      </th>
                    </thead>
                    <tbody>
                       <?php
                       $pauseQ = $db->query("SELECT * FROM products WHERE store_name = $id AND rejected = 1");
                       $pauseC = mysqli_num_rows($pauseQ);
                    while($paused = mysqli_fetch_assoc($pauseQ)):
                    ?>
                      <tr>
                        <td><?=$paused['title'];?></td>
                        <td><?=$paused['product_code'];?></td>
                        <td><a href="<?=$paused['image'];?>"><img src="<?=$paused['image'];?>" width="70" height="100"></a></td>
                        <td><?=$paused['price'];?></td>
                        <td><?=$paused['addeddate'];?></td>
                        <td>
                            <a href="" class="btn btn-xs btn-warning">Edit</a>
                            <a href="" class="btn btn-xs btn-danger" onclick="confirm('Do You Really Want to delete this file');">Delete</a>
                        </td>
                      </tr>
                    <?php endwhile; ?>
                    </tbody>
                  </table>
                   <?php
                  if ($pauseC == 0) {
                    ?>
                    <p class="bg-success">You have No paused product</p>
                    <?php
                  }
                  ?>
                </div>
          </div>
          <div id="menu6" class="tab-pane fade">
           <div class="table-responsive">
                    <table class="table">
                    <thead>
                      <th>
                        <label>PRODUCT</label>
                      </th>
                      <th>
                        <label>SKU</label>
                      </th>
                      <th>
                        <label>QUANTITY</label>
                      </th>
                      <th>
                        <label>PRICE</label>
                      </th>
                      <th>
                        <label>STATUS</label>
                      </th>
                      <th>
                        <label>Options</label>
                      </th>
                    </thead>
                    <tbody>
                       <?php
                    while($sold = mysqli_fetch_assoc($proS)):
                    ?>
                      <tr>
                        <td><?=$sold['title'];?></td>
                        <td><?=$sold['product_code'];?></td>
                        <td><a href="<?=$sold['image'];?>"><img src="<?=$sold['image'];?>" width="70" height="100"></a></td>
                        <td><?=$sold['price'];?></td>
                        <td><?=$sold['addeddate'];?></td>
                        <td>
                            <a href="" class="btn btn-xs btn-warning">Edit</a>
                            <a href="" class="btn btn-xs btn-danger" onclick="confirm('Do You Really Want to delete this file');">Delete</a>
                        </td>
                      </tr>
                    <?php endwhile; ?>
                    </tbody>
                  </table>
                  <?php
                  if ($prosC == 0) {
                    ?>
                    <p class="bg-success">You have No sold product Yet</p>
                    <?php
                  }
                  ?>
                </div>
          </div>
</div>
      </div>
        
    </div>
         
<footer></footer>

<script>
      CKEDITOR.replace( 'editor1' );
</script>
    <!-- Bootstrap core JavaScript
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>