/*// signup
const signupForm = document.querySelector('#newuser_div');
signupForm.addEventListener('submit', (e) => {
  e.preventDefault();
  
  // get user info
  const email = signupForm['newemail_field'].value;
  const password = signupForm['newpassword_field'].value;

  // sign up the user
  auth.createUserWithEmailAndPassword(email, password).then(cred => {
    console.log(cred.user);
    // close the signup modal & reset form
    const modal = document.querySelector('#newuser_div');
    signupForm.reset();
  });
}); */



    // Since these fields will not passed in for creating a user. It is redundant

      // sign up new users 
  function submit(){
        
    const db = firebase.firestore();
          
    // get user info
    const email = document.getElementById('newemail_field').value;
    const password = document.getElementById('newpassword_field').value;
    const matricnumber = document.getElementById('matric_field').value;
    const name = document.getElementById('name_field').value;
    const phonenumber = document.getElementById('phone_field').value;
    var category = document.getElementById('category_field').value;

    firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // [START_EXCLUDE]
        if (errorCode == 'auth/weak-password') {
          alert('The password is too weak.');
        } else {
          alert(errorMessage);
        }
        console.log(error);
        // [END_EXCLUDE]
      });

      db.collection("User").add({
          "Full Name": name,
          "New Matric Number": matricnumber,
          "Email": email,
          "Phone number": phonenumber,
          "Category" : category
        })
        .catch(function (error) {
          console.error(error);
        });

    }






