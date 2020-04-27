<html>
<head>
  <title>Projekflow Login</title>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js"></script>
    
    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-analytics.js"></script>
    <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-firestore.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
  <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css" /> -->
</head>
<body>
<!-- Login -->
    <div id="firebaseui-auth-container"></div>
    <div id="loader">Loading...</div>

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
    <script src="assets/js/auth.js"></script>
    <!-- <script src="assets/js/other.js"></script> -->
  </body>
</html>
