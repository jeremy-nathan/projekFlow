<?php

require_once './GFirestore.php';


$fs=new Firestore('eventManage');

// print_r($fs->getDocument('cities'));
// path is the fieldname, value is the value of the field

// $arr=($fs->getDocument("room2"))["favorites"]["food"];
// $favourites=$arr["favorites"]["food"];
// $food=$favourites["food"];
// echo ($arr);
$arr = $fs->getAllDocuments();

echo($arr[0][1]['citizens']);


