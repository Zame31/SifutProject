<?php

$edit=mysql_query("SELECT * FROM lapang WHERE id_lapang='$_GET[id]'");
    $ed=mysql_fetch_array($edit);
?>
  <div class="content">
    <div class="edit-cont">
      <!--title-->
      <div class="edit-title"><p>Edit lapang</p></div>
<?php
     echo "<form class='form-horizontal' method=POST action=$action?module=data_lapang&act=update_lapang>
          <input type='hidden' name='id' value='$ed[id_lapang]'>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> ID Lapangan</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' value='$ed[id_lapang]' disabled>
            </div>
          </div>
          <div class='form-group'>
            <label class='col-lg-2 control-label'> Nama lapang</label>
            <div class='col-lg-10'>
              <input type='text' class='form-control' name='nama' value='$ed[nama]'>
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
          echo "
          <div class='button-edit'>
            <button class='button-foot' onclick=self.history.back()>Close</button>
            <button class='button-foot' type='submit'>Update</button>
          </div>
          </form>
          ";


?>