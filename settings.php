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
	<title></title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
.db-bk-color-one {
    background-color:  #cd7f32;
}

.db-bk-color-two {
    background-color:  #839CA5;
}

.db-bk-color-three {
    background-color: #eec900;
}
/*============================================================
PRICING STYLES
==========================================================*/
.db-padding-btm {
    padding-bottom: 50px;
}
.db-button-color-square {
    color: #fff;
    background-color: rgba(0, 0, 0, 0.50);
    border: none;
    border-radius: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
}

    .db-button-color-square:hover {
        color: #fff;
        background-color: rgba(0, 0, 0, 0.50);
        border: none;
    }


.db-pricing-eleven {
    margin-bottom: 30px;
    margin-top: 50px;
    text-align: center;
    box-shadow: 0 0 5px rgba(0, 0, 0, .5);
    color: #fff;
    line-height: 30px;
}

    .db-pricing-eleven ul {
        list-style: none;
        margin: 0;
        text-align: center;
        padding-left: 0px;
    }

        .db-pricing-eleven ul li {
            padding-top: 10px;
            padding-bottom: 10px;
            cursor: pointer;
        }

            .db-pricing-eleven ul li i {
                margin-right: 5px;
            }


    .db-pricing-eleven .price {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 40px 20px 20px 20px;
        font-size: 60px;
        font-weight: 900;
        color: #FFFFFF;
    }

        .db-pricing-eleven .price small {
            color: #B8B8B8;
            display: block;
            font-size: 12px;
            margin-top: 22px;
        }

    .db-pricing-eleven .type {
        background-color: #52E89E;
        padding: 50px 20px;
        font-weight: 900;
        text-transform: uppercase;
        font-size: 30px;
    }

    .db-pricing-eleven .pricing-footer {
        padding: 20px;
    }

.db-attached > .col-lg-4,
.db-attached > .col-lg-3,
.db-attached > .col-md-4,
.db-attached > .col-md-3,
.db-attached > .col-sm-4,
.db-attached > .col-sm-3 {
    padding-left: 0;
    padding-right: 0;
}

.db-pricing-eleven.popular {
    margin-top: 10px;
}

    .db-pricing-eleven.popular .price {
        padding-top: 80px;
    }
</style>

</head>
<body>
    <?php include 'includes/Header2.php';?>
 <div style="width:50px; height:50px;"></div>
 <?php include 'includes/sidebar.php';?>

  
        <div class="db-padding-btm db-attached">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                <div class="db-wrapper">
                    <div class="db-pricing-eleven db-bk-color-one">
                        <div class="price">
                           &#8358;500
                                <small>Monthly</small>
                        </div>
                        <div class="type">
                            BRONZE
                        </div>
                        <ul>
                        <li><i class="fa fa-product-hunt"></i>Up to 5 live product</li>
                        <li><i class="fa fa-wrench"></i>Built-in Features</li>
                        <li><i class="fa fa-shopping-basket"></i>Online Store</li>
                        <li><i class="fa fa-arrow-up"></i>Ability to Upgrade to a higher plan</li>
                    </ul>
                        <div class="pricing-footer">
                            <a href="information.php" class="btn db-button-color-square btn-lg">SELECT PLAN</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                 <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-two popular">
                    <div class="price">
                         &#8358;1,000
                                <small>Monthly</small>
                    </div>
                    <div class="type">
                        SILVER
                    </div>
                    <ul>
                        <li><i class="fa fa-product-hunt"></i>Up to 15 live product</li>
                        <li><i class="fa fa-wrench"></i>Built-in Features</li>
                        <li><i class="fa fa-shopping-basket"></i>Online Store</li>
                        <li><i class="fa fa-arrow-up"></i>Ability to Upgrade to a higher plan</li>
                    </ul>
                    <div class="pricing-footer">

                        <a href="information.php" class="btn db-button-color-square btn-lg">SELECT PLAN</a>
                    </div>
                </div>
                     </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                 <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-three">
                    <div class="price">
                         &#8358;2,000
                                <small>Monthly</small>
                    </div>
                    <div class="type">
                        GOLD
                    </div>
                    <ul>

                        <li><i class="fa fa-product-hunt"></i>Unlimited Product Listing</li>
                        <li><i class="fa fa-wrench"></i>Built-in Features</li>
                        <li><i class="fa fa-shopping-basket"></i>Online Store</li>
                        <li><i class="fa fa-lightbulb-o"></i>Access To Trading Insights</li>
                    </ul>
                    <div class="pricing-footer">

                        <a href="information.php" class="btn db-button-color-square btn-lg">SELECT PLAN</a>
                    </div>
                </div>
                     </div>
            </div>

        </div>

    </div>
    
</body>
</html>