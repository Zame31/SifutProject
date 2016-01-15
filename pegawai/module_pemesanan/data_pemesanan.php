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
$action ="module_pemesanan/action_pemesanan.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL ADMIN
    include "tampil_pemesanan.php";
  break;
  case 'editpemesanan':
    //EDIT ADMIN
    include "edit_pemesanan.php";
  break;
  case 'caripemesanan':
    //EDIT ADMIN
    include "cari_pemesanan.php";
  break;  
}
//ENDSWITCH

  //TAMBAH ADMIN
  include "tambah_pemesanan.php";
?>
