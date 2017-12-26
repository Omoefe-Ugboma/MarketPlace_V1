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
             
<!--The nest section for users-->
    <div class="col-lg-10">
       <div style="width: 50px;height: 50px;"></div> 

            
             <div class="col-lg-12">

                   
               <div class="panel panel-primary">
               <div class="panel-heading">
                My Profile
                 </div>
                 <div class="panel-body">
                 <div class="col-md-3">
                   <img src="image/Profile.png" width="100%" class="img-thumbnail">
                 </div>
                <div class="col-md-7">
                     <h3><u>Omoefe Ugboma</u></h3>
                     <p><i class="glyphicon glyphicon-heart"></i> Web Developer</p>
                     <p><i class="glyphicon glyphicon-road"></i> Block 4, banana Estate, Lagos Nigeria</p> 
                     <p><i class="glyphicon glyphicon-phone"></i> 080454634352</p> 
                     <p><i class="glyphicon glyphicon-envelope"></i> jkomoefey23e@yahoo.co.uk</p>    
                </div>

                  <div class="clearfix"></div>
                      <a href="" class="pull-right btn btn-info" data-toggle="modal" data-target="#myModal">Edit Profile</a>
               </div>
               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
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