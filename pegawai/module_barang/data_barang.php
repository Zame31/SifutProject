<script>
  function confirmdelete(delUrl) {
    if (confirm("Anda yakin ingin menghapus?")) {
    document.location = delUrl;
    }
  }
</script>

<?php
session_start();

//CONTENT
$action ="module_barang/action_barang.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL barang
    include "tampil_barang.php";
  break;
  case 'editbarang':
    //EDIT barang
    include "edit_barang.php"; 
  break;
  case 'caribarang':
    //EDIT barang
    include "cari_barang.php"; 
  break;  
}
//ENDSWITCH

  //TAMBAH barang
  include "tambah_barang.php";
?>
