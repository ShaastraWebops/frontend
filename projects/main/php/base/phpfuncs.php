<?php

function slugify($text) {
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
    $text = trim($text, '-');
    if (function_exists('iconv')) {
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    }
    $text = strtolower($text);
    $text = preg_replace('~[^-\w]+~', '', $text);

    if (empty($text)) {
        return 'n-a';
    }
    return $text;
}


function endsWith($haystack, $needle) {
    return $needle === "" || substr($haystack, -strlen($needle)) === $needle;
}

function show404() {
    include '../../php/pages/404.php';
    die();
}

?>
