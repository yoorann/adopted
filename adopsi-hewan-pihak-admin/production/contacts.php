<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Pengguna <small>yang aktif</small></h3>
    </div>

    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        
      </div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_content">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
              <ul class="pagination pagination-split">
                <?php 
                    $sql = mysql_query("SELECT * FROM user");
                    $count = mysqli_num_rows($sql);
                    $pageno = ceil($count/9);
                    for($i=1;$i<=$pageno;$i++){
                      echo "
                        <li><a href='#' page='$i' id='page'>$i</a></li>
                      ";
                  }                ?>
              </ul>
            </div>

            <div class="clearfix"></div>
            <?php 
              while ($user = mysql_fetch_array($sql)) {
                extract($user);
              ?>
                  <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                  <div class="well profile_view">
                    <div class="col-sm-12">
                      <div class="left col-xs-7">
                        <h2><?php echo $nama; ?></h2>
                        <p><strong>E-mail: </strong> <br> <?php echo $email; ?> </p>
                        <ul class="list-unstyled">
                          <li><i class="fa fa-phone"></i> Phone #: <?php echo $tlp; ?></li>
                        </ul>
                      </div>
                      <div class="right col-xs-5 text-center">
                        <img src="images/user.png" alt="" class="img-circle img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-12 bottom left">
                      <div class="col-xs-12 col-sm-6 emphasis">
                          <i class="fa fa-building"></i> Alamat: <br> <?php echo $alamat; ?>
                      </div>
                      <div class="col-xs-12 col-sm-6 emphasis">
                        
                      </div>
                    </div>
                  </div>
                </div>
            <?php
              }
             ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>