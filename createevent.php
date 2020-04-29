<?php
// phpinfo();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>projekflow</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
        <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js"></script>
    
    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-firestore.js"></script>

    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
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
                </span> 
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 50px;margin-bottom: 100px;">
        <div class="row text-dark justify-content-center">
            <div class="col-md-12 col-lg-9">
                <div class="card">
                    <div class="card-body shadow">
                        <h2 class="text-center card-title" style="margin-bottom: 20px;">New Booking</h2>
                        <form action="listofvenues.php" method="POST">
                            <div class="form-group">
                                <div class="form-row row-cols-2 justify-content-center" style="margin-bottom:15px;">
                                    <div class="col-4 col-md-2 col-lg-2 col-xl-3">
                                        <label class="col-form-label">Start Date</label>
                                    </div>
                                    <div class="col-8 col-md-6 col-lg-8">
                                        <input name="startdate" class="form-control" type="date">
                                    </div>
                                </div>
                                <div class="form-row justify-content-center" style="margin-bottom: 15px;">
                                    <div class="col-4 col-md-2 col-lg-2 col-xl-3">
                                        <label class="col-form-label">End Date</label>
                                    </div>
                                    <div class="col-8 col-md-6 col-lg-8">
                                        <input name="enddate" class="form-control" type="date">
                                    </div>
                                </div>
                                <div class="form-row justify-content-center" style="margin-bottom: 15px;">
                                    <div class="col-4 col-md-2 col-lg-2 col-xl-3">
                                        <label class="col-form-label">Event Name</label>
                                    </div>
                                    <div class="col-8 col-md-6 col-lg-8">
                                        <input name="eventname" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-row justify-content-center" style="margin-bottom: 15px;">
                                    <div class="col-4 col-md-2 col-lg-2 col-xl-3">
                                        <label class="col-form-label">Special Equipment</label>
                                    </div>
                                    <div class="col-8 col-md-6 col-lg-8 align-self-center">
                                        <input name="equipment" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-row justify-content-center" style="margin-bottom: 15px;">
                                    <div class="col-4 col-md-2 col-lg-2 col-xl-3">
                                        <label class="col-form-label">Number of Participants</label>
                                    </div>
                                    <div class="col-8 col-md-6 col-lg-8 align-self-center">
                                        <input name="numOfParticipants" class="form-control" type="number">
                                    </div>
                                </div>
                                <div class="form-row justify-content-center" style="margin-bottom: 15px;">
                                    <div class="col-4 col-md-2 col-lg-2 col-xl-3">
                                        <label class="col-form-label">Name</label>
                                    </div>
                                    <div class="col-8 col-md-6 col-lg-8 align-self-center">
                                        <input name="studentName" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-row justify-content-center" style="margin-bottom: 15px;">
                                    <div class="col-4 col-md-2 col-lg-2 col-xl-3">
                                        <label class="col-form-label">New Matric No.</label>
                                    </div>
                                    <div class="col-8 col-md-6 col-lg-8 align-self-center">
                                        <input name="matricNum" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-row justify-content-center" style="margin-bottom: 15px;">
                                    <div class="col-4 col-md-2 col-lg-2 col-xl-3">
                                        <label class="col-form-label">User Category</label>
                                    </div>
                                    <div class="col-8 col-md-6 col-lg-8 align-self-center">
                                        <select name="usercategory" class="form-control">
                                            <option value="" selected="">Choose a user category</option>
                                            <option value="Student">Student</option>
                                            <option value="Staff">Staff</option>                                            
                                            <option value="Guest">Guest</option>
                                        </select>                                    
                                    </div>
                                </div>
                                <div class="form-row justify-content-center" style="margin-bottom: 15px;">
                                    <div class="col-4 col-md-2 col-lg-2 col-xl-3">
                                        <label class="col-form-label">Email</label>
                                    </div>
                                    <div class="col-8 col-md-6 col-lg-8 align-self-center">
                                        <input name="email" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="form-row justify-content-center" style="margin-bottom: 15px;">
                                    <div class="col-4 col-md-2 col-lg-2 col-xl-3">
                                        <label class="col-form-label">Phone Number</label>
                                    </div>
                                    <div class="col-8 col-md-6 col-lg-8 align-self-center">
                                        <input name="phoneNum" class="form-control" type="number">
                                    </div>
                                </div>
                                <div class="form-row justify-content-center align-items-center" style="margin-bottom: 15px;">
                                    <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                        <button name="create" class="btn btn-success btn-block" type="submit">Create</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
 
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

</body>

</html>