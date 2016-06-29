<?php

$json = file_get_contents('php://input');
$obj = json_decode($json);

$res = array();
foreach ($obj as $item) {
    if (strnatcasecmp($item, strrev($item)) == 0 ) {
        array_push($res, $item);
    }
}
echo json_encode($res);
?>

