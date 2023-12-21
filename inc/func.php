<?php

session_start();

if(!isset($_SESSION['lang'])) :
    $_SESSION['lang'] = 'fr';
    endif ;

    if(isset($_GET['lang']) && !empty($_GET['lang'])) :
        if($_GET['lang'] ==  'fr') :
            $_SESSION['lang'] = 'fr';
            elseif($_GET['lang'] == 'en'):
            $_SESSION['lang'] = 'en';
            endif ;
        endif ;
?>