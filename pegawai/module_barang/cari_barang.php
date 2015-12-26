<?php
  $cari       = $_POST["cari"];
	$tampil_pegawai = 
  mysql_query("SELECT * FROM barang 
               WHERE kodebarang like '%$cari%' or 
                     namabarang like '%$cari%' or
                     harga like '%$cari%' or
                     stok like '%$cari%'
                     ");
?>
    <div class="title-content">
    <span>Management</span>
    data Barang
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
        <a href="?module=data_barang" class="button-reset">Reset</a>
      </div>
    </div>
    <!--TABLE-->
    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tab-mar-top" id="example">
      <?php include "table/table_header.php" ?>
            <th width="20px">Aksi</th>
         </tr>
        </thead>
      <tbody>
<?php        
    $no=1;
    while ($tampil=mysql_fetch_array($tampil_pegawai)){
       include "table/table_body.php";
       echo "
             <td><a href='?module=data_pegawai&act=editpegawai&id=$tampil[kodebarang]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_pegawai&act=hapuspegawai&id=$tampil[kodebarang]')></a></td>
             </tr>";
      $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";
?>