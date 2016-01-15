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
$action ="module_lapang/action_lapang.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL LAPANG
    include "tampil_lapang.php";
  break;
  case 'editlapang':
    //EDIT LAPANG
    include "edit_lapang.php";
  break;
  case 'carilapang':
    //EDIT LAPANG
    include "cari_lapang.php";
  break;  
}
//ENDSWITCH

  //TAMBAH LAPANG
  include "tambah_lapang.php";
?>
