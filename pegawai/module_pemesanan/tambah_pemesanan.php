<?php
  $tampilkan = mysql_query("SELECT id_lapang,nama FROM lapang ORDER BY id_lapang");
?>
<?php
  $tampilkan2 = mysql_query("SELECT id_waktu,waktu_awal,waktu_akhir FROM waktu ORDER BY id_waktu");
?>
<?php
  $tampilkan3 = mysql_query("SELECT id_pelanggan,nama FROM pelanggan ORDER BY id_pelanggan");
?>
<?php
  $tampilkan4 = mysql_query("SELECT id_tarif,harga FROM tarif ORDER BY id_tarif");
?>
<div class="modal fade" id="tambah_data" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" method="POST" action="module_pemesanan/action_pemesanan.php">
        <div class="modal-header">
          <p><i class="fa fa-user-plus"></i> Tambah</p>
        </div>
        
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label">Tanggal Pesan : </label>
              <div class="col-lg-8">
                <input type="date" class="form-control" name="tanggal_pesan">
              </div>
            </div>
             <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Status Pemesanan : </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="status_pemesan" placeholder="Status Pemesanan">
              </div>
            </div>
              <div class="form-group" >
              <label for="admin-name" class="col-lg-4 control-label"> Id Lapang </label>
              <div class="col-lg-8">
                <select class="form-control select-style" name="id_lapang" required>
                  <?php
                    while ($tampil=mysql_fetch_array($tampilkan)){
                    echo "<option value='$tampil[id_lapang]'>$tampil[id_lapang] ($tampil[nama])  </option>";
                  }
                  ?>
                </select>
              </div>
            </div>
              <div class="form-group" >
              <label for="admin-name" class="col-lg-4 control-label"> Id Waktu </label>
              <div class="col-lg-8">
                <select class="form-control select-style" name="id_waktu" required>
                  <?php
                    while ($tampil=mysql_fetch_array($tampilkan2)){
                    echo "<option value='$tampil[id_waktu]'>$tampil[id_waktu] ($tampil[waktu_awal] - $tampil[waktu_akhir] )  </option>";
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group" >
              <label for="admin-name" class="col-lg-4 control-label"> Tarif</label>
              <div class="col-lg-8">
                <select class="form-control select-style" name="tarif" required>
                  <?php
                    while ($tampil=mysql_fetch_array($tampilkan4)){
                    echo "<option value='$tampil[id_tarif]'>$tampil[id_tarif] ($tampil[harga])  </option>";
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="admin-name" class="col-lg-4 control-label"> Status </label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="status" placeholder="Status">
              </div>
            </div> 
             <div class="form-group" >
              <label for="admin-name" class="col-lg-4 control-label"> Id Pelanggan </label>
              <div class="col-lg-8">
                <select class="form-control select-style" name="id_pelanggan" required>
                  <?php
                    while ($tampil=mysql_fetch_array($tampilkan3)){
                    echo "<option value='$tampil[id_waktu]'>$tampil[id_pelanggan] ($tampil[nama])  </option>";
                  }
                  ?>
                </select>
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