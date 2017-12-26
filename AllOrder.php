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
             

            <!-- <div style="width: 50px;height: 50px;"></div>-->
 

             <!-- <div style="width: 50px;height: 50px;"></div>-->
           

            <!-- <div style="width: 50px;height: 50px;"></div>-->

          <!--Top Blocks Ends-->
          <!--User Area-->

          <!--Posts list start-->

          <div class="panel panel-primary">
               <div class="panel-heading"><h3>All Orders</h3></div>
               <div class="panel-body">
                  <table class="table table-striped">
                      <thead>
                        <tr>
                              <th>S.No</th>
                              <th>Date</th>
                              <th>Image</th>
                              <th>Title</th>
                              <th>Description</th>
                              <th>Category</th>
                              <th>Author</th>
                              <th>Status</th>
                              <th>View Post</th>
                        </tr>
                          
                      </thead>
                      <tbody>
                          <tr>
                               <td>1</td>
                               <td>2015-10-21</td>
                               <td><img src="image/img.jpg" width="50px"></td>
                               <td>The First Fost</td>
                               <td>I love this animal</td>
                               <td>Nature</td>
                               <td>John</td>
                               <td>Published</td>
                               
                               <td><a href="#" class="btn btn-success btn-xs navbar-btn">View</a></td>
                          </tr> 
                          <tr>
                               <td>2</td>
                               <td>2015-10-21</td>
                               <td><img src="image/img.jpg" width="50px"></td>
                               <td>The First Fost</td>
                               <td>I love this animal</td>
                               <td>Nature</td>
                               <td>John</td>
                               <td>Draft</td>
                               <td><a href="#" class="btn btn-success btn-xs navbar-btn">View</a></td>
                          </tr>
                          <tr>
                               <td>2</td>
                               <td>2015-10-21</td>
                               <td><img src="image/img.jpg" width="50px"></td>
                               <td>The First Fost</td>
                               <td>I love this animal</td>
                               <td>Nature</td>
                               <td>John</td>
                               <td>Published</td>
                               <td><a href="#" class="btn btn-success btn-xs navbar-btn">View</a></td>
                          </tr>
                          <tr>
                               <td>2</td>
                               <td>2015-10-21</td>
                               <td><img src="image/img.jpg" width="50px"></td>
                               <td>The First Fost</td>
                               <td>I love this animal</td>
                               <td>Nature</td>
                               <td>John</td>
                               <td>Draft</td>
                               
                               <td><a href="#" class="btn btn-success btn-xs navbar-btn">View</a></td>

                          </tr>
                        
                      </tbody>
                  </table>
               </div>
          </div>
          
          <!--Pagination-->
        <div class="text-center">
           <div class="pagination">
             <li><a href="#">1</a></li>
             <li><a href="#">2</a></li>
             <li><a href="#">3</a></li>
             <li><a href="#">4</a></li>
             <li><a href="#">5</a></li>
             <li><a href="#">6</a></li>
          </div>
        </div>
        
          <!--Latest Comments-->
           

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