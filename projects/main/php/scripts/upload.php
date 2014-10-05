<?php
define("MAX_FILE_SIZE", 20000)
if ( ! isset($_FILES['upload']) ) {
    echo json_encode(array(
        'script' => 'upload',
        'status' => 'error',
        'msg' => 'No file was selected'
    ));
}
else {
    $file = stripslashes( $_FILES['upload'] ) ;
    $target = "../../media/uploads/";
    $target = $target . basename( $_FILES['upload']['name']);
    $res = file_exists($target);
    if ( $res ) {
        echo json_encode(array(
            'script' => 'upload',
            'status' => 'error',
            'msg' => 'File already exists. Try changing name or check <a href="' . $target . '">this</a>'
        ));
    } else {
        $res = move_uploaded_file( $_FILES['upload']['tmp_name'], $target )
        if ( $res ) {
            echo json_encode(array(
                'script' => 'upload',
                'status' => 'error',
                'msg' => 'Unable to upload file. Contact webops.'
            ));
        } else {
            echo json_encode(array(
                'script' => 'upload',
                'status' => 'success',
                'msg' => $target
            ));
        }
        fclose($fp);
    }
}
?>
