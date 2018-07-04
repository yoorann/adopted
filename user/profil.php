<?php 

session_start();
if (!isset($_SESSION['uid'])) {
	header("location:index.php");
}

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
    <title> Dopt a Pet with Bismillah | </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<script src="main.js"></script>

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
                <li><a href="index.php?a=artikel"><i class="fa fa-chain"></i> Artikel</a></li>
								<li><a href="#" data-toggle="modal" data-target="#login"><i class="fa fa-lock"></i> Login</a></li>
								<li><a href="#" data-toggle="modal" data-target="#register"><i class="fa fa-user"></i> Register</a></li>
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
					include 'data.php';
					break;
				case 'keranjangku':
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
				default:
					include 'blog.php';
					break;
			}
		 ?>
	</section>


	<!--  Modals Insert -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form method="POST" action="action/jenis_hewan.php" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
          <h2>Login</h2>
        </div>
      <div class="modal-body">

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email : </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="email" name="email" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password : </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="password" id="last-name" name="pin" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
        </div>
        <div class="modal-footer">
        	<p class="col-md-5 col-sm-5 col-xs-12">Pengguna baru? <a href="#" data-toggle="modal" data-target="#register" data-dismiss="modal">Register</a></p>
        	<div class="col-md-7 col-sm-7 col-xs-12">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" name="submit" class="btn btn-success" value="Login">
        	</div>
        </div>
      </form>
    </div>
  </div>
  </div>
<!-- end Modals -->

<!--  Modals Insert -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form method="POST" action="action/register.php" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
          <h2>Register</h2>
        </div>
      <div class="modal-body">

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama : </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" name="nama" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email : </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="email" id="last-name" name="email" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password : </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="password" id="last-name" name="pin" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Tlp : </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" maxlength="15" id="last-name" name="tlp" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat : </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
           <textarea id="message" class="form-control" name="deskripsi" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-validation-threshold="10"></textarea>
        </div>
      </div>
        </div>
        <div class="modal-footer">
          <p class="col-md-5 col-sm-5 col-xs-12">Sudah punya akun? <a href="#" data-toggle="modal" data-target="#login" data-dismiss="modal">Login</a></p>
        	<div class="col-md-7 col-sm-7 col-xs-12">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" name="submit" class="btn btn-success" value="Register">
        	</div>
        </div>
      </form>
    </div>
  </div>
  </div>
<!-- end Modals -->
	
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
</body>
</html>