$(document).ready(function () {
    $('form[name=frm_register]').on('submit', function (ev) {
        ev.preventDefault();
        $fname = $('input[name=fname]').val();
        $email = $('input[name=email]').val();
        $pass = $('input[name=pass]').val();
        $cpass = $('input[name=cpass]').val();

        if($pass === $cpass){
            $.ajax({
                type:'post',
                url: './ajax/add_user.php',
                data: {f: $fname, e: $email, p:$pass},
                dataType: 'json',
                beforeSend: function () {
                    
                },
                success: function (response) {
                    if(response.status == 'success'){
                        console.log(response.msg);
                    }else{
                        alert(response.msg)
                    }
                },
                error: function (xhr, status, msg) {
                    console.error(msg);
                },
                complete: function () {
                    // If sending request and response is complete
                }
            })
        }else{
            alert('Password Mismatched!');
        }
    })
})