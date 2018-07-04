<?php 

include '../configDB.php';
session_start();
if (!isset($_SESSION['id'])) {
  header("location:../index.php");
}else{
date_default_timezone_set("Asia/Jakarta");
$date = date("Y");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:url" content="localhost/adopsi-hewan/">
    <link rel="canonical" href="localhost/adopsi-hewan/">
    <title> Adopsi Hewan </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!-- ico -- >
    <link rel="icon" href="../adopsi-hewan-pihak-admin/production/images/favicon.ico" type="image/ico" />

    <!-- confrim -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
  <header id="header"><!--header-->
    
    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="logo pull-left">
              <a href="index.php"><img src="images/logo.png" alt="" height="70"></a>
            </div>
          </div>

          <div class="col-sm-8">
            <div class="shop-menu pull-right">
              <ul class="nav navbar-nav">
                <li><a href="index.php?a=beranda"><i class="fa fa-home"></i> Beranda</a></li>
                <li><a href="index.php?a=hewan"><i class="fa fa-github"></i> Hewan</a></li>
                <li><a href="index.php?a=adopsi"><i class="fa fa-heart"></i> Adopsi</a></li>
                <!-- <li><a href="index.php?a=artikel"><i class="fa fa-chain"></i> Artikel</a></li> -->
                <li><a href="action/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-middle-->
  
  </header><!--/header-->
    
  <section>
    <?php 
      error_reporting(0);
      switch ($_GET['a']) {
        case 'beranda':
          include 'blog.php';
          break;
        case 'hewan':
          include 'pilihhewan.php';
          break;
        case 'detail':  
          include 'detail-hewan.php';
          break;
        case 'adopsi':
          include 'cart.php';
          break;
          /*
        case 'data-hewan':
          include 'hewan.php';
          break;
        case 'data-cari':
          include 'pilih.php';
          break;*/
        case 'data':
          include 'cart.php';
          break;
        case 'transaksi':
          include 'checkout.php';
          break;
        case 'logout':
          include 'logout.php';
          break;
        case '404':
          include '404.php';
          break;
        case 'detail-rawat-aku':
          include 'detail-rawat.php';
          break;
        default:
          include 'blog.php';
          break;
      }
     ?>
  </section>
  
  <footer id="footer"><!--Footer-->
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <p class="text-center"><small>Copyright ©</small> <?php echo $date; ?> Petcare Academy. <small>All rights reserved.</small></p>
        </div>
      </div>
    </div>
    
  </footer><!--/Footer-->
  

  
    <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>


<script type="text/javascript">
      $(document).ready(function(){
        $(".adopsi").click(function(e){
            var j = $(this).attr("id");
          $.ajax({
            url : "donasi.php",
            type : "GET",
            data : { id: j},
            success : function(ajaxData){
              $("#modalDonasi").html(ajaxData);
              $("#modalDonasi").modal('show',{backdrop: 'true'});
            }
          })
        })
      })
    </script>

</body>
</html>


<?php 
}
 ?>