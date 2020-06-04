function proAlertInfo(id, msg) {
    $alertBox = $('#'+id);
    $alertBox.addClass('alert-blue');
    $alertBox.children('.alert-body').html(msg);
    $alertBox.fadeIn();
    $fadeTime = setTimeout(() => {
        $alertBox.fadeOut();
        clearTimeout($fadeTime)
    }, 3000);
}

function proAlertError(id, msg) {
    $alertBox = $('#'+id);
    $alertBox.addClass('alert-red');
    $alertBox.children('.alert-body').html(msg);
    $alertBox.fadeIn();
    $fadeTime = setTimeout(() => {
        $alertBox.fadeOut();
        clearTimeout($fadeTime)
    }, 3000);
}
