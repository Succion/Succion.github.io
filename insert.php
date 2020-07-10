<?php

$m = new MongoClient();
echo "Connection to database successfully"

$db = $m->selectDB("donalddump");
echo "Database mydb selected";

$collection = $db->selectCollection("info");
echo "Collection selected succsessfully";

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