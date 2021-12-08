<script >
  function set_url(url){
    $('#iya').attr('href',url);
  }
</script>
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingin menghapus data ?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-footer">
        <button class="btn btn-info" type="button" data-dismiss="modal">Batal</button>
        <a class="btn btn-danger" id="iya">Hapus</a>
      </div>
    </div>
  </div>
</div> 