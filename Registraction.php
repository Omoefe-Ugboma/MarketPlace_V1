
  <!--   $match = '';
    $succuss = "You have registered successfully!";
  if(isset($_POST['submit_user'])){

  	if($_POST['password'] == $_POST['con_password']){
  		$date = date('Y-m-d h:i:s');
  	   $ins_sql = "INSERT INTO users (user_f_name, user_l_name, user_email, user_password, user_gender, user_marital_status, user_phone_no, user_designation, user_website, user_address, user_about_me, user_date) VALUES ('$_POST[first_name]','$_POST[last_name]', '$_POST[email]', '$_POST[password]', '$_POST[gender]', '$_POST[marital_status]', '$_POST[phone_no]','$_POST[designation]', '$_POST[website]', '$_POST[address]', '$_POST[about_me]','$date')";
  	$run_sql = mysqli_query($conn,$ins_sql);
   echo $succuss;
  	}else{
      $match = '<div class="alert alert-danger">Password dose not match</div>';
  	}
  } -->
 

<body>
    <?php include 'includes/header.php';?>
      <div class="container">
      	   <article class="row">
      	   	   <section class="col-lg-8">
      	   	   	  <div class="page-header">
      	   	   	  	   <h2>Registration Form</h2>
      	   	   	  </div>
      	   	   	  <form class="form-horizontal" action="Registraction.php" method="post" role="form">
      	   	   	  	   <div class="form-group">
      	   	   	  	   	   <label for="first_name" class="col-sm-2 control-label">First_Name *</label>
      	   	   	  	   	   <div class="col-sm-8">
      	   	   	  	   	   	     <input type="text" class="form-control" name="first_name" placeholder="insert your first name" id="first_name" required>
      	   	   	  	   	   </div>
      	   	   	  	   </div>
      	   	   	  	   <div class="form-group">
      	   	   	  	   	   <label for="last_name" class="col-sm-2 control-label">Last Name *</label>
      	   	   	  	   	   <div class="col-sm-8">
      	   	   	  	   	   	     <input type="text" class="form-control" name="last_name" placeholder="insert your last name" id="last_name" required>
      	   	   	  	   	   </div>
      	   	   	  	   </div>
      	   	   	  	   <div class="form-group">
      	   	   	  	   	   <label for="email" class="col-sm-2 control-label">Email Adress *</label>
      	   	   	  	   	   <div class="col-sm-8">
      	   	   	  	   	   	     <input type="email" class="form-control" name="email" placeholder="Email Adress" id="email" required>
      	   	   	  	   	   </div>
      	   	   	  	   </div>
      	   	   	  	   <div class="form-group">
      	   	   	  	   	   <label for="password" class="col-sm-2 control-label">Password *</label>
      	   	   	  	   	   <div class="col-sm-8">
      	   	   	  	   	   	     <input type="password" class="form-control" name="password" placeholder="Insert Password" id="password" required>
      	   	   	  	   	   </div>
      	   	   	  	   </div>
      	   	   	  	   <div class="form-group">
      	   	   	  	   	   <label for="con_password" class="col-sm-2 control-label">Confirm Password *</label>
      	   	   	  	   	   <div class="col-sm-8">
      	   	   	  	   	   	     <input type="password" class="form-control" name="con_password" placeholder="Confirm Password" id="con_password" required>
      	   	   	  	   	   </div>
      	   	   	  	   </div>
      	   	   	  	   <?php echo $match;?>
      	   	   	  	   <div class="form-group">
      	   	   	  	   	   <label for="gender" class="col-sm-2 control-label">Gender *</label>
      	   	   	  	   	   <div class="col-sm-3">
      	   	   	  	   	   	      <select class="form-control" name="gender" id="gender" required>
      	   	   	  	   	   	      	<option value="">Select Gender</option>
      	   	   	  	   	   	      	<option value="male">Male</option>
      	   	   	  	   	   	      	<option value="female">Female</option>
      	   	   	  	   	   	      </select>
      	   	   	  	   	   </div>

      	   	   	  	   	   <label for="marital_status" class="col-sm-2 control-label">Marital Status</label>
      	   	   	  	   	   <div class="col-sm-3">
      	   	   	  	   	   	      <select class="form-control" name="marital_status" id="marital_status">
      	   	   	  	   	   	      	<option value="">Select Status</option>
      	   	   	  	   	   	      	<option value="single">Single</option>
      	   	   	  	   	   	      	<option value="married">Married</option>
      	   	   	  	   	   	      	<option value="divorced">Divorced</option>
      	   	   	  	   	   	      	<option value="others">Others</option>
      	   	   	  	   	   	      </select>
      	   	   	  	   	   </div>
      	   	   	  	   </div>
      	   	   	  	   <div class="form-group">
      	   	   	  	   	   <label for="phone_no" class="col-sm-2 control-label">Phone No: *</label>
      	   	   	  	   	   <div class="col-sm-8">
      	   	   	  	   	   	     <input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="Insert your contact No." id="con_password" required>
      	   	   	  	   	   </div>
      	   	   	  	   </div>
      	   	   	  	   <div class="form-group">
      	   	   	  	   	   <label for="designation" class="col-sm-2 control-label">Occupation:</label>
      	   	   	  	   	   <div class="col-sm-8">
      	   	   	  	   	   	     <input type="text" class="form-control" name="designation" placeholder="Insert your Designation." id="con_password">
      	   	   	  	   	   </div>
      	   	   	  	   </div>
      	   	   	  	   <div class="form-group">
      	   	   	  	   	   <label for="website" class="col-sm-2 control-label">Official Website:</label>
      	   	   	  	   	   <div class="col-sm-8">
      	   	   	  	   	   	     <input type="text" class="form-control" name="website" placeholder="Insert your Official Website." id="website">
      	   	   	  	   	   </div>
      	   	   	  	   </div>
      	   	   	  	   <div class="form-group">
      	   	   	  	   	   <label for="address" class="col-sm-2 control-label">Address:</label>
      	   	   	  	   	   <div class="col-sm-8">
      	   	   	  	   	   	    <textarea class="form-control" name="address" id="address" rows="2"></textarea>
      	   	   	  	   	   </div>
      	   	   	  	   </div>
      	   	   	  	   <div class="form-group">
      	   	   	  	   	   <label for="about_me" class="col-sm-2 control-label">About me: *</label>
      	   	   	  	   	   <div class="col-sm-8">
      	   	   	  	   	   	    <textarea class="form-control" name="about_me" id="about_me" rows="6" required></textarea>
      	   	   	  	   	   </div>
      	   	   	  	   </div>
      	   	   	  	  <div class="form-group">
      	   	   	  	  	  <label class="col-sm-2 control-label"></label>
      	   	   	  	  	  <div class="col-sm-8">
      	   	   	  	  	  	 <input type="submit" value="Registeryourself" name="submit_user" class="btn btn-block btn-danger" id="subject">
      	   	   	  	  	  </div>
      	   	   	  	  </div>
      	   	   	  </form>
      	   	   </section>
      	   </article>
      </div>
 </body>
 </html>