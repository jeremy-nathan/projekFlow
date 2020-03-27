<?php

require_once './GFirestore.php';


$fs=new Firestore('eventManage');

// print_r($fs->getDocument('cities'));
// path is the fieldname, value is the value of the field

// $arr=($fs->getDocument("room2"))["favorites"]["food"];
// $favourites=$arr["favorites"]["food"];
// $food=$favourites["food"];
// echo ($arr);

$fs->createCollection("Users","Jeremy");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
    
    <div style="padding-down:10px" class="container jumbotron">
        <form method="POST" action="registered.php">
            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" class="form-control" name="fname" id="name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="loname">Last Name</label>
                <input type="text" class="form-control" name="lname" id="loname">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
