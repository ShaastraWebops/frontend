<?php
$marquee = stripslashes( $_REQUEST['marquee'] ) ;
$file_name = $_REQUEST['filename'];
// echo $file_name;
$fp = fopen ($file_name, "w+");
if ( !$fp ) {
    echo json_encode(array(
        'script' => 'save_to_file', 
        'msg' => 'error',
        'file' => $file_name,
        'fp' => $fp
    ));
} else {
    if(fwrite($fp, $marquee)) {
        echo json_encode(array(
            'script' => 'save_to_file', 
            'msg' => 'success'
        ));
    } else {
        echo json_encode(array(
            'script' => 'save_to_file', 
            'msg' => 'error',
            'file' => $file_name,
            'fp' => $fp
        ));
    }
    fclose($fp);
}
 
?>