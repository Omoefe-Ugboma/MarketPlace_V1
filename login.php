<?php
//include config
require_once('includes/config.php');

//check if already logged in move to home page
if( $user->is_logged_in() ){ header('Location: dashboard.php'); } 

//process login form if submitted
if(isset($_POST['submit'])){

    $name = $_POST['email'];
    $password = $_POST['password'];
    
    if($user->login($name,$password)){ 
        $_SESSION['email'] = $name;
        header('Location: dashboard.php');
        exit;
    
    } else {
        $error[] = 'Wrong email or password.';
    }

}//end if submit

//define page title
$title = 'Login';

?>
<!DOCTYPE html>
 <html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="OnePlusProduct/lib/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css">

<link rel="stylesheet" type="text/css" href="OnePlus/css/reset.css" />
<link rel="stylesheet" type="text/css" href="OnePlus/css/style.css" />
<link rel="stylesheet" type="text/css" href="OnePlus/css/responsive.css" />
<link rel="stylesheet" type="text/css" href="OnePlus/css/JoogleeHome.css" />

<style type="text/css">
    .mainlogin{
        background: url(OnePlus/images/login.jpg) no-repeat;
    }
    .yeslog{
        margin-top: 20px;
        margin-bottom: 20px;
        padding-bottom: 10px;
        background: #fff;
    }
    .logos{
        background: #fff;
    }
</style>
</head>

<body>

    
   
     
<div class="container">
    <div class="row">

<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 yeslog">
<form role="form" method="post" action="" autocomplete="off">
<br>
<br>
<h2>Please Login</h2>
<hr>

<?php
//check for any errors
if(isset($error)){
    foreach($error as $error){
        echo '<p class="bg-danger">'.$error.'</p>';
    }
}

?>

<div class="form-group">
    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" value="<?php if(isset($error)){ echo $_POST['email']; } ?>" tabindex="1">
</div>

<div class="form-group">
    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
</div>


<hr>
<div class="row">
    <div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
   </div>
            </form>
        </div>
    </div>
    </div>


 </body>
 </html>
