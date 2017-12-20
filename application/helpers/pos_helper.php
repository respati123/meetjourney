<?php

function check_session()
{
    $CI= & get_instance();
    $session=$CI->session->userdata('isLogin');
    if($session!=TRUE)
    {
        redirect('login');
    }
}


function chek_session_login()
{
    $CI= & get_instance();
    $session=$CI->session->userdata('isLogin');
    if($session==TRUE)
    {
        redirect('Artikel');
    }
}
?>
