$('#btn-toggle-nav').on('click', function(){
    $togglebtn = $(this);
    $togglebtn.toggleClass('slim');
    $('#site_content').toggleClass('slim');
    $('#sidebar').toggleClass('slim');
    $('.nav-label').toggleClass('slim');
});