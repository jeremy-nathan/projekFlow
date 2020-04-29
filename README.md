# projekFlow

## Solution Challenge Product

  
### Requirements

 - PHP installed.
 - [Composer](https://getcomposer.org/download/)
 - [grpc](https://cloud.google.com/php/grpc) extension enabled.
 - [XAMPP](https://www.apachefriends.org/download.html) (also installs PHP).

### Getting started

 1. Create a folder (with a name of your own choosing) in the 'htdocs' folder in XAMPP directory.
 2. Clone the repository into the created folder.
 3. Open a terminal of your choice. Ensure that the path is pointing to the created folder.
 4. Install required packages by the running the following commands below
```
composer install
composer update
```
 5. Go to [firebase](firebase.google.com) and create a project. Copy the project ID.
 6. Open 'GFirestore.php'.
 7. Replace <PROJECT_ID> with the project ID of your newly-created project in the snippet below.
 ```js
public  function  __construct(string  $collection){
	$this->db =  new  FirestoreClient([
				'projectId'=>  '<PROJECT_ID>'
				]);
	$this->name=$collection;
	}
```
 8. Go to your created project at [firebase console](https://console.firebase.google.com/u/0/) and click 'Add app' and select 'Web'.
 9. Enter your web app's name and click 'Register', then copy the contents of firebaseConfig. 
```js
var firebaseConfig =  {  
apiKey:  "##################",  
authDomain:  "##################",  
databaseURL:  "#############",  
projectId:  "##################",  
storageBucket:  "############",  
messagingSenderId:  "#######################",  
appId:  "################",  
measurementId:  "#####################"  
};
```
 
 10. Open `assets/js/fireBase.js` and replace the current contents of firebaseConfig with one you copied earlier. 

 11. Open `xampp-control.exe` and click the 'Start' button in 'Apache' section.
 12. Open a browser (preferably Google Chrome). In the URL bar, type 'localhost/***your-folder-name***' and press 'Enter'.
 13. Done  
