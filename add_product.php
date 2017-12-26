<?php
require_once('includes/config.php');
if( !$user->is_logged_in() ){ header('Location: login.php'); }

require_once "core/init.php";
$id = $_SESSION['id'];

$user = $db->query("SELECT * FROM sellers WHERE id = $id");
$userfetch = mysqli_fetch_assoc($user);


 $brandQuery = $db->query("SELECT * FROM brand ORDER BY brand");
  $parentQuery = $db->query("SELECT * FROM categories WHERE parent = 0 ORDER BY category");
   
   if($_POST){
  
  if(!empty($_POST['sizes'])){
    $sizeString = sanitize($_POST['sizes']);
    $sizeString = rtrim($sizeString,','); 
    $sizesArray = explode(',', $sizeString);
    $sArray = array();
    $qArray = array();
    foreach ($sizesArray as $ss) {
       $s = explode(':', $ss);
       $sArray[] = $s[0];
       $qArray[] = $s[1]; 
    }
  }
 }  

 function GetImageExtension($imagetype)
  {
    if(empty($imagetype)) return false;
    switch ($imagetype)
    {
      case 'image/bmp':return '.bmp';
      case 'image/gif':return '.gif';
      case 'image/jpeg':return '.jpeg';
      case 'image/jpg':return '.jpg';
      case 'image/png':return '.png';
      default:return false;
    }
  }
  
  if (isset($_POST['submit'])) {
    if ($_POST['title'] == '') {
      $error[] = "Title cannot be left empty";
    }
     if ($_POST['sizes'] == '') {
      $error[] = "Size cannot be left empty";
    }
     if ($_POST['parent'] == '') {
      $error[] = "Parent cannot be left empty";
    }
     if ($_POST['child'] == '') {
      $error[] = "Child cannot be left empty";
    }
    if (empty($_FILES['photo']['name'])) {
      $error[] = "First Image cannot be left empty";
    }
    if (empty($_FILES['photo2']['name'])) {
      $error[] = "Second Image cannot be left empty";
    }
    if ($_POST['description'] == '') {
      $error[] = "Description cannot be left empty";
    }
    if (!empty($_FILES["photo"]["name"])) {

      $file_name=$_FILES["photo"]["name"];
      $temp_name=$_FILES["photo"]["tmp_name"];
      $imagetype=$_FILES["photo"]["type"]; 

      $file_name2=$_FILES["photo2"]["name"];
      $temp_name2=$_FILES["photo2"]["tmp_name"];
      $imagetype2=$_FILES["photo2"]["type"];

    
      $moreImage3=$_FILES['photo3']['name'];
     $temp_name3=$_FILES['photo3']['tmp_name'];
    move_uploaded_file( $temp_name3,"images/products/$moreImage3");
 
      $moreImage4=$_FILES['photo4']['name'];
     $temp_name4=$_FILES['photo4']['tmp_name'];
    move_uploaded_file( $temp_name4,"images/products/$moreImage4");
 
      

        $ext=GetImageExtension($imagetype);
        $imagename=time().$ext;
        $target_path="images/products/".$imagename;
        $moreImage='/JoogleeMarket1/JoogleeMarket/admin/'.$target_path;
        move_uploaded_file($temp_name,$target_path);
        
        $ext2=GetImageExtension($imagetype2);
        $imagename2=time().'2'.$ext2;
        $target_path2="images/products/".$imagename2;
        $moreImage2='/JoogleeMarket1/JoogleeMarket/admin/'.$target_path2;
         move_uploaded_file($temp_name2,$target_path2);

       

      $title = sanitize($_POST['title']);
      $brand = sanitize($_POST['brand']);
      $parent = sanitize($_POST['parent']);
      $child = sanitize($_POST['child']);
      $price = sanitize($_POST['price']);


      $list_price = sanitize($_POST['list_price']);
      $sizes = sanitize($_POST['sizes']);
      $description = sanitize($_POST['description']);
      $color = sanitize($_POST['color']);
      $feature_1 = sanitize($_POST['feature_1']);
      $feature_2 = sanitize($_POST['feature_2']);
      $feature_3 = sanitize($_POST['feature_3']);
      $warranty = sanitize($_POST['warranty']);
      $feature_4 = sanitize($_POST['feature_4']);
      $product_code = mt_rand();

        if (!isset($error)) {
           $query_upload="INSERT INTO products (title,price,list_price,brand,parent,
          categories,sizes,image,image2,image3,image4,description,product_code,store_name,color,feature1,
          feature2,feature3,feature4,product_warranty)
        values ('".$title."','".$price."','".$list_price."','".$brand."',
          '".$parent."','".$child."','".$sizes."','".$moreImage."','".$moreImage2."',
          '".$moreImage3."','".$moreImage4."','".$description."','".$product_code."',
          '".$id."','".$color."','".$feature_1."','".$feature_2."','".$feature_3."',
          '".$feature_4."','".$warranty."')"; 
           mysqli_query($db,$query_upload);
           echo "Image has been uploaded";
           header("Location:products.php");   
        }
    }
  }



