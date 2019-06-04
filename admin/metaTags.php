<?php require "includes/head.php"; ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php require "includes/sidebar.php"; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php require "includes/topbar.php"; ?>

        <?php

        $getMetaTags=getDB('metatags');
        $modalcount=0;
        foreach ($getMetaTags as $key => $value) {
          $metatag_id=$value['metatag_ID'];
          $metatag_name=$value['metatag_NAME'];
          $metatag_content=$value['metatag_CONTENT'];
          echo "
          <div class='row my-4'>
            <div class='form-group ml-4 col-2'>
                <input type='text' readonly class='form-control' required name='' value='{$metatag_name}'>
            </div>
            <div class='form-group ml-4 col-2'>
                <input type='text' readonly class='form-control' required name='' value='{$metatag_content}'>
            </div>
            <a class='btn btn-primary btn-circle' data-toggle='modal' data-target='#edit_modal{$modalcount}' href='#'><i class='fas fa-edit'></i></a>
          </div>";
        ?>
        <!--Meta tags LİSTELEME FINISH-->
      <div id="<?php echo 'edit_modal'.$modalcount; ?>" class="modal fade">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Meta Tag</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form action="" method="post">
                          <div class="form-group">
                              <label for="menu_name">Name</label>
                              <input type="text" class="form-control" readonly required name="metatag_name" value="<?php echo $metatag_name;?>">
                          </div>
                          <div class="form-group">
                              <label for="menu_url">Content</label>
                              <input type="text" class="form-control" required name="metatag_content" value="<?php echo $metatag_content?>">
                          </div>
                          <div class="form-group">
                              <input type="hidden" name="metatag_id" value="<?php echo $metatag_id;?>">
                              <input type="submit" class="btn btn-primary" name="edit_metatag" value="Edit">
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    <?php $modalcount++;}

    if(isset($_POST['edit_metatag']))
    {
      $content=$_POST['metatag_content'];
      $metaid=$_POST['metatag_id'];
      metaEdit($content,$metaid);
    }
         ?>

      </div>
        <?php require "includes/footer.php"; ?>
    </div>
      <!-- End of Content Wrapper -->

  </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <?php require "includes/foot.php"; ?>

  </body>

  </html>
