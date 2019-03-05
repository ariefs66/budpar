$("#alert").fadeOut(8000); 
var role = "<?php echo $tampiledit->role;?>";
var password = "<?php echo $pass;?>";
$('#akun').val(role).change();

if (password=='ldappassword') {
    $('#password').val('ldappassword');
    $('#password').attr('readonly',true);
    $('#password-confirm').val('ldappassword');
    $('#password-confirm').attr('readonly',true);
    $('#current_password').val('ldappassword');
    $('#current_password').attr('readonly',true);
}