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
</head>
<body>
  <?php include 'includes/Header2.php';?>
 <div style="width:50px; height:50px;"></div>
 <?php include 'includes/sidebar.php';?>
             
<!--The store section-->
    <div class="col-lg-10">
       <div style="width: 50px;height: 50px;"></div>
       <div class="col-md-12">
      <div class="well">
        <strong class="text-uppercase text-primary" style="font-size:15px;">Store summary</strong> 
      </div>
      </div> 
            <div class="col-md-3">
               <div class="panel panel-danger">
                   <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-2"><i class="glyphicon glyphicon-signal" style="font-size: 2em; margin-top: 15px;"></i></div>
                        <div class="col-xs-9 text-center">
                        <?php
                        $amountQ = $db->query("SELECT SUM(amount_out) AS total_sales FROM service_charge WHERE seller_id = $id");
                        $amount = mysqli_fetch_assoc($amountQ);
                        ?>
                          <div style="font-size: 1.8em; margin-top: 15px;">&#8358;<?=$amount['total_sales'];?></div>
                          <div style="width: 20px;height: 20px;"></div>
                        </div>
                      </div> 
                   </div>
                 
                      <div class="panel-footer">
                          <div class="pull-left">Total Earning</div>
                          <div class="pull-right"><i class="fa fa-money"></i></div>
                          <div class="clearfix"></div>
                      </div>
                
               </div>
            </div>

            <!-- <div style="width: 50px;height: 50px;"></div>-->
            <div class="col-md-3">
               <div class="panel panel-success">
                   <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-3"><i class="fa fa-list-ul" style="font-size: 3.7em; margin-top: 15px;"></i></div>
                        <div class="col-xs-9 text-right">
                          <div style="font-size: 2em; margin-top: 15px;">500,000</div>
                          <div style="width: 20px;height: 20px;"></div>
                        </div>
                      </div> 
                   </div>
                 
                      <div class="panel-footer">
                          <div class="pull-left">New Orders</div>
                          <div class="pull-right"><i class="fa fa-list-ul"></i></div>
                          <div class="clearfix"></div>
                      </div>
                 
               </div>
            </div>

             <!-- <div style="width: 50px;height: 50px;"></div>-->
            <div class="col-md-3">
               <div class="panel panel-warning">
                   <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-3"><i class="fa fa-calendar" style="font-size: 3.7em; margin-top: 15px;"></i></div>
                        <div class="col-xs-9 text-right">
                          <div style="font-size: 2em; margin-top: 15px;">10 years</div>
                          <div style="width: 20px;height: 20px;"></div>
                        </div>
                      </div> 
                   </div>
                 
                      <div class="panel-footer">
                          <div class="pull-left">Days Selling On Jooglee</div>
                          <div class="pull-right"><i class="fa fa-calendar"></i></div>
                          <div class="clearfix"></div>
                      </div>
                 
               </div>
            </div>

            <!-- <div style="width: 50px;height: 50px;"></div>-->
            <div class="col-md-3">
               <div class="panel panel-info">
                   <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-3"><i class="fa fa-product-hunt" style="font-size: 3.7em; margin-top: 15px;"></i></div>
                        <div class="col-xs-9 text-right">
                        <?php
                        $proQ = $db->query("SELECT * FROM products WHERE store_name = $id AND deleted = 0");
                        $proC = mysqli_num_rows($proQ);
                        ?>
                          <div style="font-size: 2.5em; margin-top: 15px;"><?=$proC;?></div>
                          <div style="width: 20px;height: 20px;"></div>
                        </div>
                      </div> 
                   </div>
                 
                      <div class="panel-footer">
                          <div class="pull-left">Total Products</div>
                          <div class="pull-right"><i class="fa fa-product-hunt"></i></div>
                          <div class="clearfix"></div>
                      </div>
                 
               </div>
            </div><div class="clearfix"></div>

      <div class="col-md-12">
      <div class="well">
        <strong class="text-uppercase text-primary" style="font-size:15px;">Store Perfomance</strong> 
      </div>
      </div>
          <!--Top Blocks Ends-->
          <div class="col-md-3">
               <div class="panel panel-default">
                   <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-2"><i class="fa fa-check-square-o" style="font-size: 4em; margin-top: 15px;"></i></div>
                        <div class="col-xs-9 text-center">
                          <div style="font-size: 2.3em; margin-top: 15px;">200</div>
                          <div style="width: 20px;height: 20px;"></div>
                        </div>
                      </div> 
                   </div>
                 
                      <div class="panel-footer">
                          <div class="pull-left">Successful Sales</div>
                          <div class="pull-right"><i class="fa fa-check-square-o"></i></div>
                          <div class="clearfix"></div>
                      </div>
                
               </div>
            </div>

            <!-- <div style="width: 50px;height: 50px;"></div>-->
            <div class="col-md-3">
               <div class="panel panel-warning">
                   <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-2"><i class="fa fa-spinner" style="font-size: 3.7em; margin-top: 15px;"></i></div>
                        <div class="col-xs-9 text-right">
                          <div style="font-size: 2.3em; margin-top: 15px;">100<span style="font-size: 15px">%</span></div>
                          <div style="width: 20px;height: 20px;"></div>
                        </div>
                      </div> 
                   </div>
                 
                      <div class="panel-footer">
                          <div class="pull-left">Product Quality</div>
                          <div class="pull-right"><i class="fa fa-spinner"></i></div>
                          <div class="clearfix"></div>
                      </div>
                 
               </div>
            </div>

             <!-- <div style="width: 50px;height: 50px;"></div>-->
            <div class="col-md-3">
               <div class="panel panel-info">
                   <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-2"><i class="fa fa-star" style="font-size: 3.7em; margin-top: 15px;"></i></div>
                        <div class="col-sm-9 text-right">
                          <div style="font-size: 2.3em; margin-top: 15px;">100<span style="font-size: 15px">%</span></div>
                          <div style="width: 20px;height: 20px;"></div>
                        </div>
                      </div> 
                   </div>
                 
                      <div class="panel-footer">
                          <div class="pull-left">Delivery Rate</div>
                          <div class="pull-right"><i class="fa fa-star"></i></div>
                          <div class="clearfix"></div>
                      </div>
                 
               </div>
            </div>

            <!-- <div style="width: 50px;height: 50px;"></div>-->
            <div class="col-md-3">
               <div class="panel panel-success">
                   <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-3"><i class="fa fa-commenting-o" style="font-size: 3.7em; margin-top: 15px;"></i></div>
                        <div class="col-xs-9 text-right">
                          <div style="font-size: 2.3em; margin-top: 15px;">100<span style="font-size: 15px">%</span></div>
                          <div style="width: 20px;height: 20px;"></div>
                        </div>
                      </div> 
                   </div>
                 
                      <div class="panel-footer">
                          <div class="pull-left">Communication</div>
                          <div class="pull-right"><i class="fa fa-commenting-o"></i></div>
                          <div class="clearfix"></div>
                      </div>
                 
               </div>
            </div><div class="clearfix"></div>
          <!--User Area-->

           <div class="col-lg-12">
               <div class="panel panel-primary">
                   <div class="panel-heading">
                       <h4>Widgets</h4>
                   </div>
                   <div class="panel-body">
                      <table class="table table-striped">
                         <thead>
                           <tr>
                             <th>S.No</th>
                             <th>Month</th>
                             <th>Amount</th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <td>1</td>
                             <td>Hare@yahoo.com</td>
                             <td>Admin</td>
                           </tr>
                           <tr>
                             <td>1</td>
                             <td>Hare@yahoo.com</td>
                             <td>Subscriber</td>
                           </tr>
                           <tr>
                             <td>1</td>
                             <td>Hare@yahoo.com</td>
                             <td>Subscriber</td>
                           </tr>
                           <tr>
                             <td>1</td>
                             <td>Hare@yahoo.com</td>
                             <td>Subscriber</td>
                           </tr>
                         </tbody>
                      </table>
                   </div>
               </div>
            </div>
            <div class="clearfix"></div>
            
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