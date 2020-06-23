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
    if(($file.type != 'image/jpg') && ($file.type != 'image/jpeg') && ($file.type != 'image/png')){
        proAlertError_tr('Invalid Image Format');
    }else{
        var form_data = new FormData();
        form_data.append('photo', $file);
        form_data.append('imagetype', 'profile');
        $.ajax({
            type: 'post',
            url: './ajax/upload_img.php',
            data: form_data,
            processData: false,
            contentType: false,
            dataType: 'json',
            beforeSend: function () {
                $('#btn_upload_img').html('<i class="fa fa-spinner fa-pulse"></i> Uploading....');
            },
            success: function (response) {
                if(response.status == 'success'){
                    $img = $('#profile-img-container img');
                    $img.fadeOut();
                    $img.attr('src', 'imgs/profile/' + response.newimage);
                    $img.fadeIn();
                    // Side Image
                    $('.user-image-container img').attr('src',  'imgs/profile/' + response.newimage);
                }else{
                    proAlertError_tr(response.message);
                }
            },
            error: function (xhr, status, message) {
                console.log(message);
            },
            complete: function(){
                $('#btn_upload_img').html('<i class="fa fa-camera"></i> Uplaod Image');
            }
        });
    }
});