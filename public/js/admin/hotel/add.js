$("#alert").fadeOut(4200);
$('input[type="radio"]').on('change',function(){
    var label= $(this).val();
    if(label =='ldap'){
    $('#password').val('ldappassword');
    $('#password').attr('readonly',true);
    $('#password-confirm').val('ldappassword');
    $('#password-confirm').attr('readonly',true);
    
    }
    else{
    $('#password').val('');
    $('#password').attr('readonly',false);
    $('#password-confirm').val('');
    $('#password-confirm').attr('readonly',false);
    }
});