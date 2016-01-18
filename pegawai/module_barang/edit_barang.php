<?php

$edit=mysql_query("SELECT * FROM barang WHERE kodebarang='$_GET[id]'");
    $ed=mysql_fetch_array($edit);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit pegawai</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_barang&act=update_barang enctype='multipart/form-data'>
          <input type=hidden name=id value='$ed[kodebarang]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Kode Barang</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='kodebarang' value='$ed[kodebarang]' disabled>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Nama Barang</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='namabarang' value='$ed[namabarang]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'>Harga</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='harga' value='$ed[harga]'>
            </div>
          </div>
         
          <div class='form-group'>
            <label for='pegawai-usr' class='col-lg-2 control-label'> Stok</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='stok' value='$ed[stok]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Gambar</label>
            <div class='col-lg-10'>
            <input type='text' class='form-control' name='gambar_def' value='$ed[gambar]'>
                <input type='file' class='form-control' name='gambar'>
                
                <p class='help-block'>Format gambar(jpg/jpeg) dan Ukuran Maksimal 5Mb</p>
              </div>
            </div>
          <div class='button-edit'>
            <button class='button-foot' onclick=self.history.back()>Close</button>
            <button class='button-foot' type='submit'>Update</button>
          </div>
          </form>
          ";


?>