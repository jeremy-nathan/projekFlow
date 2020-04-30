var app_firebase = {};
(function () {
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "#####################",
        authDomain: "##########################",
        databaseURL: "################################",
        projectId: "#####################",
        storageBucket: "#####################",
        messagingSenderId: "#####################",
        appId: "#####################",
        measurementId: "#####################"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
    app_firebase = firebase;
})();