?>
<!DOCTYPE html>
<html>
<head>
  <title>JoogleeMT</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js" ></script>
   <script src="js/jquery-3.2.1.min.js"></script>
   <script>tinymce.init({ selector:'textarea' });</script>
    <script src="https://cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>
    <style>
      .file {
  position: relative;
}
.file label {
  background:  #d43f3a;
  padding: 5px 20px;
  color: #fff;
  font-weight: bold;
  font-size: .9em;
  transition: all .4s;
  border-radius: 20px;
}
.file input {
  position: absolute;
  display: inline-block;
  left: 0;
  top: 0;
  opacity: 0.01;
  cursor: pointer;
}
.file input:hover + label,
.file input:focus + label {
  background:  #843534;
  color: #fff;
}
    </style>
</head>
<body>
  <?php include 'includes/Header2.php';?>
 <div style="width:50px; height:50px;"></div>
 <?php include 'includes/sidebar.php';?>
             
<!--The nest section for users-->
    <div class="col-lg-10">
       <!-- <div style="width: 50px;height: 50px;"></div>-->
        <div class="page-header"><h1>Add Product <a href="Products.php" class="pull-right btn btn-default">Back</a></h1></div>
          <div class="container-fluid">
           <form  method="post" enctype="multipart/form-data">
           <?php

              if (isset($error)) {
                foreach ($error as $error) {
                ?>
                 <p class='bg-danger'><?=$error;?></p>
                 <?php
                }
              }
          ?>
           <div class="modal fade" id="sizesModal" tabindex="-1" role="dialog" aria-labelledby="sizesModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="sizesModalLabel">Size & Quantity</h4>
      </div>
      <div class="modal-body">
       <div class="container-fluid">
        <?php for($i=1;$i <= 12; $i++): ?>
           <div class="form-group col-md-4">
             <label for="size<?=$i;?>">Size:</label>
             <input type="text" name="size<?=$i;?>" id="size<?=$i;?>" value="<?=((!empty($sArray[$i-1]))?$sArray[$i-1]:'');?>" class="form-control">
           </div>
           <div class="form-group col-md-2">
             <label for="qty<?=$i;?>">Quantity:</label>
             <input type="number" name="qty<?=$i;?>" id="qty<?=$i;?>" value="<?=((!empty($qArray[$i-1]))?$qArray[$i-1]:'');?>" min="0" class="form-control">
           </div>
        <?php endfor; ?>
        </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="updateSizes();$('#sizesModal').modal('toggle');return false;">Save</button>
      </div>
    </div>
  </div>
