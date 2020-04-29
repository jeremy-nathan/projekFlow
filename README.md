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
composer require "google/cloud"
composer require "grpc/grpc:^v1.27.0"
```
 5. Go to [firebase console](firebase.google.com) and create a project. Copy the project ID.
 6. Open 'GFirestore.php'.
 7. Replace <PROJECT_ID> with the project ID of your newly-created project in the snippet below.
 ```php
public  function  __construct(string  $collection){
	$this->db =  new  FirestoreClient([
				'projectId'=>  '<PROJECT_ID>'
				]);
	$this->name=$collection;
	}
```
