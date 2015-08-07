<?php 

if (isset($_POST['add_user'])) {
	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
	 $user_role = $_POST['user_role'];
	 $username = $_POST['username'];

	 //$post_image = $_FILES['image']['name'];
	//$post_image_temp = $_FILES['image']['tmp_name'];

	 $email = $_POST['email'];
	 $password = $_POST['password'];
	// $post_date = date('d-m-y');



	 //move_uploaded_file($post_image_temp, "../images/$post_image");


$query = "INSERT INTO users(username, user_password, user_firstname, user_lastname, user_email, user_role) ";

$query .= " VALUES('{$username}', '{$password}', '{$firstname}', '{$lastname}', '{$email}', '{$user_role}' )";

	$add_user_query = mysqli_query($connection, $query);

	confirm($add_user_query);

	echo "User Created: " . " " . "<a href='users.php'>View Users</a>";
 }


 ?>


<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="firstname">Firstname</label>
<input type="text" class="form-control" name="firstname">
</div>
<div class="form-group">
<label for="Lastname">Lastname</label>
<input type="text" class="form-control" name="lastname">
</div>


<select name="user_role" id="">
<option value='subcriber'>Select Options</option>
<option value='admin'>Admin</option>
<option value='sunscriber'>Subscriber</option>



</select>
</div>



<div class="form-group">
<label for="username">Username</label>
<input type="text" class="form-control" name="username">
</div>

<!-- <div class="form-group">
<label for="post_image">Post Image</label>
<input type="file" class="form-control" name="image">
</div>
 -->
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" name="email">
</div>

<div class="form-group">
<label for="password">Password</label>
<input type="password" class="form-control" name="password">
</div>
<!-- <div class="form-group">
<label for="post_content">Password</label>
<textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>

</div> -->

<div class="form-group">

<input type="submit" class="btn btn-success" name="add_user" value="Add user">
</div>
</form>