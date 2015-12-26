<div class="modal fade" id="tambah_data" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" method="POST" action="module_barang/action_barang.php" enctype="multipart/form-data">
        <div class="modal-header">
          <p><i class="fa fa-user-plus"></i> Tambah Barang</p>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="pegawai-usr" class="col-lg-4 control-label"> Kode Barang : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="kodebarang" placeholder="Kode Barang">
              </div>
            </div>
            <div class="form-group">
              <label for="pegawai-usr" class="col-lg-4 control-label"> Nama Barang : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="namabarang" placeholder="Nama Barang">
              </div>
            </div>
            <div class="form-group">
              <label for="pegawai-name" class="col-lg-4 control-label"> Harga : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="harga" placeholder="Harga">
              </div>
            </div>

             <div class="form-group">
              <label for="pegawai-name" class="col-lg-4 control-label"> stok : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="stok" placeholder="Stok">
              </div>
            </div>

            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Gambar </label>
              <div class="col-lg-8">
                <input type="file" class="form-control" name="gambar">
                <p class="help-block">Format gambar(jpg/jpeg) dan Ukuran Maksimal 5Mb</p>
              </div>
            </div>
          </div>
        <div class="modal-footer">
          <button class="button-foot" data-dismiss= "modal">Close</button>
          <button class="button-foot" type="submit">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>