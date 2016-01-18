<?php
  $tampilkan = mysql_query("SELECT id_lapang,nama FROM lapang ORDER BY id_lapang");


  $tampilkan2 = mysql_query("SELECT id_waktu,waktu_awal,waktu_akhir FROM waktu ORDER BY id_waktu");


  $tampilkan3 = mysql_query("SELECT id_pelanggan,nama FROM pelanggan ORDER BY id_pelanggan");


  $tampilkan4 = mysql_query("SELECT id_tarif,harga FROM tarif ORDER BY id_tarif");


$edit=mysql_query("SELECT * FROM pemesanan WHERE kode_pesan='$_GET[id]'");
    $ed=mysql_fetch_array($edit);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit Pemesanan</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_pemesanan&act=update_pemesanan>
          <input type='hidden' name='id' value='$ed[kode_pesan]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Kode Pesan</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' value='$ed[kode_pesan]' disabled>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Tanggal Pesan</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='tanggal_pesan' value='$ed[tanggal_pesan]'>
            </div>
          </div>
           <div class='form-group'>
            <label class='col-lg-2 control-label'> Jam Pesan</label>
            <div class='col-lg-10'>
              <input type='time' class='form-control' name='jam_pesan' value='$ed[jam_pesan]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Status Pemesan</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='status_pemesan' value='$ed[status_pemesan]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Id Lapang</label>
            <div class='col-lg-10'>
               <select class='form-control select-style' name='id_lapang' required>";
                  
                    while ($tampil=mysql_fetch_array($tampilkan)){
                    echo "<option value='$tampil[id_lapang]'>$tampil[id_lapang] ($tampil[nama])  </option>";
                  }
                  echo "
                </select>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Id Waktu</label>
            <div class='col-lg-10'>
              <select class='form-control select-style' name='id_waktu' required>";
                  
                    while ($tampil=mysql_fetch_array($tampilkan2)){
                    echo "<option value='$tampil[id_waktu]'>$tampil[id_waktu] ($tampil[waktu_awal] - $tampil[waktu_akhir] )  </option>";
                  }
                  echo "
                </select>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Tarif</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='tarif' value='$ed[tarif]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Status</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='status' value='$ed[status]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Id Pelanggan</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='id_pelanggan' value='$ed[id_pelanggan]'>
            </div>
          </div>

          <div class='button-edit'>
            <button class='button-foot' onclick=self.history.back()>Close</button>
            <button class='button-foot' type='submit'>Update</button>
          </div>
          </form>
          ";


?>