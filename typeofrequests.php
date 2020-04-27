<?php

require_once './GFirestore.php';

// error_reporting(0);

$event=new Firestore('event');

session_start();

if(isset($_POST["confirm"])){
  $venue = [
      ["path"=>"Venue","value"=>$_POST["confirm"]]
    ];
  $event->updateDocument($_SESSION['name'],$venue);
  echo "test";

}


?>