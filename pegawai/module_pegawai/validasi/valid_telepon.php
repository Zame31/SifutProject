
<script type="text/javascript">

$(document).ready(function(){//When the dom is ready
  $("#telp").change(function(){ //if theres a change in the telp textbox

    var telp = $("#telp").val();//Get the value in the telp textbox
    if(telp.length > 5){//if the lenght greater than 3 characters
      $("#availability_status2").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

      $.ajax({  //Make the Ajax Request
        type: "POST",
        url: "module_admin/validasi/ajax_check_telepon.php",  //file name
        data: "telp="+ telp,  //data
        success: function(server_response){

          $("#availability_status2").ajaxComplete(function(event, request){
	           if(server_response == '0'){//if ajax_check_telp.php return value "0"
	            $("#availability_status2").html(' <div class="valid-true"> Tersedia </div>  ');
	           }
	            else  if(server_response == '1'){//if it returns "1"
                $("#availability_status2").html('<div class="valid-false"> Telepon Sudah digunakan </div>');
               }
            });

        }
      });
    }
  else {
  $("#availability_status2").html('<div class="valid-false"> Telepon minimal 6 angka  </div>');
  //if in case the telp is less than or equal 3 characters only
  }
  return false;
  });
});
</script>
