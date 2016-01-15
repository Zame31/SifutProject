<?php
  $cari       = $_POST["cari"];
	$tampilkan = mysql_query("SELECT * FROM pembayaran 
                              WHERE id_pembayaran like '%$cari%' or 
                               kode_pesan like '%$cari%' or
                               tanggal_transfer like '%$cari%' or
                               bank like '%$cari%' or
                               nominal like '%$cari%'");
?>


    <div class="title-content">
    <span>Management</span>
    data pembayaran
  </div>
  <div class="content">
    <!--FUNGSIONAL-->
    <div class="row">
      <div class="col-md-6">
        <form action="?module=data_pembayaran&act=caripembayaran" method="post">
          <div class="input-group search">
            <input name="cari" type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
              
            </span>
          </div>

        </form>
        <a href="?module=data_pembayaran" class="button-reset">Reset</a>
      </div>
       <div class="col-md-6">
        <div class="btn-group" role="group" aria-label="fungsional">
          <a type="button" class="btn btn-default" href="#tambah_data" data-toggle="modal"><i class="fa fa-user-plus"></i></a>
          <a type="button" class="btn btn-default" href="module_pembayaran/action_pembayaran.php?module=data_pembayaran&act=export"><i class="fa fa-download"> Excel</i></a>
          
          <form action="module_pembayaran/cetak_pdf_cari.php" method="post">
            <?php 
              echo "
                        <input name='cari2' type='hidden' class='btn btn-default' value='$cari'>
                  ";
            ?>
            <button class="btn btn-default" type="submit"><i class="fa fa-print"></i></button>
          </form>


          <!--<a type="button" class="btn btn-default" href="module_pembayaran/cetak_pdf_cari.php"><i class="fa fa-print"></i></a>-->
        </div>
      </div>
    </div>
    <!--TABLE-->
    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tab-mar-top" id="example">
      <?php include "table/table_header.php" ?>
          <th width="20px">Aksi</th>
      </thead>
      <tbody>
<?php        
    $no=1;
    while ($tampil=mysql_fetch_array($tampilkan)){
        include "table/table_body.php";
       echo "
             <td><a href='?module=data_pembayaran&act=editapembayaran&id=$tampil[id_pembayaran]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_pembayaran&act=hapuspembayaran&id=$tampil[id_pembayaran]')></a></td>
             </tr>";
      $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";
?>