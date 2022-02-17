<?php
date_default_timezone_set('America/Sao_Paulo');
define("ENV", "development");
/*
*    Database Access
*/
if(ENV == 'production'){
    define("BASE_URL", "http://bcit-ci-CodeIgniter-b73eb19/");
    define("DB_HOST", "localhost");
    define("DB_BASE", "sim");
    define("DB_USER", "root");
    define("DB_PASS", "");
}else{
    define("BASE_URL", "http://localhost/MARS-GALLERY/");
    define("DB_HOST", "localhost");
    define("DB_BASE", "padrao");
    define("DB_USER", "root");
    define("DB_PASS", "");
}

/*
*   Default Vars - Not touch
*/
define("DS"        , DIRECTORY_SEPARATOR);
define("URL_SITE"  , "http://localhost/MARS-GALLERY/");
