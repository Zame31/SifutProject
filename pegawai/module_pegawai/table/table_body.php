<!--
TABLE UNTUK :
tampil,cari dan cetak excel.
-->
<?php
echo "
	<tr>
	 <td>$no</td>
	 <td class='tab-col'>$tampil[username]</td>
	 <td>$tampil[nama_lengkap]</td>
	 <td>$tampil[alamat]</td>
	 <td>$tampil[email]</td>
	 <td>$tampil[telp]</td>
	 <td align=center>$tampil[blokir]</td>
	 ";