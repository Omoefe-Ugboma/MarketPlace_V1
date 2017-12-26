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
        <strong class="text-uppercase text-primary" style="font-size:15px;">All Reports Info</strong> 
      </div>
      </div> 

            <div class="clearfix"></div>
          

          <!--Latest Comments-->
          <div class="col-md-12">
          <div class="panel panel-primary">
     <div class="panel-heading"><h3>Reports</h3></div>
     <div class="panel-body">
        <table class="table table-striped">
            <thead>
              <tr>
                    <th>S.No</th>
                    <th>Date</th>
                    <th>Transation ID</th>
                    <th>Action</th>
              </tr>
                
            </thead>
            <tbody>
                <tr>
                     <td>1</td>
                     <td>2015-10-21</td>
                     <td>Omoefe</td>
                     <td><a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">View</a></td>
                    
                </tr> 
                <tr>
                      <td>2</td>
                     <td>2015-10-21</td>
            
                     <td>Omoefe</td>
                    <td><a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">View</a></td>
                     
                </tr>
                <tr>
                       <td>3</td>
                     <td>2015-10-21</td>
            
                     <td>Omoefe</td>
                    <td><a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">View</a></td>
                    
                </tr>
                <tr>
                       <td>4</td>
                     <td>2015-10-21</td>
            
                     <td>Omoefe</td>
                    <td><a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">View</a></td>
                    
                </tr>
              
            </tbody>
        </table>
     </div>
</div> 


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
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