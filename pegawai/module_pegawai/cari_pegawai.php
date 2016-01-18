<?php
  $cari       = $_POST["cari"];

  $tampil_pegawai = mysql_query("SELECT * FROM pegawai
               WHERE username like '%$cari%' or
                     nama_lengkap like '%$cari%' or
                     alamat like '%$cari%' or
                     email like '%$cari%' or
                     telp like '%$cari%' or
                     blokir like '%$cari%'");
?>
    <div class="title-content">
    <span>Management</span>
    data pegawai
  </div>
  <div class="content">
    <!--FUNGSIONAL-->
    <div class="row">
      <div class="col-md-6">
        <form action="?module=data_pegawai&act=caripegawai" method="post">
          <div class="input-group search">
            <input name="cari" type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
        <a href="?module=data_pegawai" class="button-reset">Reset</a>
      </div>
      <div class="col-md-6">
      <div class="btn-group" role="group" aria-label="fungsional">
        <form action="module_pegawai/cetak_pdf_cari.php" method="post" target="_blank">
          <?php
            echo "
                      <input name='cari2' type='hidden' class='btn btn-default' value='$cari'>
                ";
          ?>
          <button class="btn btn-default " type="submit"><i class="fa fa-print"></i></button>
        </form>
      </div>
    </div>
    </div>
    <!--TABLE-->
    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tab-mar-top" id="example">
      <?php include "table/table_header.php" ?>
            <th width="70px">Aksi</th>
         </tr>
        </thead>
      <tbody>
<?php
    $no=1;
    while ($tampil=mysql_fetch_array($tampil_pegawai)){
       include "table/table_body.php";
       echo "
             <td><a href='?module=data_pegawai&act=editpegawai&id=$tampil[username]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_pegawai&act=hapuspegawai&id=$tampil[username]')></a></td>
             </tr>";
      $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";
?>
