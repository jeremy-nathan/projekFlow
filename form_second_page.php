<?php
require_once './GFirestore.php';

// Disable notices. No errors will be displayed on the web page
error_reporting(0);

$Letter_info = new Firestore('Letter_info');

$data=[];

if(isset($_POST["first_page_info"])){
  $full_name = $_POST["full_name"];
  $inputAddress1 = $_POST["inputAddress1"];
  $inputAddress2 = $_POST["inputAddress2"];
  $inputCity = $_POST["inputCity"];
  $inputState = $_POST["inputState"];
  $inputZip = $_POST["inputZip"];
  $Date = $_POST["Date"];

  $data = [
              "Full_Name"=> $full_name,
              "Address_1"=> $inputAddress1,
              "Address_2"=> $inputAddress2,
              "City" => $inputCity,
              "State" =>$inputState,
              "Zip_code" =>$inputZip,
              "Date" => date_create("$Date 00:00:00",timezone_open("Asia/Kuala_Lumpur"))
  ];

  $Letter_info->createDocument($full_name,$data);

}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">

    <title>Second Page Form</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/css/form_second_page_styles.css">

      <!-- BootStrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>

  <body>
    <form action="form_third_page.php" method="POST">
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
   <textarea class="form-control" id="exampleFormControlTextarea1" name="Body_paragraphs" rows="6"></textarea>
     </div>
    </div>
      <button name="second_page_info" id="submit_button" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </body>

</html>
