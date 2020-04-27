<?php

require_once './GFirestore.php';

// Disable notices. No errors will be displayed on the web page
error_reporting(0);

// Venue collection
$venue=new Firestore('venues');

// Event collection
$event=new Firestore('event');

$data=[];

// Checks if event has been created


if(isset($_GET["book"])){

    $venueName=$_GET["book"];

    $result=[];

    $result=$venue->getWhere("Name","==",$venueName);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $venueName; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="text-primary">
    <nav class="navbar navbar-light navbar-expand-md bg-light border rounded-0 shadow navigation-clean-button">
        <div class="container-fluid">
        <a class="navbar-brand" data-aos="fade" href="#">ProjekFlow</a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav text-primary ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Book</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Profile</a></li>
                </ul><span class="navbar-text actions"> <a class="login" href="#">Log In</a><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></span></div>
        </div>
    </nav>
    <div class="container" style="margin-top: 100px;">
        <?php
          if(sizeof($result)==0){
            echo '<div class="alert alert-warning" role="alert">Sorry there are no venue with the name "'.htmlentities($venueName).'"</div>';
          }
          else{
            /*<form role="form" name="skpfrm" method="post" action="https://umpoint.um.edu.my/modules/mbp/" class="form-horizontal">
						<input type="hidden" name="act" value="bookweek">
						<input type="hidden" name="ptjid" value="2">
						<input type="hidden" name="mid" value="8">
						<input type="hidden" name="spid" value="7436">
						<input type="hidden" name="arrpayid" value="1072,1078,1083">
						<input type="hidden" name="dep" value="87">
						<input type="hidden" name="srchtype" value="">
						<input type="hidden" name="recnum" value="0">
						<input type="hidden" name="ptj" value="">
						<input type="hidden" name="viewid" value="">

						<input type="submit" value="Submit">
					</form>*/
            echo'
            <div class="container">
              <div class="row  justify-content-center">
                <div class="col-md-auto mr-5">
                <img src="'.$result[0]['Image'].'" class="rounded img-fluid" alt="Responsive image">
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <h2><span class="badge badge-primary p-3 mb-3">'.$result[0]['Name'].'</span></h2>
                  </div>
                  <div class="row">
                  <p><span class="badge badge-primary p-1 mr-2" style="color:white;"><i style="font-size:18px;" class="mr-1 fa fa-map-marker" aria-hidden="true"></i>Category</span> '.$result[0]['Category'].'</p>
                  <p><span class="badge badge-primary p-1 mr-2" style="color:white;"><i style="font-size:18px;" class="mr-1 fa fa-map-marker" aria-hidden="true"></i>Facilities</span> '.$result[0]['Facilities'].'</p>
                  <p><span class="badge badge-primary p-1 mr-2" style="color:white;"><i style="font-size:18px;" class="mr-1 fa fa-map-marker" aria-hidden="true"></i>Maximum Capacity</span> '.$result[0]['MaxCapacity'].'</p>
                  <p><span class="badge badge-primary p-1 mr-2" style="color:white;"><i style="font-size:18px;" class="mr-1 fa fa-map-marker" aria-hidden="true"></i>Address</span> '.$result[0]['Address'].'</p>
                  <p><span class="badge badge-primary p-1 mr-2" style="color:white;"><i style="font-size:18px;" class="mr-1 fa fa-map-marker" aria-hidden="true"></i>Contact</span> '.$result[0]['Contact'].'</p>
                  </div>
                </div>
              </div>
              <div class="row mt-5 mb-5 justify-content-center">
                <form action="typeofrequests.php" method="POST">
                  <button name="confirm" value="'.$venueName.'" type="submit" class="btn mr-3 btn-primary btn-lg">Confirm</button>
                  <button type="button" onClick="javascript:history.go(-1)" class="btn btn-secondary btn-lg">Back</button>
                </form>
              </div>
            </div>';
        }
      
        ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    
</body>

</html>
