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
             

    <div class="col-lg-10">
       <div style="width: 50px;height: 50px;"></div> 
          <div class="panel panel-default">

            <div class="panel-heading">
              <h2>Thank You for Choosing to Sell on Jooglee</h2>
                Your Purchase Code is <b>J12345445A</b>
                <p>You can pay through Bank transfer or Bank Deposit<br>
                Account Details: GTBank, <b>234554556666</b> Account Name - <b>JoogleeMarket</b>.</p>
                <p><strong>If You Paid Through a Bank deposit please send a picture of the teller and your purchase code to our email at Jooglee@jooglee.com. However, if you paid through Bank transfer you can send the account owner name, the date and time of the transaction and your purchase code to our email at Jooglee@jooglee.com for confirmation.</strong><br>
                </p>
               
            </div>
 <a href="index.php" class="pull-right btn btn-lg btn-info">Back To Dashboard</a>
          </div>
    </div>
         
<footer></footer>

<script>
      CKEDITOR.replace( 'editor1' );
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>