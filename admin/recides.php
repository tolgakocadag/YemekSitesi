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


      <form action="" method="post" enctype="multipart/form-data">
        <div class="row ml-4">
          <div class="form-group col-4">
              <label for="title">Başlık</label>
              <input required class="form-control" type="text" name="title" placeholder="Başlığı giriniz...">
              <hr />
              <label for="ingredients">Malzemeler</label>
              <textarea class="form-control" required type="textarea" rows="10" name="ingredients" placeholder="Malzemeleri Giriniz..."></textarea>
                Her malzeme arasında bir adet <b>+</b> işareti koyunuz.
          </div>
          <div class="form-group col-4">
            <label for="directions">Talimatlar</label>
            <textarea required class="form-control" type="textarea" rows="10" name="directions" placeholder="Talimatları Giriniz..."></textarea>
              Her talimatın arasına bir adet <b>+</b> işareti koyunuz.
            <hr />
            <label for="cooking">Pişirme Süresi</label>
            <div class="row">
              <div class="form-group col-3">
                <input required class="form-control" min="0" type="number" name="cookinghours" placeholder="0">
              </div>
              <div class="form-group col-1">
                <label required class="my-2" for="">Saat</label>
              </div>
              <div class="form-group col-3  ">
                <input required class="form-control ml-2" min="0" type="number" name="cookingminutes" placeholder="0">
              </div>
              <div class="form-group col-1">
                <label required class="my-2 ml-1" for="">Dakika</label>
              </div>
            </div>
          </div>
          <div class="form-group col-4">
            <label for="preptime">Hazırlık Süresi</label>
            <div class="row">
              <div class="form-group col-3">
                <input required class="form-control" min="0" type="number" name="preptimehours" placeholder="0">
              </div>
              <div class="form-group col-1">
                <label class="my-2" for="">Saat</label>
              </div>
              <div class="form-group col-3  ">
                <input required class="form-control ml-2" min="0" type="number" name="preptimeminutes" placeholder="0">
              </div>
              <div class="form-group col-1">
                <label required class="my-2 ml-1" for="">Dakika</label>
              </div>
            </div>
            <hr />
            <label for="serves">Kaç Kişilik</label>
            <select required class="form-control" name="serves" style="width:50%">
              <option value="1 kişilik">1 Kişilik</option>
              <option value="2 kişilik">2 Kişilik</option>
              <option value="3 kişilik">3 Kişilik</option>
              <option selected value="4 kişilik">4 Kişilik</option>
              <option value="5 kişilik">5 Kişilik</option>
              <option value="6+ kişilik">6+ Kişilik</option>
            </select>
            <hr />
            <label for="categories">Kategori Seçimi</label>
            <select required class="form-control" name="categories" style="width:50%">
              <?php getCategory(); ?>
            </select>
          </div>
        </div>
        <hr />
        <div class="row ml-4">
          <div class="form-group col-6">
            <label for="">Ekstra Açıklamalar</label>
            <textarea id="explanation" name="explanation" rows="8" cols="80"></textarea>
          </div>
          <div class="form-group col-6">
            <div class="custom-file col-5 my-4">
              <input type="file" name="about_image1" class="custom-file-input" required  aria-describedby="inputGroupFileAddon03">
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
          </div>
        </div>
        <center><input class="btn btn-success form-control" style="width:30%" type="submit" name="create" value="Oluştur"></center>
      </form>

      <script>
      tinymce.init({
        selector: '#explanation',
        height: 300,
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
      if(isset($_POST['create']))
      {
        $title=$_POST['title'];
        $ingredients=$_POST['ingredients'];
        $directions=$_POST['directions'];
        $cookinghours=$_POST['cookinghours'];
        $cookingminutes=$_POST['cookingminutes'];
        if($cookinghours=="0")
        {
          $cooking=$cookingminutes." dakika";
        }
        else {
          $cooking=$cookinghours." saat ".$cookingminutes." dakika";
        }
        $preptimehours=$_POST['preptimehours'];
        $preptimeminutes=$_POST['preptimeminutes'];
        if($preptimehours=="0")
        {
          $preptime=$preptimeminutes." dakika";
        }
        else {
          $preptime=$preptimehours." saat ".$preptimeminutes." dakika";
        }
        $serves=$_POST['serves'];
        $categories=$_POST['categories'];
        $explanation=$_POST['explanation'];
        $post_image="";
        if(strlen( $_FILES['about_image1']['tmp_name'])>0)
        {
          $value=rand(1,30000);
          $post_images = $_FILES['about_image1']['tmp_name'];
          copy($post_images, '../images/recidesimg/' . $value .'_'. $_FILES['about_image1']['name']);
          $post_image.="../images/recidesimg/{$value}_{$_FILES['about_image1']['name']}";
          $post_image.=",";
        }
        if(strlen( $_FILES['about_image2']['tmp_name'])>0)
        {
          $value=getrandmax();
          $post_images = $_FILES['about_image2']['tmp_name'];
          copy($post_images, '../images/recidesimg/' . $value .'_'. $_FILES['about_image2']['name']);
          $post_image.="../images/recidesimg/{$value}_{$_FILES['about_image2']['name']}";
          $post_image.=",";
        }
        if(strlen( $_FILES['about_image3']['tmp_name'])>0)
        {
          $value=getrandmax();
          $post_images = $_FILES['about_image3']['tmp_name'];
          copy($post_images, '../images/recidesimg/' . $value .'_'. $_FILES['about_image3']['name']);
          $post_image.="../images/recidesimg/{$value}_{$_FILES['about_image3']['name']}";
          $post_image.=",";
        }
        if(strlen( $_FILES['about_image4']['tmp_name'])>0)
        {
          $value=getrandmax();
          $post_images = $_FILES['about_image4']['tmp_name'];
          copy($post_images, '../images/recidesimg/' . $value .'_'. $_FILES['about_image4']['name']);
          $post_image.="../images/recidesimg/{$value}_{$_FILES['about_image4']['name']}";
          $post_image.=",";
        }
        RecideAdd('recides',$title,$ingredients,$directions,$explanation,$cooking,$preptime,$serves,$categories,$post_image);
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
