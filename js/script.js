$(document).ready(function () {
    $('form[name=frm_register]').on('submit', function (ev) {
        ev.preventDefault();
        $fname = $('input[name=fname]').val();
        $email = $('input[name=email]').val();
        $pass = $('input[name=pass]').val();
        $cpass = $('input[name=cpass]').val();
        $type = $('select[name=type]').val();

        if($pass === $cpass){
            $.ajax({
                type:'post',
                url: './ajax/add_user.php',
                data: {f: $fname, e: $email, p:$pass, t:$type},
                dataType: 'json',
                beforeSend: function () {
                    $('#submit_btn').prop('disabled', true);
                    $('#submit_btn').html('<i class="fa fa-spinner fa-pulse"></i> Processing');
                },
                success: function (response) {
                    if(response.status == 'success'){
                        // proAlertInfo('myAlert', response.msg);
                        proAlertInfo_tr(response.msg);
                        setTimeout(() => {
                            window.location.href = 'login.php';
                        }, 5000);
                    }else{
                        proAlertError('myAlert', response.msg);
                    }
                    $('#submit_btn').prop('disabled', false);
                    $('#submit_btn').html('<i class="fa fa-user-plus"></i> Add User');
                },
                error: function (xhr, status, msg) {
                    console.error(msg);
                },
                complete: function () {
                    // If sending request and response is complete
                }
            })
        }else{
            // proAlertError('myAlert','Password Mismatched!');
            proAlertError_tr('Password Mismatched');
        }
    });

    $('form[name=form_login]').on('submit', function (ev) {
        $form = $(this);
        ev.preventDefault();
        $email = $('input[name=email]').val();
        $pass = $('input[name=pass]').val();
        $rem = $('input[name=remember]').prop('checked');
        // Building an ajax request
        $.ajax({
            type: 'post',
            url: './ajax/login_user.php',
            data: {email:$email, pass:$pass, rem:$rem},
            dataType: 'json',
            beforeSend: function () {
                
            },
            success: function(response){
                if(response.status == 'success'){
                    proAlertInfo_tr(response.message);
                    setTimeout(() => {
                        window.location.href = 'portal/dashboard.php';
                    }, 3000);
                }else{
                    proAlertError_tr(response.message);
                }
            },
            error: function(xhr, status, msg){
                console.error(msg);
            }
        })
        
    });
});