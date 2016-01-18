
<script type="text/javascript">

$(document).ready(function(){//When the dom is ready
  $("#nama_pemesan").change(function(){ //if theres a change in the nama_pemesan textbox

    var nama_pemesan = $("#nama_pemesan").val();//Get the value in the nama_pemesan textbox
    if(nama_pemesan.length > 5){//if the lenght greater than 3 characters
      $("#availability_status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

      $.ajax({  //Make the Ajax Request
        type: "POST",
        url: "validasi/ajax_check_nama.php",  //file name
        data: "nama_pemesan="+ nama_pemesan,  //data
        success: function(server_response){

          $("#availability_status").ajaxComplete(function(event, request){
	           if(server_response == '0'){//if ajax_check_nama_pemesan.php return value "0"
	            $("#availability_status").html(' <div class="valid-true"> Tersedia </div>  ');
	           }
	            else  if(server_response == '1'){//if it returns "1"
                $("#availability_status").html('<div class="valid-false"> nama pemesan Sudah Digunakan </div>');
               }
            });

        }
      });
    }
  else {
  $("#availability_status").html('<div class="valid-false"> nama pemesan Minimal 6 Karakter  </div>');
  //if in case the nama_pemesan is less than or equal 3 characters only
  }
  return false;
  });
});
</script>
