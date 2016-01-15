<?php

$edit=mysql_query("SELECT * FROM pembayaran WHERE id_pembayaran='$_GET[id]'");
    $ed=mysql_fetch_array($edit);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
       <div class="edit-title"><p>Edit Pembayaran</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_pembayaran&act=update_pembayaran>
          <input type='hidden' name='id' value='$ed[id_pembayaran]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Id Pembayaran</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' value='$ed[id_pembayaran]' disabled>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Kode Pesan</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='kode_pesan' value='$ed[kode_pesan]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Tanggal Transfer</label>
            <div class='col-lg-10'>
              <input type='date' class='form-control' name='tanggal_transfer' value='$ed[tanggal_transfer]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Bank</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='bank' value='$ed[bank]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Nominal</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='nominal' value='$ed[nominal]' >
            </div>
          </div>

          
          <div class='button-edit'>
            <button class='button-foot' onclick=self.history.back()>Close</button>
            <button class='button-foot' type='submit'>Update</button>
          </div>
          </form>
          ";


?>