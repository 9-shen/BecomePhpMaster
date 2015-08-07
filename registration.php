<?php include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<?php 

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$username = mysqli_real_escape_string($connection, $username);
	$email    = mysqli_real_escape_string($connection, $email);
	$password = mysqli_real_escape_string($connection, $password);

	$query ="SELECT randsalt FROM users";
	$select_randsalt_query = mysqli_query($connection, $query);

	if (!$select_randsalt_query) {
		die("QUERY FAILED" . mysqli_error($connection));

	}


	// $row = mysqli_fetch_array($select_randsalt_query) ;
 //    $salt = $row['randsalt'];
 //    $password = crypt($password, $salt);
	
	$query = " INSERT INTO users (username, user_email, user_password, user_role) ";
	$query .= "VALUES ('{$username}', '{$email}', '{$password}', 'subscriber')";
	$register_user_query = mysqli_query($connection, $query);
	if (!$register_user_query) {
		die("QUERY FAILED" . mysqli_error($connection));
	}


}






 ?>










<?php include "includes/navigation.php"; ?>

<div class="container">
<section id="login">
<div class="container">
<div class="row">

<div class="col-xs-6 col-xs-offset-3">
<div class="form-wrap">
<h1>Register</h1>
<form role="form" action="registration.php" method="POST" id="login-form" autocomplete="off">
<div class="form-group">
<label>Username</label>
<input type="text" name="username" id="username" class="form-control" placeholder="Username" >
</div>
<div class="form-group">
<label>Email</label>
<input type="email" name="email" id="email" class="form-control" placeholder="test@test.org" >
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" id="password" class="form-control"  >
</div>
<input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register" >


</form>




</div>


</div>




</div>

</div>

</section>
</div>

<?php include "includes/footer.php"; ?>