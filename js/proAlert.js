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

// Dynamic Alert Boxes Starts Here
// Info(Blue Box) alerts br(bottom-right)
function proAlertInfo_br(msg) {
    $alertBox = $('<div/>', {"class":"pro-alert pro-alert-br alert-blue"});
    $alertBox.append('<div class="alert-body">' + msg + '</div>');
    $('#alert-container').html($alertBox);
    $alertBox.fadeIn();
    $fadeTime = setTimeout(() => {
        $alertBox.fadeOut();
        clearTimeout($fadeTime)
    }, 3000);
}

// Info(Blue Box) alerts tr(top-right)
function proAlertInfo_tr(msg) {
    $alertBox = $('<div/>', {"class":"pro-alert pro-alert-tr alert-blue"});
    $alertBox.append('<div class="alert-body">' + msg + '</div>');
    $('#alert-container').html($alertBox);
    $alertBox.fadeIn();
    $fadeTime = setTimeout(() => {
        $alertBox.fadeOut();
        clearTimeout($fadeTime)
    }, 3000);
}

// Info(Blue Box) alerts bl(bottom-left)
function proAlertInfo_bl(msg) {
    $alertBox = $('<div/>', {"class":"pro-alert pro-alert-bl alert-blue"});
    $alertBox.append('<div class="alert-body">' + msg + '</div>');
    $('#alert-container').html($alertBox);
    $alertBox.fadeIn();
    $fadeTime = setTimeout(() => {
        $alertBox.fadeOut();
        clearTimeout($fadeTime)
    }, 3000);
}

// Info(Blue Box) alerts tl(top-left)
function proAlertInfo_tl(msg) {
    $alertBox = $('<div/>', {"class":"pro-alert pro-alert-tl alert-blue"});
    $alertBox.append('<div class="alert-body">' + msg + '</div>');
    $('#alert-container').html($alertBox);
    $alertBox.fadeIn();
    $fadeTime = setTimeout(() => {
        $alertBox.fadeOut();
        clearTimeout($fadeTime)
    }, 3000);
}

// Error(Red Box) alerts br(bottom-right)
function proAlertError_br(msg) {
    $alertBox = $('<div/>', {"class":"pro-alert pro-alert-br alert-red"});
    $alertBox.append('<div class="alert-body">' + msg + '</div>');
    $('#alert-container').html($alertBox);
    $alertBox.fadeIn();
    $fadeTime = setTimeout(() => {
        $alertBox.fadeOut();
        clearTimeout($fadeTime)
    }, 3000);
}

// Error(Red Box) alerts tr(top-right)
function proAlertError_tr(msg) {
    $alertBox = $('<div/>', {"class":"pro-alert pro-alert-tr alert-red"});
    $alertBox.append('<div class="alert-body">' + msg + '</div>');
    $('#alert-container').html($alertBox);
    $alertBox.fadeIn();
    $fadeTime = setTimeout(() => {
        $alertBox.fadeOut();
        clearTimeout($fadeTime)
    }, 3000);
}

// Error(Red Box) alerts bl(bottom-left)
function proAlertError_bl(msg) {
    $alertBox = $('<div/>', {"class":"pro-alert pro-alert-bl alert-red"});
    $alertBox.append('<div class="alert-body">' + msg + '</div>');
    $('#alert-container').html($alertBox);
    $alertBox.fadeIn();
    $fadeTime = setTimeout(() => {
        $alertBox.fadeOut();
        clearTimeout($fadeTime)
    }, 3000);
}

// Error(Red Box) alerts tl(top-left)
function proAlertError_tl(msg) {
    $alertBox = $('<div/>', {"class":"pro-alert pro-alert-tl alert-red"});
    $alertBox.append('<div class="alert-body">' + msg + '</div>');
    $('#alert-container').html($alertBox);
    $alertBox.fadeIn();
    $fadeTime = setTimeout(() => {
        $alertBox.fadeOut();
        clearTimeout($fadeTime)
    }, 3000);
}