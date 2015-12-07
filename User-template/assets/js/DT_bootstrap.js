$(document).ready(function() {
    $('#example').DataTable( {
        "searching": false,
        "pageLength": 10,
        "language": {	
            "zeroRecords": "Nothing found - sorry",
            "info": "Menampilkan _START_ Sampai _END_ Dari _TOTAL_ Data",
            "infoEmpty": "Tidak Ada Data",
            "lengthMenu": "",
		    "decimal": ",",
            "thousands": ".",
            
            "paginate": {
		        "first":      "Pertama",
		        "last":       "Terakhir",
		        "next":       "Berikutnya",
		        "previous":   "Sebelumnya"
		    }
		    
        }
    } );
} );


