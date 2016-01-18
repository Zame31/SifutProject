<?php

$edit=mysql_query("SELECT * FROM pegawai WHERE username='$_GET[id]'");
    $ed=mysql_fetch_array($edit);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit Admin</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_pegawai&act=update_pegawai>
          <input type=hidden name=id value='$ed[username]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Username</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='username' value='$ed[username]' disabled>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Nama Lengkap</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='nama_lengkap' value='$ed[nama_lengkap]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> password</label>
            <div class='col-lg-10'>
              <input type='password' class='form-control' name='password'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> alamat</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='alamat' value='$ed[alamat]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> email</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='email' value='$ed[email]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> telp/Hp</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='telp' value='$ed[telp]'>
            </div>
          </div>
          <div class='form-group'>
            <label for='admin-usr' class='col-lg-2 control-label'> Blokir</label>
             <div class='col-lg-10'>";
              if ($ed['blokir']=='N'){
              echo"
                <label class='radio-inline'>
                  <input type='radio' name='blokir' value='Y'> Iya
                </label>
               <label class='radio-inline'>
                  <input type='radio' name='blokir' value='N' checked> Tidak
                </label>
                </div>
            </div>";
              }
              else{
                 echo"
                <label class='radio-inline'>
                  <input type='radio' name='blokir' value='Y' checked> Iya
                </label>
               <label class='radio-inline'>
                  <input type='radio' name='blokir' value='N'> Tidak
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
