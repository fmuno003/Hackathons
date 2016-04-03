
<?php
  session_start();

  if(isset($_SESSION['username'])){
	session_start();
	session_destroy();
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <style>
         p {border: 1px dashed blue;}
     </style>
    <meta charset="utf-8">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>

  <body>
    <div class="container">
        <p>
    <center>
      <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
        <h2 class="form-signup-heading" style="color: blue">Register</h2>
        <br>
            <input name="firstname" id="firstname" type="text" class="form-control" placeholder="First Name" autofocus>
            <input name="lastname" id="lastname" type="text" class="form-control" placeholder="Last Name" autofocus>
        </br>
        <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="email" id="email" type="text" class="form-control" placeholder="Email">
        <br>
            <input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
            <input name="password2" id="password2" type="password" class="form-control" placeholder="Repeat Password">
        </br>
        <input name="school" id="school" type="text" class="form-control" placeholder="University" autofocus>
        <input name="major" id="major" type="text" class="form-control" placeholder="Major" autofocus>
        <br>
            <input name="year" id="year" type="text" class="form-control" placeholder="School Year" autofocus>
            <input name="phone" id="phone" type="text" class="form-control" placeholder="Phone Number" autofocus>
        </br>

        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </center>
        </p>

        <div id="message"></div>
      </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script src="js/signup.js"></script>


    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>

$( "#usersignup" ).validate({
  rules: {
	email: {
		email: true,
		required: true
	},
    password1: {
      required: true,
      minlength: 4
	},
    password2: {
      equalTo: "#password1"
    }
  }
});
</script>

  </body>
</html>
