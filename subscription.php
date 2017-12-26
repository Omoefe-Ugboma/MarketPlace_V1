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
       <legend>
          <h1>My Subscription <a href="" class="btn btn-success btn-sm pull-right"><i class="fa fa-bank"></i> Request Payout</a></h1>
          </legend>
          <legend>
          <div>
            <h5 style="font-size: 15px;">Account Summary &nbsp; <span style="font-size: 12px;">Last Updated: Today</span><span class="pull-right" style="font-size: 12px;">Bank Account Status: Declined</span></h5>
          </div>
          </legend>
            <div class="col-md-4">
               <div class="panel panel-danger">
                   <div class="panel-heading">
                      <div class="row">
                        
                        <div class="col-xs-12 text-center">
                          <div style="font-size: 2.5em">&#8358;20</div>
                         
                        </div>
                      </div> 
                   </div>
                      <div class="panel-footer">
                          <div class="pull-left">Amount</div>
                          <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
                          <div class="clearfix"></div>
                      </div>
               </div>
            </div>

            <!-- <div style="width: 50px;height: 50px;"></div>-->
            <div class="col-md-4">
               <div class="panel panel-success">
                   <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-12 text-center">
                          <div style="font-size: 2.5em">5</div>
                        </div>
                      </div> 
                   </div>
                      <div class="panel-footer">
                          <div class="pull-left">Invoice</div>
                          <div class="pull-right"><i class="fa fa-file-text"></i></div>
                          <div class="clearfix"></div>
                      </div>
               </div>
            </div>

             <!-- <div style="width: 50px;height: 50px;"></div>-->
            <div class="col-md-4">
               <div class="panel panel-warning">
                   <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-12 text-center">
                          <div style="font-size: 2.5em">&#8358;2</div>
                         
                        </div>
                      </div> 
                   </div>
                 
                      <div class="panel-footer">
                          <div class="pull-left">Outstanding</div>
                          <div class="pull-right"><i class="fa fa-file-o"></i></div>
                          <div class="clearfix"></div>
                      </div>
               
               </div>
            </div>
      <div class="clearfix"></div>
    </div><br>



<!--The nest section for users-->
    <div class="col-lg-10">
       <!-- <div style="width: 50px;height: 50px;"></div>-->
        <div class="page-header"><h3>PRODUCT</h3></div>

            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">History</a>

              </li>
              <li><a data-toggle="tab" href="#menu2">Invoice</a></li>
              
            </ul><br><br>
           <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <th>
                        <label>Remarks</label>
                      </th>
                      <th>
                        <label>Date</label>
                      </th>
                      <th>
                        <label>Amount</label>
                      </th>
                      <th>
                        <label>Status</label>
                      </th>
                    </thead>
                  </table>
                          
           <div class="clearfix"></div>
               
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <div class="table-responsive">
                  
                </div>
                
              </div>
              
             <div id="menu2" class="tab-pane fade">
             <div class="table-responsive">
                  
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