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

// Mobile Navbar
$('#toggle-btn').on('click', function () {
    $('#sidebar').toggleClass('open');
});

// Styling SideNav at Mobile
$window_width = $(window).width();
$topnav_height = $('#top_nav').height();
if(parseInt($window_width) <= 767){
    $('#user-detail').css('margin-top', ($topnav_height + 10));
}else{
    $('#user-detail').css('margin-top', 'auto');
}
// console.log($topnav_height);

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


    $('#btn_upload_img').on('click', function () {
        $('#photo_upload').trigger('click');
    });


});

$('#photo_upload').on('change', function () {
    $file = $('#photo_upload')[0].files[0];
    var form_data = new FormData();
    form_data.append('test','kolok');
    console.log(form_data);
    // $.ajax({
    //     type: 'post',
    //     url: 'upload_img.php',
    //     data: form_data,
    //     // dataType: 'json',
    //     beforeSend: function () {
    //         $('#btn_upload_img').html('<i class="fa fa-spinner fa-pulse"></i> Uploading....');
    //     },
    //     success: function (response) {
    //         // proAlertError_tr('response.msg');
    //         console.error(response);
    //     }
    // });
});