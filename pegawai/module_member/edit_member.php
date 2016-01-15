<?php

$edit=mysql_query("SELECT * FROM member WHERE id_member='$_GET[id]'");
    $ed=mysql_fetch_array($edit);
?>
<?php

$edit2=mysql_query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
    $ed2=mysql_fetch_array($edit2);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit member</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_member&act=update_member>
          <input type='hidden' name='id' value='$ed[id_member]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> ID Pelanggan</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' value='$ed[id_pelanggan]' disabled>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> ID Member</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' value='$ed[id_member]' disabled>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Nama</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='nama' value='$ed2[nama]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Alamat</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='alamat' value='$ed2[alamat]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> No Telepon</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='no_telp' value='$ed2[no_telp]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Email</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='email' value='$ed2[email]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Username</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='username' value='$ed[username]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Password</label>
            <div class='col-lg-10'>
              <input type='password' class='form-control' name='password'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Tanggal Daftar</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='tanggal_daftar' value='$ed[tanggal_daftar]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'>Langganan</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='langganan' value='$ed[langganan]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Kuota Main</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='kuota_main' value='$ed[kuota_main]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Aktif</label>
             <div class='col-lg-10'>";
              if ($ed['aktif']=='T'){
              echo"
                <label class='radio-inline'>
                  <input type='radio' name='aktif' value='Y'> Iya
                </label>
               <label class='radio-inline'>
                  <input type='radio' name='aktif' value='T' checked> Tidak
                </label>
                </div>
            </div>";
              }
              else{
                 echo"
                <label class='radio-inline'>
                  <input type='radio' name='aktif' value='Y' checked> Iya
                </label>
               <label class='radio-inline'>
                  <input type='radio' name='aktif' value='T'> Tidak
                </label>
                </div>
            </div>";
              }
              echo '
          <div class="button-edit">
            <button class="button-foot" onclick=self.history.back()>Close</button>
            <button class="button-foot" type="submit">Update</button>
          </div>
          </form>
          ';


?>