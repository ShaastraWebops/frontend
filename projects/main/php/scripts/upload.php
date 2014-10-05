<?php
define("MAX_FILE_SIZE", 20000);
//print_r($_FILES['upload']);
if ( ! ( isset($_FILES['upload']['tmp_name']) && $_FILES['upload']['tmp_name'] != "" ) ) {
    echo json_encode(array(
        'script' => 'upload',
        'status' => 'error',
        'msg' => 'No file was selected'
    ));
} else {
    $file = $_FILES['upload'];
    $folder = $_REQUEST['folder'];
    if ($file) {
        $target = "../../media/" . $folder . "/";
    } else {
        $target = "../../media/";
    }
    if (!file_exists($target)) {
        die (json_encode(array(
            'script' => 'upload',
            'status' => 'error',
            'msg' => 'Path doesnt exist : ' . $target
        )));
    }
    if (!is_writeable($target)) {
        die (json_encode(array(
            'script' => 'upload',
            'status' => 'error',
            'msg' => 'Cannot write to the folder ' . $target
        )));
    }
    $target = $target . basename( $_FILES['upload']['name']);
    $res = file_exists($target);
    if ( $res ) {
        echo json_encode(array(
            'script' => 'upload',
            'status' => 'error',
            'msg' => 'File already exists. Try changing name or check <a href="' . $target . '">this</a>'
        ));
    } else {

        $res = move_uploaded_file( $_FILES['upload']['tmp_name'], $target );
        //echo $res;
        if ( $res ) {
            echo json_encode(array(
                'script' => 'upload',
                'status' => 'success',
                'msg' => $target
            ));
        } else {
            echo json_encode(array(
                'script' => 'upload',
                'status' => 'error',
                'msg' => 'Unable to upload file. Contact webops.'
            ));
        }
    }
}
?>
