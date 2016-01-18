<script>
  function confirmdelete(delUrl) {
    if (confirm("Anda yakin ingin menghapus?")) {
    document.location = delUrl;
    }
  }
</script>

<?php


//CONTENT
$action ="module_pegawai/action_pegawai.php";
switch (@$_GET['act']) {
  default:
    //TAMPIL pegawai
    include "tampil_pegawai.php";
  break;
  case 'editpegawai':
    //EDIT pegawai
    include "edit_pegawai.php";
  break;
  case 'caripegawai':
    //EDIT pegawai
    include "cari_pegawai.php";
  break;
}
//ENDSWITCH

  //TAMBAH pegawai
  include "tambah_pegawai.php";
?>
