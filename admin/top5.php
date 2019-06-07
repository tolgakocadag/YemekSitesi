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

        $gettop5s=getDB('top5');
        $modalcount=0;
        foreach ($gettop5s as $key => $value) {
          $top5_id=$value['top5_ID'];
          $top5_name=$value['top5_NAME'];
          $top5_image=$value['top5_IMAGE'];
          $top5_isrecide=$value['top5_isRecide'];
          echo "
          <div class='row my-4'>
            <div class='form-group ml-4 col-2'>
                <input type='text' readonly class='form-control' required name='' value='{$top5_name}'>
            </div>
            <div class='form-group ml-4 col-2'>
                <input type='text' readonly class='form-control' required name='' value='{$top5_image}'>
            </div>
            <div class='form-group ml-4 col-2'>
                <input type='text' readonly class='form-control' required name='' value='{$top5_isrecide}'>
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
                      <form action="" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                              <label for="menu_name">Başlık</label>
                              <input type="text" class="form-control"  required name="top5_name" value="<?php echo $top5_name;?>">
                          </div>
                          <div class="custom-file">
                            <input type="file" name="about_image" class="custom-file-input"    aria-describedby="inputGroupFileAddon03">
                            <label class="custom-file-label" for="post_image">Resim</label>
                          </div>
                          <div class="form-group my-4">
                              <label for="menu_url">Tarif mi => </label>
                              <input type="checkbox" name="top5_isRecide" value="<?php echo $top5_isrecide?>">
                          </div>
                          <div class="form-group">
                              <input type="hidden" name="top5_id" value="<?php echo $top5_id;?>">
                              <input type="submit" class="btn btn-primary" name="edit_top5" value="Edit">
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    <?php $modalcount++;}

    if(isset($_POST['edit_top5']))
    {
      print_r($_POST);
      $title=$_POST['top5_NAME'];
      $image=$_POST['top5_IMAGE'];
      $top5id=$_POST['top5_id'];
      //top5Edit($title,$image,$top5id);
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
