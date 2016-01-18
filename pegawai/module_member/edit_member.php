<?php

//$edit=mysql_query("SELECT * FROM member WHERE id_member='$_GET[id]'");
//    $ed=mysql_fetch_array($edit);

$edit=mysql_query("SELECT member.id_pelanggan,member.id_member,
                           pelanggan.nama,pelanggan.alamat,pelanggan.no_telp,pelanggan.email,
                           member.username,member.password,member.tanggal_daftar,member.langganan,
                           member.kuota_main,member.aktif  
                    FROM member,pelanggan 
                    where member.id_pelanggan=pelanggan.id_pelanggan and 
                          member.id_member='$_GET[id]' 
                    ORDER BY id_member");
$ed=mysql_fetch_array($edit);

  
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit member</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_member&act=update_member>
          <input type='hidden' name='id' value='$ed[id_member]'>
          <input type='hidden' name='id2' value='$ed[id_pelanggan]'>
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
              <input type='text' class='form-control' name='nama' value='$ed[nama]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Alamat</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='alamat' value='$ed[alamat]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> No Telepon</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='no_telp' value='$ed[no_telp]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Email</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='email' value='$ed[email]'>
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
              <input type='date' class='form-control' name='tanggal_daftar' value='$ed[tanggal_daftar]'>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'>Langganan</label>
            <div class='col-lg-10'>
              <input type='date' class='form-control' name='langganan' value='$ed[langganan]'>
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