<!--Validasi Password-->
<script type="text/javascript">
    window.onload = function () {
    document.getElementById("password").onchange = validatePassword;
    document.getElementById("re-password").onchange = validatePassword;
    }
    function validatePassword(){
    var pass2=document.getElementById("re-password").value;
    var pass1=document.getElementById("password").value;
    if(pass1!=pass2)
    document.getElementById("re-password").setCustomValidity("Passwords Tidak Sama");
    else
    document.getElementById("re-password").setCustomValidity('');}
</script>
