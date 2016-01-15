<?php
  $cari       = $_POST["cari"];
	$tampilkan = mysql_query("SELECT * FROM member 
                              WHERE id_member like '%$cari%' or 
                               username like '%$cari%' or
                               password like '%$cari%' or
                               id_pelanggan like '%$cari%' or
                               aktif like '%$cari%' or
                               tanggal_daftar like '%$cari%' or
                               langganan like '%$cari%' or
                               kuota_main like '%$cari%'");
?>


    <div class="title-content">
    <span>Management</span>
    data member
  </div>
  <div class="content">
    <!--FUNGSIONAL-->
    <div class="row">
      <div class="col-md-6">
        <form action="?module=data_member&act=carimember" method="post">
          <div class="input-group search">
            <input name="cari" type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
              
            </span>
          </div>

        </form>
        <a href="?module=data_member" class="button-reset">Reset</a>
      </div>
       <div class="col-md-6">
        <div class="btn-group" role="group" aria-label="fungsional">
          <a type="button" class="btn btn-default" href="#tambah_data" data-toggle="modal"><i class="fa fa-user-plus"></i></a>
          <a type="button" class="btn btn-default" href="module_member/action_member.php?module=data_member&act=export"><i class="fa fa-download"> Excel</i></a>
          
          <form action="module_member/cetak_pdf_cari.php" method="post">
            <?php 
              echo "
                        <input name='cari2' type='hidden' class='btn btn-default' value='$cari'>
                  ";
            ?>
            <button class="btn btn-default" type="submit"><i class="fa fa-print"></i></button>
          </form>


          <!--<a type="button" class="btn btn-default" href="module_member/cetak_pdf_cari.php"><i class="fa fa-print"></i></a>-->
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
             <td><a href='?module=data_member&act=editamember&id=$tampil[id_member]' class='fa fa-edit'></a>
             <a class='fa fa-remove' href=javascript:confirmdelete('$action?module=data_member&act=hapusmember&id=$tampil[id_member]')></a></td>
             </tr>";
      $no++;
    }
  echo "
        </tbody>
        </table>
        </div>";
?>