$('#btn-toggle-nav').on('click', function(){
    $togglebtn = $(this);
    $togglebtn.toggleClass('slim');
    $('#site_content').toggleClass('slim');
    $('#sidebar').toggleClass('slim');
    $('.nav-label').toggleClass('slim');
    $('#user-detail').toggleClass('slim');
    $.ajax({
        type:'get',
        url: 'set_slim.php',
        success: function (result) {
            
        }
    });
});

$(document).ready(function () {
    $('#form_details').on('dblclick', 'label', function () {
        $(this).children('span.norm').slideUp();
        $(this).children('span.edit').slideDown();
    });

    $('span.edit').on('blur', 'input', function () {
        $this = $(this);
        $name = $(this).attr('name');
        $value = $(this).val();
        $.ajax({
            type: 'post',
            url: 'update_user_info.php',
            dataType: 'json',
            data: {name: $name, value: $value},
            beforeSend:function () {
                
            },
            success: function (result) {
                if(result.status == 'success'){
                    $this.parent('span.edit').siblings('span.norm').text($value);
                    $this.parent('span.edit').slideUp();
                    $this.parent('span.edit').siblings('span.norm').slideDown();
                    proAlertInfo_tr($name + ' field was updated successfully');
                }else{
                    proAlertError_tr($name + ' field was unable to update');
                }
            }
        });
        
    });

})