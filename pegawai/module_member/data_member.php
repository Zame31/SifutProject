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
$action ="module_member/action_member.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL ADMIN
    include "tampil_member.php";
  break;
  case 'editmember':
    //EDIT ADMIN
    include "edit_member.php";
  break;
  case 'carimember':
    //EDIT ADMIN
    include "cari_member.php";
  break;  
}
//ENDSWITCH

  //TAMBAH ADMIN
  include "tambah_member.php";
?>
