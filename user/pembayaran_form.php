<div class="sm-modal modal fade" id="pembayaran" role="dialog">
      <div class="modal-dialog dialog-size">
        <div class="modal-content content-size">
        <form class="form-horizontal" method="POST" action="module_admin/action_admin.php">
            <div class="modal-header color-head">
              <i class="fa fa-user"></i>
            </div>
            <div class="modal-body body-conf">
                <div class="head">Konfirmasi Pembayaran</div>
                <div class="desc">apabila sudah melakukan pembayaran, silahkan konfirmasi disini</div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" class="form-control form-color" name="kode_pembayaran" placeholder="Kode Pembayaran">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="password" class="form-control form-color" id="password" name="no_rek" placeholder="no Rekening Pembayaran" required>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button class="button-foot" type="submit">Login</button>
              <button class="button-foot" data-dismiss= "modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>