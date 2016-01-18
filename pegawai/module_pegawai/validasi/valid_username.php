
<script type="text/javascript">

$(document).ready(function(){//When the dom is ready
  $("#username").change(function(){ //if theres a change in the username textbox

    var username = $("#username").val();//Get the value in the username textbox
    if(username.length > 5){//if the lenght greater than 3 characters
      $("#availability_status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

      $.ajax({  //Make the Ajax Request
        type: "POST",
        url: "module_admin/validasi/ajax_check_username.php",  //file name
        data: "username="+ username,  //data
        success: function(server_response){

          $("#availability_status").ajaxComplete(function(event, request){
	           if(server_response == '0'){//if ajax_check_username.php return value "0"
	            $("#availability_status").html(' <div class="valid-true"> Tersedia </div>  ');
	           }
	            else  if(server_response == '1'){//if it returns "1"
                $("#availability_status").html('<div class="valid-false"> Username Sudah Digunakan </div>');
               }
            });

        }
      });
    }
  else {
  $("#availability_status").html('<div class="valid-false"> Username Minimal 6 Karakter  </div>');
  //if in case the username is less than or equal 3 characters only
  }
  return false;
  });
});
</script>
