<div id="editcategory<?php echo $modalnumber; ?>" class="modal fade">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Kategori Düzenle</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <div class="form-group">
                  <label for="categoryName">Kategori İsmi</label>
                  <input type="text" autofocus class="form-control" required name="categoryName" value="<?php echo $categoryName; ?>">
              </div>
              <div class="form-group">
                  <input type="hidden" name="category_ID" value="<?php echo $categoryID; ?>" />
                  <input type="hidden" name="category_URL" value="<?php echo $categoryURL; ?>" />
                  <input type="submit" class="btn btn-primary" name="edit_category" value="Düzenle">
              </div>
            </form>
          </div>
      </div>
  </div>
</div>
