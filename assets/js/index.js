<<<<<<< Updated upstream
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.

    document.getElementById("user_div").style.display = "block";
    document.getElementById("login_div").style.display = "none";
    document.getElementById("newuser_div").style.display = "none";
    var user = firebase.auth().currentUser;

    if(user != null){


      var email_id = user.email;
      
      
      document.getElementById("user_para").innerHTML = "Welcome User : " + email_id;

=======
var mainApp = {};
(function () {
  var firebase = app_firebase;
  firebase.auth().onAuthStateChanged(function (user) {
    var uid = null;
    if (user) {
      // User is signed in.
      uid = user.uid;
    } else {
      // User is signed out.
      uid = null;
      window.location.replace("index.php");
>>>>>>> Stashed changes
    }
  });

  function logOut() {
    firebase.auth().signOut();
  }
  mainApp.logOut = logOut;
})()