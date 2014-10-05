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
        $target = "../../media/uploads/" . $folder . "/";
    } else {
        $target = "../../media/uploads/";
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