</div>

           <div class="form-group col-md-3 file">
            <b>First Image:</b>
             <input type="file" name="photo" id="photo" />
             <label for="photo">Click to Upload your first&nbsp;image</label>
           </div>
           <div class="form-group col-md-3 file">
            <b>Second Image:</b>
             <input type="file" name="photo2" id="photo2" />
             <label for="photo2">Click to Upload your second image</label>
           </div>
          <div class="form-group col-md-3 file">
            <b>Third Image:</b>
             <input type="file" name="photo3" id="photo3" />
             <label for="photo3">Click to Upload your third image</label>
           </div>
           <div class="form-group col-md-3 file">
            <b>Fourth Image:</b>
             <input type="file" name="photo4" id="photo4" />
             <label for="photo4">Click to Upload your Fourth image</label>
           </div>
           <div class="form-group col-md-6">
             <label for="title">Title*</label>
             <input id="title" type="text" class="form-control" name="title" value="<?=((isset($_POST['title']))?sanitize($_POST['title']):''); ?>"  placeholder="Please enter Title">
           </div> 
            <div class="form-group col-md-6">
             <label for="brand">Brands</label>
             <select id="brand" name="brand" class="form-control">
               <option value=""<?=((isset($_POST['brand']) && $_POST['brand']=='')?'selected':'');?>></option>
               <?php while($brand = mysqli_fetch_assoc($brandQuery)): ?>
               <option value="<?=$brand['id']?>"<?=((isset($_POST['brand']) && $_POST['brand']==$brand['id'])?'selected':'');?>><?=$brand['brand']?></option>
             <?php endwhile; ?>
             </select>
           </div>
            <div class="form-group col-md-6">
              <label for="parent">Parent Category*:</label>
              <select class="form-control" id="parent" name="parent">
                <option value=""<?=((isset($_POST['parent']) && $_POST['parent'] == '')?'select':'');?>></option>
                <?php while($parent = mysqli_fetch_assoc($parentQuery)): ?>
                  <option value="<?=$parent['id'];?>"<?=((isset($_POST['parent']) && $_POST['parent'] == $parent['id'])?'select':'');?>><?=$parent['category'];?></option>
                <?php endwhile; ?>  
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="child">Child Category*:</label>
              <select id="child" name="child" class="form-control"></select>
            </div>

           <div class="form-group col-md-6">
               <label>Quantity &amp; Sizes*:</label>
            <button class="btn btn-default form-control" onclick="$('#sizesModal').modal('toggle');return false;">Quantity &amp; Sizes</button>
           </div>

           <div class="form-group col-md-6">
          <label for="sizes">Sizes & Qty Preview*</label>
           <input type="text" class="form-control" name="sizes" id="sizes" value="<?=((isset($_POST['sizes']))?$_POST['sizes']:'');?>" readonly>
           </div>
  <div class="form-group col-md-6">
      <label for="price">Price*:</label>
      <input type="text" id="price" name="price" class="form-control" value="<?=((isset($_POST['price']))?sanitize($_POST['price']):'');?>" placeholder="Please enter price without space or comma">
    </div>
    <div class="form-group col-md-6">
      <label for="list_price">List Price:</label>
      <input type="text" id="list_price" name="list_price" class="form-control" value="<?=((isset($_POST['list_price']))?sanitize($_POST['list_price']):'');?>" placeholder="Please enter Old Price without space or comma">
    </div>
   <div class="form-group col-md-6">
      <label for="color">Color:</label>
      <input type="text" id="color" name="color" class="form-control" value="<?=((isset($_POST['color']))?sanitize($_POST['color']):'');?>" placeholder="Please enter Color">
    </div>
    <div class="form-group col-md-6">
      <label for="warranty">Product Warranty</label>
      <input type="text" id="warranty" name="warranty" class="form-control" value="<?=((isset($_POST['warranty']))?sanitize($_POST['warranty']):'');?>" placeholder="Please enter warranty if no warranty leave blank">
    </div>
    <div class="form-group col-md-3">
      <label for="feature_1">Feature 1</label>
      <input type="text" id="feature_1" name="feature_1" class="form-control" value="<?=((isset($_POST['feature_1']))?sanitize($_POST['feature_1']):'');?>" placeholder="Please enter 1st Feature">
    </div>
    <div class="form-group col-md-3">
      <label for="feature_2">Feature 2</label>
      <input type="text" id="feature_2" name="feature_2" class="form-control" value="<?=((isset($_POST['feature_2']))?sanitize($_POST['feature_2']):'');?>" placeholder="Please enter 2nd Feature">
    </div>
    <div class="form-group col-md-3">
      <label for="feature_3">Feature 3</label>
      <input type="text" id="feature_3" name="feature_3" class="form-control" value="<?=((isset($_POST['feature_3']))?sanitize($_POST['feature_3']):'');?>" placeholder="Please enter 3rd Feature">
    </div>
    <div class="form-group col-md-3">
      <label for="feature_4">Feature 4</label>
      <input type="text" id="feature_4" name="feature_4" class="form-control" value="<?=((isset($_POST['feature_4']))?sanitize($_POST['feature_4']):'');?>" placeholder="Please enter 4th Feature">
    </div>
    <div class="form-group col-md-12">
      <label for="description">Description*</label>
      <textarea name="description" id="description" class="form-control"  placeholder="Please enter Description of more than 20 words" style="resize:none;" rows="4"></textarea>
    </div>
           
    <div class="form-group pull-right">
    <input type="submit" value="Add Product" class="form-control btn btn-danger pull-right" name="submit">
    </div><div class="clearfix"></div>
           </form>
      </div>
                    
    </div>
         
<footer>
  <?php include "includes/footer.php"; ?>
</footer>



</body>
</html>