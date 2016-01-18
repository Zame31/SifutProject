
<script type="text/javascript">

$(document).ready(function(){//When the dom is ready
  $("#email").change(function(){ //if theres a change in the email textbox

    var email = $("#email").val();//Get the value in the email textbox
    if(email.length > 5){//if the lenght greater than 3 characters
      $("#availability_status3").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

      $.ajax({  //Make the Ajax Request
        type: "POST",
        url: "module_admin/validasi/ajax_check_email.php",  //file name
        data: "email="+ email,  //data
        success: function(server_response){

          $("#availability_status3").ajaxComplete(function(event, request){
	           if(server_response == '0'){//if ajax_check_email.php return value "0"
	            $("#availability_status3").html(' <div class="valid-true"> Tersedia </div>  ');
	           }
	            else  if(server_response == '1'){//if it returns "1"
                $("#availability_status3").html('<div class="valid-false"> Email Sudah Digunakan </div>');
               }
            });

        }
      });
    }
  else {
  $("#availability_status3").html('<div class="valid-false"> Email Minimal 6 Karakter  </div>');
  //if in case the email is less than or equal 3 characters only
  }
  return false;
  });
});
</script>
