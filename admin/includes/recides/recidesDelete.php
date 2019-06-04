<!-- Delete Modal-->
<div class="modal fade" id="deleterecides<?php echo $modalnumber;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Bu tarif silinsin mi?</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body">Eğer bu tarifi silerseniz geri dönüşü olmayacaktır.</div>
  <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">İptal</button>
    <a class="btn btn-primary" href="recides_list.php?delete=<?php echo $recidesID;?>">Sil</a>
  </div>
</div>
</div>
</div>
