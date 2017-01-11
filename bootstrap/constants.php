<?php

define('APP_NAME', 'Quickmerch');
define('APP_EMAIL_SENDER', 'testtalentelgia@gmail.com');
define('APP_URL', 'http://quickmerch.local/');
define('APP_DOMAIN', 'quickmerch.local/');
define('SERVER_NAME', $_SERVER['SERVER_NAME']);
define('THEME_VIEW_PATH', 'backend/partials/themes/');

if(APP_DOMAIN=='quickmerch.local/'){
    define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT']);
}else{
   define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT']."/public/"); 
}


