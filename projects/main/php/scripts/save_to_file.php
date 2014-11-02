<?php
$data = stripslashes( $_REQUEST['data'] ) ;
$file_name = $_REQUEST['filename'];
// echo $file_name;
if (strcmp($file_name, '../../php/misc/poll.csv') == 0)
    $fp = fopen ($file_name, "a+");
else
    $fp = fopen ($file_name, "w+");
if ( !$fp ) {
    echo json_encode(array(
        'script' => 'save_to_file', 
        'msg' => 'error',
        'file' => $file_name,
        'fp' => $fp
    ));
} else {
    if(fwrite($fp, $data)) {
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