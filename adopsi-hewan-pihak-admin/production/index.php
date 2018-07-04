<?php 
include '../configDB.php';
session_start();

if (!isset($_SESSION['username'])) {
  header("location:login.php");
}

if ($_SESSION['level']!='admin') {
  header("location:login.php");
}

$admin = mysql_query("SELECT * FROM admin");
$a = mysql_fetch_array($admin);

date_default_timezone_set("Asia/Jakarta");
$date = date("Y");
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title> Adopsi </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	   <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="../vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    
    <style>
      .kode{
        font-size: 20px;
      }
      .detail-hewan{
        font-size: 20px;
      }
    </style>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Petcare Academy</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/<?php echo $a['profil']; ?>" alt="..." class="img-circle profile_img" height="70" width="70">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $a['nama']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Beranda <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?p=dashboard">Statik</a></li>
                    </ul>
                  </li>
                    <li><a><i class="fa fa-table"></i>Data<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="index.php?p=jenis-hewan">Jenis Hewan</a></li>
                        <li><a href="index.php?p=data-hewan">Hewan</a></li>
                        <li><a href="index.php?p=adopsi">Adopsi</a></li>
                      </ul>
                    </li>
                   <li><a href="index.php?p=pengguna"><i class="fa fa-user"></i>Pengguna<!-- <span class="fa fa-chevron-down"></span> --></a>
                    </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/<?php echo $a['image']; ?>" alt=""><?php echo $a['nama']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="action/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <div class="right_col" role="main">
          <?php 
            error_reporting(0);
            switch ($_GET['p']) {  
              case 'dashboard':
                include "dashboard.php";
                break;
              case 'jenis-hewan':
                include 'jenis-hewan.php';
                break;
              case 'data-hewan':
                include 'data-hewan.php';
                break;
              case 'adopsi':
                include 'adopsi.php';
                break;
              case 'pengguna':
                include 'contacts.php';
                break;
              case 'laporan-adopsi-hewan':
                include 'report-adopsi-hewan.php';
                break;
              default:
                include "dashboard.php";
              break;
            }
           ?>
        </div>

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <p>Petcare Academy &copy; <?php echo $date; ?>. Privacy and Terms</p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

   <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Dropzone.js -->
    <script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>

    <!-- select ras -->
    <script>
    $(document).ready(function(){
      $('.jenis').click(function(){
        
        var ras = $(this).val();
        $.ajax({
          method:"POST",
          url:'ras.php',
          data: {jenis: ras},
          success: function(response){
            $('#ras').html(response);
          }
        })
      })
    })
    </script>
    <!-- end -->

    <script>
    $(document).ready(function(){
      $('.hewan').click(function(){
        
        var hewan = $(this).val();
        $.ajax({
          method:"POST",
          url:'ras_hewan.php',
          data: {ras: hewan},
          success: function(response){
            $('#hewan').html(response);
          }
        })
      })
    })
    </script>
    <!-- end -->

    <!-- Modal Jenis -->
    <script type="text/javascript">
      $(document).ready(function(){
        $(".open-modal").click(function(e){
            var j = $(this).attr("id");
          $.ajax({
            url : "modal_jenis.php",
            type : "GET",
            data : { id_jenis: j,},
            success : function(ajaxData){
              $("#ModalJenis").html(ajaxData);
              $("#ModalJenis").modal('show',{backdrop: 'true'});
            }
          })
        })
      })
    </script>
    <!-- Modal Hewan -->
    <script type="text/javascript">
      $(document).ready(function(){
        $(".open-hewan").click(function(e){
            var j = $(this).attr("id");
          $.ajax({
            url : "modal-hewan.php",
            type : "GET",
            data : { id_hewan: j,},
            success : function(ajaxData){
              $("#ModalHewan").html(ajaxData);
              $("#ModalHewan").modal('show',{backdrop: 'true'});
            }
          })
        })
      })
    </script>
    <!-- end modal -->
    
    <!-- Modal Jenis -->
    <script type="text/javascript">
      $(document).ready(function(){
        $(".konfirmasi").click(function(e){
            var k = $(this).attr("id");
          $.ajax({
            url : "konfirmasi.php",
            type : "GET",
            data : { id: k},
            success : function(ajaxData){
              $("#modalKonfirmasi").html(ajaxData);
              $("#modalKonfirmasi").modal('show',{backdrop: 'true'});
            }
          })
        })
      })
    </script>

    <!-- Modal Jenis -->
    <script type="text/javascript">
      $(document).ready(function(){
        $(".batal").click(function(e){
            var tk = $(this).attr("id");
          $.ajax({
            url : "tolak-adopsi.php",
            type : "GET",
            data : { id: tk},
            success : function(ajaxData){
              $("#modalBatal").html(ajaxData);
              $("#modalBatal").modal('show',{backdrop: 'true'});
            }
          })
        })
      })
    </script>

    <script type="text/javascript">
      function confrim_modal(delete_url)
      {
        $('#hapus-jenis').modal('show',{backdrop: 'static'});
        document.getElementById('delete_link').setAttribute('href', delete_url);
      }
    </script>
  
  <!-- Initialize datetimepicker -->
<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>
  </body>
</html>
