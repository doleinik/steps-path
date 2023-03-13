<?php
$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true);

$positionStart = explode("/", $data['start']);
$positionEnd = explode("/", $data['end']);

if ((int)$positionEnd[0] > (int)$positionStart[0]) {
    $positionX = (int)$positionEnd[0] - (int)$positionStart[0];
} else {
    $positionX = (int)$positionStart[0] - (int)$positionEnd[0];
}

if ((int)$positionEnd[1] > (int)$positionStart[1]) {
    $positionY = (int)$positionEnd[1] - (int)$positionStart[1];
} else {
    $positionY = (int)$positionStart[1] - (int)$positionEnd[1];
}

echo $positionX + $positionY;