<div class="sm-modal modal fade" id="pesan" role="dialog">
  <div class="modal-dialog dialog-size">
    <div class="modal-content content-size">
    <form class="form-horizontal" method="POST" action="module_admin/action_admin.php">
        <div class="modal-header color-head">
          <i class="fa fa-user"></i>
        </div>
        <div class="modal-body body-conf">
            <div class="head">Pesan Lapang</div>
            <div class="desc">Pesan Lapang Secara Online</div>
            <div class="form-group">
              <div class="col-lg-6">
                <input type="text" class="form-control form-color" name="waktu" value="03:00 - 04:00" disabled>
              </div>
              <div class="col-lg-6">
                <input type="text" class="form-control form-color" name="harga" value="Rp.150.000,00" disabled>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-12">
                <input type="text" class="form-control form-color" name="username" placeholder="Nama Lengkap">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-12">
                <input type="text" class="form-control form-color" name="username" placeholder="No Tlp/Hp">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button class="button-foot" type="submit">Pesan</button>
          <button class="button-foot" data-dismiss= "modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>