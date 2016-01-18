<!--
TABLE UNTUK :
tampil,cari dan cetak excel.
-->
<?php
echo "
	<tr><td>$no</td>
     <td class='tab-col'>$tampil[kode_pesan]</td>
     		         <td>$tampil[tanggal_pesan]</td>
     		         <td>$tampil[jam_pesan]</td>
			         <td>$tampil[status_pemesan]</td>
			         <td class='tab-col'>$tampil[id_lapang]</td>
			         <td class='tab-col'>$tampil[id_waktu]</td>
			         <td>$tampil[tarif]</td>
			         <td>$tampil[status]</td>
			         <td class='tab-col'>$tampil[id_pelanggan]</td>
     
	 ";