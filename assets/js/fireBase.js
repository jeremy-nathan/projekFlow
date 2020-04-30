var app_firebase = {};
(function () {
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyDqEOeZopj_VTlLVZ0NkrOslYkE5r3hEy8",
        authDomain: "fir-php-4bdd0.firebaseapp.com",
        databaseURL: "https://fir-php-4bdd0.firebaseio.com",
        projectId: "fir-php-4bdd0",
        storageBucket: "fir-php-4bdd0.appspot.com",
        messagingSenderId: "235554520478",
        appId: "1:235554520478:web:fa027bd1f5a0d59cfd6a8f",
        measurementId: "G-3GGPTN9XKD"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
    app_firebase = firebase;
})();