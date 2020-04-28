<?php
session_start();
require_once './GFirestore.php';
require 'vendor/autoload.php';
use GuzzleHttp\Client;
// Disable notices. No errors will be displayed on the web page
error_reporting(0);

$Letter_info = new Firestore('Letter_info');
$Type_of_request = new Firestore('Type_of_request');
$docdata=[];



if(isset($_POST["cateringButton"])){
  $request_type=[];
  $request_type=($Type_of_request->getDocument("Catering_service"));
  sleep(1);
  // $request_type_json = json_encode($request_type);
  // $decoded_request_type = json_decode($contents,true);
  // $remoteURL= $decoded_contents["response"];

    $key = '13a5916221a4c40a6c00180f4e68877b769a8d86c0aa4ee0e5f4758ae3ebb4f4';
    $secret = '46e9868bbce2655a0bf59d66f8abaebcf454aaddf652341310eac297054ff8f0';
    $workspace = 'kannakanna56@yahoo.com.my';
    $resource = 'templates/95587/output';
    $data = [
      'key' => $key,
      'resource' => $resource,
      'workspace' => $workspace
    ];

    ksort($data);

    $signature = hash_hmac('sha256', implode('', $data), $secret);



    $client = new \GuzzleHttp\Client([
        'base_uri' => 'https://us1.pdfgeneratorapi.com/api/v3/'
    ]);

  $PIC_name = $request_type["PIC_name"];
  $PIC_position = $request_type["PIC_position"];
  $Department = $request_type["Department"];
  $full_name = $_POST["full_name"];
  $inputAddress1 = $_POST["inputAddress1"];
  $inputAddress2 = $_POST["inputAddress2"];
  $inputCity = $_POST["inputCity"];
  $inputState = $_POST["inputState"];
  $inputZip = $_POST["inputZip"];
  $Date = $_POST["Date"];
  $Letter_title = $_POST["Letter_title"];
  $Body_paragraphs = $_POST["Body_paragraphs"];
  $Sign_off =$_POST["Sign_off"];
  $Senders_name = $_POST["Senders_name"];
  $Senders_position = $_POST["Senders_position"];
  $AssociationClub_Name =$_POST["AssociationClub_Name"];

  $docdata = [
              "PIC_name"=> $PIC_name,
              "PIC_position"=> $PIC_position,
              "Department"=> $Department,
              "Full_Name"=> $full_name,
              "Address_1"=> $inputAddress1,
              "Address_2"=> $inputAddress2,
              "City" => $inputCity,
              "State" =>$inputState,
              "Zip_code" =>$inputZip,
              "Date" =>$Date,
              "Letter_title"=>$Letter_title,
              "Body_paragraphs"=>$Body_paragraphs,
              "Sign_off"=>$Sign_off,
              "Senders_name"=>$Senders_name,
              "Senders_position"=>$Senders_position,
              "AssociationClub_Name"=>$AssociationClub_Name
  ];

  sleep(1);


  $latest_entry_json = json_encode($docdata);
  $decoded_entry_json = json_decode($latest_entry_json);

  /**
   * Authentication params sent in headers
   */

  $response = $client->request('POST', $resource, [
    'body' => $latest_entry_json,
    'query' => [
      'format' => 'pdf',
      'output' => 'url'
    ],
    'headers' => [
      'X-Auth-Key' => $key,
      'X-Auth-Workspace' => $workspace,
      'X-Auth-Signature' => $signature,
      'Accept' => 'application/json',
      'Content-Type' => 'application/json; charset=utf-8',
    ]
  ]);
    /**
     * Authentication params sent in query string
     */
    $response = $client->request('POST', $resource, [
      'body' => $latest_entry_json,
      'query' => [
        'key' => $key,
        'workspace' => $workspace,
        'signature' => $signature,
        'format' => 'pdf',
        'output' => 'url'
      ]
    ]);

    $contents = $response->getBody()->getContents();

    $decoded_contents = json_decode($contents,true);
    $remoteURL= $decoded_contents["response"];
    header("location:$remoteURL");
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">

    <title>Letter Generation</title>
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
    <link rel="stylesheet" href="assets/css/Form_First_Stage_styles.css">

      <!-- BootStrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>


  <body>
      <nav class="navbar navbar-light navbar-expand-md bg-light border rounded-0 shadow navigation-clean-button">
        <div class="container-fluid">
        <a class="navbar-brand" data-aos="fade" href="createevent.php">ProjekFlow</a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav text-primary ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="createevent.php">Book</a></li>
                </ul>
                <span class="navbar-text actions">
                    <button class="btn btn-light action-button" role="button" onclick="mainApp.logOut()">Log Out</button>
                </span> <!-- double check on the logout() -->
            </div>
        </div>
    </nav>

    <form action="" target="_blank" style="margin-top:100px;" method="POST">
            <div id ="Header" class="card">
        <div class="card-body">
            <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Step 1: Heading</h1>
          <p class="lead">This will include the sender's information, located in the top-left part of the letter.</p>
        </div>
      </div>
      </div>
      </div>

      <div class="card">
        <div class = "card-body">
      <div class="form-row">
        <div id="first_name" class="form-group col-lg-8">
          <label for="full_name">Full Name / Association's Name / Club's Name</label>
          <input type="text" class="form-control" name="full_name">
        </div>
      </div>
      <div id="street_address" class="form-group">
        <label for="inputAddress1">Address</label>
        <input type="text" class="form-control" name="inputAddress1" placeholder="1234 Main St">
      </div>
      <div id="street_address_2" class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" name="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div id="city" class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" name="inputCity">
        </div>
        <div id="state" class="form-group col-md-4">
          <label for="inputState">State</label>
          <select name="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>Selangor</option>
            <option>Perak</option>
            <option>Kedah</option>
            <option>Kelantan</option>
            <option>Johor</option>
            <option>Sabah</option>
            <option>Sarawak</option>
            <option>Pahang</option>
            <option>Melaka</option>
            <option>Negeri Sembilan</option>
            <option>Terengganu</option>
            <option>Perlis</option>
            <option>Penang</option>
            <option>Wilayah Persekutuan Kuala Lumpur</option>
            <option>Wilayah Persekutuan Putrajaya</option>
          </select>
        </div>
        <div id="zip_code" class="form-group col-md-2">
          <label for="inputZip">Zip Code</label>
          <input type="number" class="form-control" name="inputZip">
        </div>
      </div>
    <div id="Date" class="form-group col-md-4">
      <label for="Date">Date : </label>
      <input type="date" class="form-control" id="Date" name="Date">
    </div>
      <!-- <button id="submit_button" type="submit" name="first_page_info" class="btn btn-primary">Submit</button> -->
  </div>
    </div>
      <div id ="Header" class="card">
    <div class="card-body">
      <div class="jumbotron jumbotron-fluid">
    <div class="container">
    <h1 class="display-4">Step 2: Body</h1>
    <p class="lead">This will include the title and the contents of the letter.</p>
    </div>
    </div>
    </div>

  </div>

  <div class="card">
    <div class = "card-body">
  <div class="form-row">
    <div id="title" class="form-group col-lg-12">
      <label for="inputEmail4">Letter Title</label>
      <p id="title_caption">Your title should be accurate and concise.</p>
      <input type="text" class="form-control" id="Letter_title" name="Letter_title">
    </div>

  </div>
  <div id="body_title" class="form-group">
<label for="exampleFormControlTextarea1">Body Paragraphs</label>
<p id="body_caption">Include space between paragraphs.</p>
<textarea class="form-control" id="Body_paragraphs" name="Body_paragraphs" rows="6"></textarea>
 </div>
</div>
  <!-- <button id="submit_button" name="second_page_info" type="submit" class="btn btn-primary">Submit</button> -->
  </div>

  <div id ="Header" class="card">
<div class="card-body">
  <div class="jumbotron jumbotron-fluid">
<div class="container">
<h1 class="display-4">Step 3: Closing</h1>
<p class="lead">The closing is used to end your letter.</p>
</div>
</div>
</div>
</div>

<div class="card">
  <div class = "card-body">

  <div id="body_title" class="form-group col-lg-9">
    <label for="inputEmail4">Sign-off</label>
    <p class="sign-off_caption">The sign-off can vary depending on to whom you are writing. Here are some examples:</p>
      <ul id=sign-off_list>
        <li>Sincerely</li>
        <li>Yours truly</li>
        <li>Cordially</li>
      </ul>
      <p class="sign-off_caption">Include a comma (,) after the closing.</p>
    <input type="text" class="form-control" id="Sign_off" name="Sign_off">
  </div>


    <div id="body_title" class="form-group col-12 col-xs-12 col-sm-12 col-lg-12">
      <label for="exampleFormControlTextarea1">Sender's Name</label>
      <p id="body_caption">Type your full name for the signature.</p>
      <p id="body_caption">Remember to sign your name under the closing after printing.</p>
      <input type="text" class="form-control" id="Senders_name" name="Senders_name">
    </div>
    <div id="body_title" class="form-group col-lg-9">
        <label for="exampleFormControlTextarea1">Sender's Position</label>
        <p id="body_caption">Type your position or role in the association/club.</p>
        <input type="text" class="form-control" id="Senders_position" name="Senders_position">
    </div>
    <div id="body_title" class="form-group col-lg-9">
    <label for="exampleFormControlTextarea1">Association / Club Name</label>
    <p id="body_caption">Type your association/club name.</p>
    <input type="text" class="form-control" id="AssociationClub_Name" name="AssociationClub_Name">
  </div>
    <button target="_blank" name="cateringButton" type="submit" class="btn btn-primary">Submit</button>
    </div>

  </form>

    <script src="assets/js/fireBase.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/other.js"></script>
  </body>

</html>
