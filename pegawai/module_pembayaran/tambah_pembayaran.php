<?php
  $tampilkan = mysql_query("SELECT kode_pesan FROM pemesanan ORDER BY kode_pesan");
?>
<div class="modal fade" id="tambah_data" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" method="POST" action="module_pembayaran/action_pembayaran.php">
        <div class="modal-header">
          <p><i class="fa fa-user-plus"></i> Tambah</p>
        </div>
          <div class="modal-body">
            <div class="form-group" >
              <label for="admin-name" class="col-lg-4 control-label"> Kode Pesan </label>
              <div class="col-lg-8">
                <select class="form-control select-style" name="kode_pesan" required>
                  <?php
                    while ($tampil=mysql_fetch_array($tampilkan)){
                    echo "<option value='$tampil[kode_pesan]'>$tampil[kode_pesan]  </option>";
                  }
                  ?>
                </select>
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Tanggal Transfer : </label>
              <div class="col-lg-8">
                <input type="date" class="form-control" name="tanggal_transfer" required>
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Bank : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="bank" placeholder="Bank" required>
                </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Nominal </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nominal" placeholder="Nominal" required>
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
