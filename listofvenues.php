<?php

// Starts the session to store data in global variables.
// These global variables can be called in other pages too. 
session_start();

require_once './GFirestore.php';

// Disable notices. No errors will be displayed on the web page
error_reporting(0);
// Event collection
$event=new Firestore('event');
// Venue collection
$venue=new Firestore('venues');

$dataa=[];


// Checks if event has been created
if(isset($_POST["create"])){

// Saves value of "eventname" in a global variable called 'name'
    $_SESSION['name']=$_POST["eventname"];

    $startdate=$_POST["startdate"];
    $enddate=$_POST["enddate"];
    $eventname=$_POST["eventname"];
    $equipment=$_POST["equipment"];
    $numOfParticipants=$_POST["numOfParticipants"];
    $name=$_POST["studentName"];
    $matricNum=$_POST["matricNum"];
    $usercategory=$_POST["usercategory"];
    $email=$_POST["email"];
    $phoneNumber=$_POST["phoneNum"];


    $dataa=[
        // "StartDate"=>date_create("$startdate 00:00:00",timezone_open("Asia/Kuala_Lumpur")),
        // "EndDate"=>date_create("$enddate 23:59:59",timezone_open("Asia/Kuala_Lumpur")),
        "StartDate"=>date_format(date_create($startdate),'d/m/Y'),
        "EndDate"=>date_format(date_create($enddate),'d/m/Y'),
        "EventName"=>$eventname,
        "SpecialEquipment"=>$equipment,
        "NumberOfParticipants"=>(int)$numOfParticipants,
        "ApplicantName" => $name,
        "ApplicantMatricNumber" => $matricNum,
        "ApplicantCategory" => $usercategory,
        "ApplicantEmail" => $email,
        "ApplicantPhoneNumber" => (int)$phoneNumber
    ];
    // Creates a document for the created event
    $event->createDocument($eventname,$dataa);
}

$result=[];
if(!empty($_POST["submit"])){
    $category=$_POST["category"];
    $max=$_POST["max"];

    // Queries Firestore for both "Category" and "MaxCapacity" inputted by user
    if ($category<>"All" && (int)$max<>0) {
        $result[]=$venue->getCompositeWhere("Category","MaxCapacity","==","<=",$category,(int)$max);
    }
    // Only queries Firestore for "Category"
    elseif($category<>"All"){
        $result[]=$venue->getWhere("Category","==",$category);
    }
    // Only queries FIrestore for the maximum capacity of the venue
    elseif((int)$max<>0){
        $result[]=$venue->getWhere("MaxCapacity","<=",(int)$max);
    }
    // Displays all venues
    else{
    $result[]=$venue->getAllDocuments();
    }
}
else{
    $result[]=$venue->getAllDocuments();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>List Of Venues</title>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js"></script>
    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-firestore.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">

    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="text-primary">
    <nav class="navbar navbar-light navbar-expand-md bg-light border rounded-0 shadow navigation-clean-button">
        <div class="container-fluid">
        <a class="navbar-brand" data-aos="fade" href="createevent.php>ProjekFlow</a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav text-primary ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="createevent">Book</a></li>
                </ul
                <span class="navbar-text actions"> 
                    <button class="btn btn-light action-button" onclick="mainApp.logOut()" role="button">Log Out</button>
                </span>
            </div>
        </div>  <!-- the issue is the index.html#doesnt work and the login page still glitchy-->
    </nav>
    <div class="container" style="margin-top: 100px;">
        <h1 class="text-center text-dark">Filter</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-row">
                <div class="col-sm-12">
                    <div class="form-group">
                    <label class="text-dark">Category</label>
                    <select name="category" class="form-control">
                        <option value="All" selected="">All</option>
                        <option value="Multipurpose Hall">Multipurpose Hall</option>
                        <option value="Multipurpose Room">Multipurpose Room</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="text-dark">Maximum Capacity</label>
                        <input name="max" class="form-control" value="0" type="number">
                    </div>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-6 col-sm-6 col-lg-4 col-xl-4">
                    <button class="btn btn-light text-center border-dark align-items-center" type="reset" style="width: 100%;">Reset</button>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4" style="max-width: 50%;">
                <input class="btn btn-primary text-center align-items-center" name="submit" type="submit" value="Submit" style="width: 100%;">
            </div>
            </div>
        </form>
        <h4 class="display-4 text-center text-dark" style="margin-top: 50px;margin-bottom: 20px;">Venues</h4>
    </div>

    <div class="container" style="margin-bottom: 50px;">
        <div class="row row-cols-sm-1 row-cols-md-4 row-cols-lg-4 row-cols-xl-4 justify-content-sm-center">
            <?php 
            // Generate venues based on the number of results returned by the query
                foreach($result[0] as $data){
                    echo '<div class="col-sm-10 col-md-6 col-lg-4 col-xl-4">
                <div class="card shadow-sm"><img class="card-img-top w-100 d-block" src='.$data["Image"].' style="min-height: 137.484px;max-height: 200px;height: 200px;">
                    <div class="card-body">
                        <h4 class="text-dark card-title">'.$data["Name"].'</h4>
                        <div class="d-flex">
                            <div class="row row-cols-2" style="max-width: 420px;min-width: 300px;">
                                <div class="col-2 col-lg-2" style="max-width: 10%;"><i class="fa fa-location-arrow"
                                        data-toggle="tooltip" data-bs-tooltip="" data-placement="left"
                                        style="color: rgb(52,58,64);" title="Address"></i>
                                </div>
                                <div class="col-10 col-lg-10" style="max-width: 90%;">
                                    <h6 class="text-muted mb-2">'. $data["Address"] .'<br></h6>
                                </div>
                                <div class="col-2 col-lg-2" style="max-width: 10%;"><i class="fa fa-building"
                                        data-toggle="tooltip" data-bs-tooltip="" data-placement="left"
                                        style="color: rgb(52,58,64);" title="Category"></i></div>
                                <div class="col-10 col-lg-10" style="max-width: 90%;width: 293px;">
                                    <h6 class="text-muted mb-2">'. $data["Category"] .'<br></h6>
                                </div>
                                <div class="col-sm-2 col-lg-2" style="max-width: 10%;"><i class="fa fa-users"
                                        data-toggle="tooltip" data-bs-tooltip="" data-placement="left"
                                        style="color: rgb(52,58,64);" title="Max Capacity"></i></div>
                                <div class="col-10 col-lg-10" style="max-width: 90%;">
                                    <h6 class="text-muted mb-2" style="width: 233px;">'. $data["MaxCapacity"] .' person<br></h6>
                                </div>
                            </div>
                        </div>
                        <form>
                            <button class="btn btn-primary float-right" name="book" type="submit" value="'.$data["Name"].'" formmethod="GET" formaction="details.php" style="border-radius: 30px;">Book</button>
                        </form>
                    </div>
                </div>
            </div>';
                }
            ?>
        </div>
    </div>

	
<meta name="viewport" content="width-device-width, initial-scale=1">
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="Ask us anything!"
  agent-id="71489671-749b-48f8-839a-af63e12e262e"
  language-code="en"
></df-messenger>

    <script src="assets/js/fireBase.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/other.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>

</body>

</html>



