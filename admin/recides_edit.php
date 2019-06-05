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
        if(isset($_GET['editid']))
        {
          $recideid=$_GET['editid'];
          $getList=getDBid($recideid);
          foreach ($getList as $key => $value) {
            $title=$value['recides_TITLE'];
            $ingredients=$value['recides_INGREDIENTS'];
            $directions=$value['recides_DIRECTIONS'];
            $explanation=$value['recides_EXPLANATION'];
            $cooking=$value['recides_COOKING'];
            $preptime=$value['recides_PREPTIME'];
            $serves=$value['recides_SERVES'];
            $frontexplanation=$value['recides_FRONTEXPLANATION'];
            $description=$value['recides_DESCRIPTION'];
            $tags=$value['recides_TAGS'];
            $categoryID=$value['category_ID'];
            $image=$value['recides_IMAGE'];
            $imageexplode=rtrim($image,",");
            $imageexplode=explode(",",$imageexplode);
          }
        }
       ?>

      <form action="" method="post" enctype="multipart/form-data">
        <div class="row ml-4">
          <div class="form-group col-4">
              <label for="title">Başlık</label>
              <input   class="form-control" type="text" name="title" placeholder="Başlığı giriniz..." value="<?php echo $title; ?>">
              <hr />
              <label for="ingredients">Malzemeler</label>
              <textarea class="form-control"   type="textarea" rows="10" name="ingredients" placeholder="Malzemeleri Giriniz..."><?php echo $ingredients; ?></textarea>
                Her malzeme arasında bir adet <b>+</b> işareti koyunuz.
          </div>
          <div class="form-group col-4">
            <label for="directions">Talimatlar</label>
            <textarea   class="form-control" type="textarea" rows="10" name="directions" placeholder="Talimatları Giriniz..."><?php echo $directions; ?></textarea>
              Her talimatın arasına bir adet <b>+</b> işareti koyunuz.
            <hr />
            <label for="cooking">Pişirme Süresi</label>
            <div class="row">
              <div class="form-group col-6">
                <input   class="form-control" type="text" value="<?php echo $cooking; ?>" name="cooking">
              </div>
            </div>
          </div>
          <div class="form-group col-4">
            <label for="preptime">Hazırlık Süresi</label>
            <div class="row">
              <div class="form-group col-7">
                <input   class="form-control" type="text" value="<?php echo $preptime; ?>" name="preptime">
              </div>
            </div>
            <hr />
            <label for="serves">Kaç Kişilik</label>
            <select   class="form-control" name="serves" style="width:50%">
              <?php editrecidesserves($serves); ?>
            </select>
            <hr />
            <label for="categories">Kategori Seçimi</label>
            <select   class="form-control" name="categories" style="width:50%">
              <?php getCategoryurl($categoryID); ?>
            </select>
            <hr />
            <label for="title">Description</label>
            <input   class="form-control col-9" type="text" value="<?php echo $description; ?>" name="description" placeholder="Description...">
          </div>
        </div>
        <hr />
        <div class="row ml-4">
          <div class="form-group col-12">
            <h3 style="text-align:center">MEVCUT RESİMLER</h3>
            <br />
            <?php
                foreach ($imageexplode as $key => $value) {
                  $nameexplode=explode("/",$imageexplode[$key]);
                  echo "<img src='{$imageexplode[$key]}' style='width:100px;height:100px' /> {$nameexplode[count($nameexplode)-1]} <button class='btn btn-danger'>Sil</button>&emsp;";
                }
             ?>
            <hr />
          </div>
        </div>
        <div class="row ml-4">
          <div class="form-group col-6">
            <label for="">Ekstra Açıklamalar</label>
            <textarea id="explanation" name="explanation" rows="8" cols="80"><?php echo htmlspecialchars($explanation,ENT_QUOTES); ?></textarea>
            <hr />
            <div class="form-group col-10">
              <label for="">Tags</label>
              <textarea class="form-control" id="tags" name="tags" rows="3" cols="80"><?php echo $tags; ?></textarea>
            </div>
          </div>
          <div class="form-group col-6">
            <h3>RESİM EKLE</h3>
            <div class="custom-file col-5 my-4">
              <input type="file" name="about_image1" class="custom-file-input"    aria-describedby="inputGroupFileAddon03">
              <label class="custom-file-label" for="post_image1">Resim 1</label>
            </div>
            <div class="custom-file col-5 my-4">
              <input type="file" name="about_image2" class="custom-file-input"  aria-describedby="inputGroupFileAddon03">
              <label class="custom-file-label" for="post_image2">Resim 2</label>
            </div>
            <div class="custom-file col-5 my-4">
              <input type="file" name="about_image3" class="custom-file-input"  aria-describedby="inputGroupFileAddon03">
              <label class="custom-file-label" for="post_image3">Resim 3</label>
            </div>
            <div class="custom-file col-5 my-4">
              <input type="file" name="about_image4" class="custom-file-input"  aria-describedby="inputGroupFileAddon03">
              <label class="custom-file-label" for="post_image4">Resim 4</label>
            </div>
            <div class="form-group col-10">
              <label for="">Ön Açıklama</label>
              <textarea class="form-control" id="frontexplanation" name="frontexplanation" rows="3" cols="80"><?php echo htmlspecialchars($frontexplanation,ENT_QUOTES); ?></textarea>
            </div>
          </div>
        </div>
        <center><input class="btn btn-success form-control" style="width:30%" type="submit" name="edit" value="Düzenle"></center>
      </form>

      <script>
      tinymce.init({
        selector: '#explanation',
        height: 250,
        theme: 'modern',
        plugins: [
          'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          'searchreplace wordcount visualblocks visualchars code fullscreen',
          'insertdatetime media nonbreaking save table contextmenu directionality',
          'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
      });
      </script>

      <script>
      tinymce.init({
        selector: '#frontexplanation',
        height: 250,
        theme: 'modern',
        plugins: [
          'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          'searchreplace wordcount visualblocks visualchars code fullscreen',
          'insertdatetime media nonbreaking save table contextmenu directionality',
          'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
      });
      </script>

      <?php
      if(isset($_POST['edit']))
      {
        $title=$_POST['title'];
        $ingredients=$_POST['ingredients'];
        $directions=$_POST['directions'];
        $cooking=$_POST['cooking'];
        $preptime=$_POST['preptime'];
        $serves=$_POST['serves'];
        $categories=$_POST['categories'];
        $explanation=$_POST['explanation'];
        $fileimage1=$_FILES['about_image1']['tmp_name'];
        $fileimage2=$_FILES['about_image2']['tmp_name'];
        $fileimage3=$_FILES['about_image3']['tmp_name'];
        $fileimage4=$_FILES['about_image4']['tmp_name'];
        $frontexplanation=$_POST['frontexplanation'];
        $description=$_POST['description'];
        $tags=$_POST['tags'];
        RecideEdit($title,$ingredients,$directions,$explanation,$cooking,$preptime,$serves,$categories,$frontexplanation,$description,$tags,$fileimage1,$fileimage2,$fileimage3,$fileimage4,$_GET['editid']);
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
            <h5 class="modal-title" id="exampleModalLabel">Oturumu kapatmak istiyor musunuz?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Çıkış butonuna basarsanız tüm session bilgileriniz silinecektir.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">İptal</button>
            <a class="btn btn-primary" href="login.html">Çıkış</a>
          </div>
        </div>
      </div>
    </div>

    <?php require "includes/foot.php"; ?>

  </body>

  </html>
