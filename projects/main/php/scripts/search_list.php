<?php
    if ( file_exists('../../php/base/config.php') ) {
        include('../../php/base/config.php');
    } else {
        $DEBUG = 1;
        $SITE_URL = "http://localhost/shaastra/projects/main/php/pages/"; // Do not forget the trailing slash
        $ERP_SITE_URL = "http://localhost:8000/"; // Do not forget the trailing slash
        $ERP_TOKEN = "";
    }
    $search_list = array();
    $catlist = scandir('../../php/events');
    unset($catlist[array_search('.', $catlist)]);
    unset($catlist[array_search('..', $catlist)]);
    unset($catlist[array_search('sample.html', $catlist)]);
    unset($catlist[array_search('Others', $catlist)]);
    unset($catlist[array_search('Sampark', $catlist)]);
    foreach($catlist as $cat) { // Categories
        $search_list[$cat] = array("tags" => $cat,
            "url" => $SITE_URL . "eventlist.php?category=" . $cat,
            "img" => $SITE_URL . "../../img/events/categories/" . strtolower($cat) . ".jpg");
        if( is_dir('../../php/events/' . $cat) ) {
            $evlist = scandir('../../php/events/' . $cat);
            unset($evlist[array_search('.', $evlist)]);
            unset($evlist[array_search('..', $evlist)]);
            unset($evlist[array_search('sample.html', $evlist)]);
            foreach($evlist as $ev) {
                $search_list[$cat]["tags"] = $search_list[$cat]["tags"].",".$ev;
                $search_list[$ev] = array("tags" => $ev.",".$cat,
                    "url" => $SITE_URL . "event.php?category=" . $cat . "&event=" . $ev,
                    "img" => $SITE_URL . "../../img/events/list/" . strtolower(str_replace("'","",$ev)) . ".jpg");
            }
        }
    }
    echo json_encode($search_list)
?>

