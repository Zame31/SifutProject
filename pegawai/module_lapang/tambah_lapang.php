<div class="modal fade" id="tambah_data" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" method="POST" action="module_lapang/action_lapang.php">
        <div class="modal-header">
          <p><i class="fa fa-user-plus"></i> Tambah</p>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="admin-usr" class="col-lg-4 control-label"> ID Lapangan : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="id_lapang" placeholder="ID Lapang" required>
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label">Nama lapang : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama" placeholder="Nama Lapang" required>
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Aktif </label>
              <div class="col-lg-8">
                <label class="radio-inline">
                  <input type="radio" name="aktif" value="Y"> Iya
                </label>
                <label class="radio-inline">
                  <input type="radio" name="aktif" value="T" checked> Tidak
                </label>
              </div>
            </div>


        </div>
        <div class="modal-footer">
          <button class="button-foot" data-dismiss= "modal">Close</button>
          <button class="button-foot" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
