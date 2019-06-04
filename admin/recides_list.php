
  <?php
    require "includes/head.php";
    ?>
    <body id="page-top">

      <!-- Page Wrapper -->
      <div id="wrapper">

    <?php require "includes/sidebar.php"; ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php require "includes/topbar.php"; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3 row">
            <h6 class="m-0 font-weight-bold text-primary">Kategoriler</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive my-4">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Başlık</th>
                    <th>Kategori</th>
                    <th>Yolu</th>
                    <th>Görüntülenme</th>
                    <th>İşlemler</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Başlık</th>
                    <th>Kategori</th>
                    <th>Yolu</th>
                    <th>Görüntülenme</th>
                    <th>İşlemler</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                  $recides_list=getDB("recides");
                  $modalnumber=0;
                  foreach ($recides_list as $key => $value) {
                    $recidesID=$value["recides_ID"];
                    $recidesTITLE=$value["recides_TITLE"];
                    $recidesURL=$value["recides_URL"];
                    $recidesINGREDIENTS=$value["recides_INGREDIENTS"];
                    $recidesDIRECTIONS=$value["recides_DIRECTIONS"];
                    $recidesCOOKING=$value["recides_COOKING"];
                    $recidesPREPTIME=$value["recides_PREPTIME"];
                    $recidesSERVES=$value["recides_SERVES"];
                    $recidesIMAGE=$value["recides_IMAGE"];
                    $recidesHIT=$value["recides_HIT"];
                    $recidesCategory=$value["category_ID"];
                    echo "<tr>
                      <td>{$recidesTITLE}</td>
                      <td>{$recidesCategory}</td>
                      <td>{$recidesURL}</td>
                      <td>{$recidesHIT}</td>
                      <td>
                        <a class='btn btn-primary btn-circle' href='recides_edit.php?editid={$recidesID}''><i class='fas fa-edit'></i></a>
                        <a class='btn btn-danger btn-circle' data-toggle='modal' data-target='#deleterecides{$modalnumber}' href='#'><i class='fas fa-trash'></i></a>
                      </td>
                    </tr>";
                    //Kategori Düzenle
                    //require "includes/recides/recidesEdit.php";
                    //Kategori Sil
                    require "includes/recides/recidesDelete.php";
                    $modalnumber++;
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php require "includes/footer.php"; ?>
        <!-- End of Footer -->

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
        <h5 class="modal-title" id="exampleModalLabel">Bu kategori Silinsin Mi?</h5>
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

        <!--Kategori Düzenle-->
        <?php
        if(isset($_POST["edit_recides"]))
        {
        RecideEdit("recides",$_POST["categoryName"],$_POST["category_ID"],$_POST["category_URL"]);
        }
        ?>

        <!--Kategori Sil-->
        <?php
        if(isset($_GET["delete"])){
        RecideDelete("recides",$_GET["delete"]);
        }
        ?>

        <?php require "includes/foot.php"; ?>

        </body>

        </html>
