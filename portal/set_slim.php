<?php
    session_start();

    if(isset($_SESSION['slim'])){
        unset($_SESSION['slim']);
    }else{
        $_SESSION['slim'] = 'slim';
    }

?>