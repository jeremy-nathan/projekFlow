<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">

    <title>Third Page Form</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/css/form_third_page_styles.css">

      <!-- BootStrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>

  <body>
    <form>
      <div id ="Header" class="card">
  <div class="card-body">
      <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Step 3: Closing</h1>
    <p class="lead">The closing is used to end your letter.</p>
  </div>
</div>
</div>
</div>

      <div class="card">
        <div class = "card-body">
      <div class="form-row">
        <div id="title" class="form-group col-lg-12">
          <label for="inputEmail4">Sign-off</label>
          <p class="sign-off_caption">The sign-off can vary depending on to whom you are writing. Here are some examples:</p>
            <ul id=sign-off_list>
              <li>Sincerely</li>
              <li>Yours truly</li>
              <li>Cordially</li>
            </ul>
            <p class="sign-off_caption">Include a comma (,) after the closing.</p>
          <input type="text" class="form-control" id="inputEmail4">
        </div>

      </div>
      <div id="body_title" class="form-group">
   <label for="exampleFormControlTextarea1">Sender's Name</label>
   <p id="body_caption">Type your full name for the signature.</p>
    <p id="body_caption">Remember to sign your name under the closing after printing.</p>
   <input type="text" class="form-control" id="inputEmail4">
     </div>
     <div id="body_title" class="form-group">
  <label for="exampleFormControlTextarea1">Sender's Position</label>
  <p id="body_caption">Type your position or role in the association/club.</p>
  <input type="text" class="form-control" id="inputEmail4">
    </div>
    <div id="body_title" class="form-group">
 <label for="exampleFormControlTextarea1">Association / Club Name</label>
 <p id="body_caption">Type your association/club name.</p>
 <input type="text" class="form-control" id="inputEmail4">
   </div>
    </div>
      <button id="submit_button" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </body>

</html>