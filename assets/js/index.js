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
    }
  });

  function logOut() {
    firebase.auth().signOut();
  }
  mainApp.logOut = logOut;
})()