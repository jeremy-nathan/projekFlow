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

    }

  } else {
    // No user is signed in.

    document.getElementById("user_div").style.display = "none";
    document.getElementById("login_div").style.display = "block";
    document.getElementById("newuser_div").style.display = "none";

  }
});



function login(){

  var userEmail = document.getElementById("email_field").value;
  var userPass = document.getElementById("password_field").value;

  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

    window.alert("Error : " + errorMessage);

    // ...
  });

}



function submit(){
  
    var email = document.getElementById('newemail_field').value;
    var password = document.getElementById('newpassword_field').value;
    var matricnumber = document.getElementById('matric_field').value;
    var name = document.getElementById('name_field').value;
    var category = document.getElementById('category_field').value;
    var phonenumber = document.getElementById('phone_field').value; 
    
    //sign in
    const promise = firebase.auth().createUserWithEmailAndPassword(email, password);
    promise
      .catch(e => console.log(e.message));
    



  }


function register(){

  document.getElementById("newuser_div").style.display = "block";
  document.getElementById("login_div").style.display = "none";
  
  
  //sign up new users 

  /*firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // ...
//}); */

}


function backtologinpage(){

  document.getElementById("user_div").style.display = "none";
  document.getElementById("login_div").style.display = "block";
  document.getElementById("newuser_div").style.display = "none";

}


function logout(){
  firebase.auth().signOut();
}
