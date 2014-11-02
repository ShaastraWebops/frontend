<?php
$data = stripslashes( $_REQUEST['data'] ) ;
$file_name = $_REQUEST['filename'];
// echo $file_name;
if (strcmp($file_name, '../../php/misc/poll.csv') == 0)
    $fp = fopen ($file_name, "a+");
else
    $fp = fopen ($file_name, "w+");
if ( !$fp ) {
    if (strcmp($file_name, '../../php/misc/poll.csv') !== 0) {
        echo json_encode(array(
            'script' => 'save_to_file', 
            'msg' => 'error',
            'file' => $file_name,
            'fp' => $fp
        ));
    } else {
        echo "<script type=\"text/javascript\">window.alert('Error occurred (type-1)');window.location.href = '../../php/pages/home.php';</script>";
        exit;                        
    }
} else {
    if(strcmp($file_name, '../../php/misc/poll.csv') !== 0) {
        if(fwrite($fp, $data)) {
        // if (strcmp($file_name, '../../php/misc/poll.csv') !== 0) {
            echo json_encode(array(
                'script' => 'save_to_file', 
                'msg' => 'success'
            )); 
        // } else {
        //     echo "<script type=\"text/javascript\">window.alert('Successfully saved !');window.location.href = '../../php/pages/home.php';</script>";
        //     exit;            
        // }
        } else {
        // if (strcmp($file_name, '../../php/misc/poll.csv') !== 0) {
            echo json_encode(array(
                'script' => 'save_to_file', 
                'msg' => 'error',
                'file' => $file_name,
                'fp' => $fp
            ));
        // } else {
        //     echo "<script type=\"text/javascript\">window.alert('Error occurred (type-2)');window.location.href = '../../php/pages/home.php';</script>";
        //     exit;                        
        // }
        } 
    } else {
        if(fputcsv($fp, str_split($data, strlen($data)))) {
            echo "<script type=\"text/javascript\">window.alert('Successfully saved !');window.location.href = '../../php/pages/home.php';</script>";
            exit;            
        } else {
            echo "<script type=\"text/javascript\">window.alert('Error occurred (type-2)');window.location.href = '../../php/pages/home.php';</script>";
            exit;                        
        }
    }
    fclose($fp);
}
?>