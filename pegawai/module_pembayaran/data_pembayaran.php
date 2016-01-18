<script>
  function confirmdelete(delUrl) {
    if (confirm("Anda yakin ingin menghapus?")) {
    document.location = delUrl;
    }
  }
</script>

<?php


//CONTENT
$action ="module_pembayaran/action_pembayaran.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL PEMBAYARAN
    include "tampil_pembayaran.php";
  break;
  case 'editpembayaran':
    //EDIT PEMBAYARAN
    include "edit_pembayaran.php";
  break;
  case 'caripembayaran':
    //EDIT PEMBAYARAN
    include "cari_pembayaran.php";
  break;  
}
//ENDSWITCH

  //TAMBAH PEMBAYARAN
  include "tambah_pembayaran.php";
?>
