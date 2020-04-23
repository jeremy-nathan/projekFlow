<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">

    <title>First Page Form</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/css/Form_First_Stage_styles.css">

      <!-- BootStrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>

<!-- 9un9bn0u9b09iubn9unu9bu98bub08yb8098b -->
  <body>
    <form action="form_second_page.php" method="POST">
            <div id ="Header" class="card">
        <div class="card-body">
            <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Step 1: Heading</h1>
          <p class="lead">This will include the sender's information, located in the top-left part of the letter.</p>
        </div>
      </div>
      </div>
      </div>
      <div class="card">
        <div class = "card-body">
      <div class="form-row">
        <div id="first_name" class="form-group col-lg-12">
          <label for="inputEmail4">Full Name / Association's Name / Club's Name</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
      </div>
      <div id="street_address" class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div id="street_address_2" class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div id="city" class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div id="state" class="form-group col-md-4">
          <label for="inputState">State</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>Selangor</option>
            <option>Perak</option>
            <option>Kedah</option>
            <option>Kelantan</option>
            <option>Johor</option>
            <option>Sabah</option>
            <option>Sarawak</option>
            <option>Pahang</option>
            <option>Melaka</option>
            <option>Negeri Sembilan</option>
            <option>Terengganu</option>
            <option>Perlis</option>
            <option>Penang</option>
            <option>Wilayah Persekutuan Kuala Lumpur</option>
            <option>Wilayah Persekutuan Putrajaya</option>
          </select>
        </div>
        <div id="zip_code" class="form-group col-md-2">
          <label for="inputZip">Zip Code</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
      </div>
    <div id="date" class="form-group col-md-4">
      <label for="date">Date : </label>
      <input type="date" class="form-control" id="birthday" name="birthday">
    </div>


      <!-- <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div> -->
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  </div>
  </body>

</html>
