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
             
<!--The nest section for users-->
    <div class="col-lg-10">
       <!-- <div style="width: 50px;height: 50px;"></div>-->
        <div class="page-header"><h1>Orders</h1></div>
          <div class="container-fluid">
        <div class="container">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">ALL</a></li>
              <li><a data-toggle="tab" href="#menu2">NEW</a></li>
              <li><a data-toggle="tab" href="#menu3">SHIPPED</a></li>
              <li><a data-toggle="tab" href="#menu3">DELIVERED</a></li>
              <li><a data-toggle="tab" href="#menu3">RETURNED</a></li>
              <li><a data-toggle="tab" href="#menu3">ARBITRATION</a></li>
              <li><a data-toggle="tab" href="#menu3">CANCELED</a></li>
            </ul><br><br>
           <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <th>
                        <label>ORDER</label>
                      </th>
                      <th>
                        <label>DATE</label>
                      </th>
                      <th>
                        <label>AMOUNT</label>
                      </th>
                      <th>
                        <label>PAYMENT METHOD</label>
                      </th>
                      <th>
                        <label>DELIVERY STATUS</label>
                      </th>
                    </thead>
                  </table>
                          
           <div class="clearfix"></div>
               
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <div class="table-responsive">
                  <!--<table class="table">
                    <thead>
                      <th>
                        <label>ORDER</label>
                      </th>
                      <th>
                        <label>DATE</label>
                      </th>
                      <th>
                        <label>AMOUNT</label>
                      </th>
                      <th>
                        <label>PAYMENT METHOD</label>
                      </th>
                      <th>
                        <label>DELIVERY STATUS</label>
                      </th>
                    </thead>
                  </table>-->
                </div>
                <h3>HOME</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div id="menu1" class="tab-pane fade">
                <h3>Menu 1</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
             <div id="menu2" class="tab-pane fade">
            <h3>Menu 2</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
          </div>
          <div id="menu3" class="tab-pane fade">
            <h3>Menu 3</h3>
            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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