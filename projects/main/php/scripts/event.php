<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL); 

if ( !isset($_REQUEST['dirname']) ) {
    header('Location: ../pages/categories.php');
}
$dirname = $_REQUEST['dirname'];
$oldname = $_REQUEST['oldname'];
$newname = $_REQUEST['newname'];
$oldpriority = str_pad(preg_replace("/[^0-9,.]/", "", $_REQUEST['oldpriority']), 2, '0', STR_PAD_LEFT);
$newpriority = str_pad(preg_replace("/[^0-9,.]/", "", $_REQUEST['newpriority']), 2, '0', STR_PAD_LEFT);

$old_tab_name = $dirname . '/' . $oldpriority . $oldname;
$new_tab_name = $dirname . '/' . $newpriority . $newname;

if ( isset($_REQUEST['rename']) || isset($_REQUEST['priority']) || isset($_REQUEST['create'])) {
    $i = 1;
    echo $new_tab_name;
    echo $old_tab_name;
    while ( file_exists($new_tab_name . '.html') ) {
        $i = $i + 1;
        $new_tab_name = $new_tab_name . '(' . $i . ')'; 
    }
    if ( $oldpriority . $oldname == '' ) {
        echo "CREATE NEW FILE";
        $fp = fopen($new_tab_name . '.html', "w"); // create
        fclose($fp);
    } else {
        rename($old_tab_name . '.html', $new_tab_name . '.html'); // rename
    }   
} elseif ( isset($_REQUEST['delete']) ) {
    if ( file_exists($old_tab_name . ".html") ) {
        unlink($old_tab_name . ".html");
    }
}

header('Location: ' . str_replace('tab=' . $old_tab_name, 'tab=' . $new_tab_name, $_SERVER['HTTP_REFERER']))

?>

