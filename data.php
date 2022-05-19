<?php

$birthdate = "2002-09-09";
$today = date("Y-m-d");
$diff = date_diff(date_create($birthdate), date_create($today));
$age = $diff->format('%y');

if ($age < 18){
echo $age;

}else{
    echo "hight" . $age;
}


const ROOT_DIR = __DIR__;

require_once __DIR__ . '/config/constants.php';
require_once __DIR__ . '/config/DB.php';

require_once APP_DIR . '/index.php';

$content = convertToAssoc(db_select(
    "content",
    "*",
    " name IN ('header', 'home', 'service', 'about', 'price', 'blog', 'contact_us')"
)) ;


//echo '<pre>' . print_r($content);

dd($_SERVER);