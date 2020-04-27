<html>
<head>
  <title>projekFlow Sign Up </title>
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
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css" />

</head>
<body>
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
                </ul>
                <span class="navbar-text actions"> 
                    <button class="btn btn-light action-button" onclick="mainApp.logOut()" role="button">Log Out</button>
                </span>
            </div>
        </div>  <!-- the issue is the index.html#doesnt work and the login page still glitchy-->
    </nav>

  <!-- Signup -->
  <div id="newuser_div" class="register-div">    
    <h3>Hello! Welcome to projekFlow</h3>
    <p id="newuser_para">We would like to get to know you more.</p>
    <input type="text" placeholder="Full name..." id="name_field" />
    <input type="text" placeholder="New Matric Number..." id="matric_field" />
    <input type="email" placeholder="Email..." id="newemail_field" />
    <input type="password" placeholder="Password..." id="newpassword_field" />
    <!--<input type="category" placeholder="Student / Staff..." id="category_field" />-->
    <label>Select your category:</label> </br>
    <select id="category_field">
      <option selected value="Student">Student</option>
      <option value="Staff">Staff</option>
      <option value="Outside">Outside</option>
    </select>
    <input type="phonenumber" placeholder="Phone Number..." id="phone_field" />
    <button type="button" onclick="submit()">Submit</button>  
    <br>
    <button type="button" onclick="backtologinpage()">Back to Login Page</button>
  </div>

<meta name="viewport" content="width-device-width, initial-scale=1">
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="Ask us anything!"
  agent-id="71489671-749b-48f8-839a-af63e12e262e"
  language-code="en"
></df-messenger>


<!-- // make auth and firestore references-->
<!-- const auth = firebase.auth() -->
<!-- const db = firebase.firestore() -->
<!-- //update firestore settings -->
<!-- db.settings({timestampsInSnapshots: true}); -->

  <script src="assets/js/fireBase.js"></script>
  <script src="assets/js/index.js"></script>
  <script src="assets/js/other.js"></script>

</body>
</html>
