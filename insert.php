<?php

$m = new MongoClient();
$db = $m->selectDB("donalddump");
$collection = $db->selectCollection("info");
if($_POST) {
    $insert = array(
        'name' => $_POST['name'];
        'email' => $_POST['email'];
        'message' => $_POST['message'];
    );

    if ($collection->insert($insert)) {
        echo "data is inserted";
    } else {
        echo "we have some issue";
    }
} else {
    echo "no data to store";
}

?>