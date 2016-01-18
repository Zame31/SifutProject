 <div class="sm-modal modal fade" id="pembayaran" role="dialog">
      <div class="modal-dialog dialog-size">
        <div class="modal-content content-size">
        <form method="post" action="user/pembayaran/pembayaran.php" onSubmit="return validasi(this)" class="form-horizontal" enctype="multipart/form-data">
            <div class="modal-header color-head">
              <i class="fa fa-user"></i>
            </div>
            <div class="modal-body body-conf">
              <div class="head">Konfirmasi Pembayaran</div>
              <div class="desc">silahkan konfirmasi pembayaranmu disini</div>
              <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="kode_pesan" placeholder="Kode Pesan" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="date" class="form-control form-color" name="tanggal" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="bank" placeholder="Nama Bank" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="nominal" placeholder="Jumlah Transfer" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <div class="form-title"> Upload Bukti Transfer</div>
                    <input type="file" class="form-control form-color" name="bukti" required>
                    <p class="help-block">Format (jpg/jpeg) dan Ukuran Maksimal 5Mb</p>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
     <button class="button-foot" type="submit">Konfirmasi</button>
              <button class="button-foot" data-dismiss= "modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
