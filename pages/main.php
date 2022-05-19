<?php

$content = convertToAssoc(db_select(
    "content",
    "*",
    " name IN ('header', 'home', 'service', 'about', 'price', 'blog', 'contact_us')"
)) ;

// additional modal files


// Parts of main page

require_once PARTS_DIR . '/header.php';
require_once PARTS_DIR . '/home.php';
require_once PARTS_DIR . '/about.php';
require_once PARTS_DIR . '/service.php';
require_once PARTS_DIR . '/price.php';
require_once PARTS_DIR . '/blog.php';
//require_once PARTS_DIR . '/contact_us.php';


