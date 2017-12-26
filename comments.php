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
          <!--Latest Comments-->
          <div class="panel panel-primary">
               <div class="panel-heading"><h3>Latest Comments</h3></div>
               <div class="panel-body">
                  <table class="table table-striped">
                      <thead>
                        <tr>
                              <th>S.No</th>
                              <th>Date</th>
                              <th>Author</th>
                              <th>Email</th>
                              <th>Post</th>
                              <th>Comments</th>
                              <th>Status</th>
                              <th>Delete</th>
                        </tr>
                          
                      </thead>
                      <tbody>
                          <tr>
                               <td>1</td>
                               <td>2015-10-21</td>
                               <td>Omoefe</td>
                               <td>Omoefe@yahoo.com</td>
                               <td>2</td>
                               <td>I love The Lord</td>
                               <td>Approved</td>
                               <td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
                          </tr> 
                          <tr>
                                <td>1</td>
                               <td>2015-10-21</td>
                               <td>Omoefe</td>
                               <td>Omoefe@yahoo.com</td>
                               <td>2</td>
                               <td>I love The Lord</td>
                               <td><a href="#" class="btn btn-warning btn-xs">Approve</a></td>
                               <td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
                          </tr>
                          <tr>
                                 <td>1</td>
                               <td>2015-10-21</td>
                               <td>Omoefe</td>
                               <td>Omoefe@yahoo.com</td>
                               <td>2</td>
                               <td>I love The Lord</td>
                               <td>Approved</td>
                             <td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
                          </tr>
                          <tr>
                                 <td>1</td>
                               <td>2015-10-21</td>
                               <td>Omoefe</td>
                               <td>Omoefe@yahoo.com</td>
                               <td>2</td>
                               <td>I love The Lord</td>
                               <td><a href="#" class="btn btn-warning btn-xs">Approve</a></td>
                                <td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
                          </tr>
                        
                      </tbody>
                  </table>
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