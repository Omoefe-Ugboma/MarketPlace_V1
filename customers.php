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
        <strong class="text-uppercase text-primary" style="font-size:15px;">Buyers Information</strong> 
      </div>
      </div> 


            <div class="clearfix"></div>

          <!--User Area-->

           <div class="col-lg-8">
               <div class="panel panel-primary">
                   <div class="panel-heading">
                       <h4>All Customers</h4>
                   </div>
                   <div class="panel-body">
                      <table class="table table-striped">
                         <thead>
                           <tr>
                             <th>S.No</th>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Phone</th>
                             <th>Total Items</th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <td>1</td>
                             <td>Hare@yahoo.com</td>
                             <td>Admin</td>
                             <td>Admin</td>
                             <td>Admin</td>
                           </tr>
                           <tr>
                             <td>1</td>
                             <td>Hare@yahoo.com</td>
                             <td>Subscriber</td>
                             <td>Subscriber</td>
                             <td>Subscriber</td>
                           </tr>
                           <tr>
                             <td>1</td>
                             <td>Hare@yahoo.com</td>
                             <td>Subscriber</td>
                             <td>Subscriber</td>
                             <td>Subscriber</td>
                           </tr>
                           <tr>
                             <td>1</td>
                             <td>Hare@yahoo.com</td>
                             <td>Subscriber</td>
                             <td>Subscriber</td>
                             <td>Subscriber</td>
                           </tr>
                         </tbody>
                      </table>
                   </div>
               </div>
            </div>
             <div class="col-lg-4">

                   
               <div class="panel panel-primary">
               <div class="panel-heading">
                 <div class="col-md-7">
                  <div class="page-header"><h4>Omoefe Ugboma</h4></div>
                  </div>
                 <div>
                   <img src="image/IMG-20170406-WA0020.jpg" width="30%" class="img-circle">
                 </div>

                   <div class="panel-body">
                      <table class="table table-condensed">
                      
                         <tbody>
                           <tr>
                             <td>Role:</td>
                             <td>Admin</td>
                           </tr>
                           <tr>
                             <td>Job:</td>
                             <td>Developer</td>
                           </tr>
                           <tr>
                             <td>Email:</td>
                             <td>omoefe@yahoo.com</td>
                           </tr>
                           <tr>
                             <td>Contact:</td>
                             <td>+2348177545888</td>
                           </tr>
                           <tr>
                             <td>Country:</td>
                             <td>Nigerian</td>
                           </tr>
                         </tbody>
                      </table>
                   </div>
               </div>
               
               </div>
            </div>

            <div class="clearfix"></div>
            
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