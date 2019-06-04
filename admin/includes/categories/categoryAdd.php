<!--KULLANICI EKLEME-->
<div id="addcategory" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kategori Ekle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                  <div class="form-group">
                      <label for="categoryName">Kategori İsmi</label>
                      <input type="text" autofocus class="form-control" required name="categoryName">
                  </div>
                  <div class="form-group">
                      <input type="submit" class="btn btn-primary" name="add_category" value="Ekle">
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_POST['add_category']))
{
  CategoryAdd('categories',$_POST['categoryName']);
}
 ?>
