<?php 

if (isset($_GET['edit_user'])) {
	
	$the_user_id = $_GET['edit_user'];
	 $query = "SELECT * FROM users WHERE user_id = $the_user_id ";
    $select_users_query = mysqli_query($connection, $query);

 while ($row = mysqli_fetch_assoc($select_users_query)) {
            $user_id         = $row['user_id'];
            $username        = $row['username'];
            $user_password   = $row['user_password'];
            $user_firstname  = $row['user_firstname'];
            $user_lastname   = $row['user_lastname'];
            $user_email      = $row['user_email'];
            $user_image      = $row['user_image'];
            $user_role       = $row['user_role'];
   }




}



if (isset($_POST['edit_user'])) {

	 $user_firstname = $_POST['user_firstname'];
	 $user_lastname = $_POST['user_lastname'];
	 $user_role = $_POST['user_role'];
	 $username = $_POST['username'];

	 //$post_image = $_FILES['image']['name'];
	//$post_image_temp = $_FILES['image']['tmp_name'];

	 $user_email = $_POST['user_email'];
	 $user_password = $_POST['user_password'];
	// $post_date = date('d-m-y');



	 //move_uploaded_file($post_image_temp, "../images/$post_image");

     $query = "UPDATE users SET ";
	 $query .= "username ='{$username}', ";
	 $query .= "user_password = '{$user_password}', ";
	 $query .= "user_firstname = '{$user_firstname}', ";
	 $query .= "user_lastname = '{$user_lastname}', ";
	 $query .= "user_email = '{$user_email}' ";
	 
	 $query .= "WHERE user_id = {$the_user_id}";


     $update_user = mysqli_query($connection, $query);
	confirm($update_user);
 }


 ?>


<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="firstname">Firstname</label>
<input type="text" class="form-control" name="user_firstname" value="<?php echo $user_firstname; ?>">
</div>
<div class="form-group">
<label for="lastname">Lastname</label>
<input type="text" class="form-control" name="user_lastname" value="<?php echo $user_lastname; ?>">
</div>


<select name="user_role" id="">
<option value='subscriber'><?php echo $user_role; ?></option>
<?php 

if ($user_role == 'admin') {
	echo "<option value='subscriber'>ubscriber</option>";

}else{
 echo "<option value='admin'>admin</option>";
}




 ?>






</select>
</div>



<div class="form-group">
<label for="username">Username</label>
<input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
</div>

<!-- <div class="form-group">
<label for="post_image">Post Image</label>
<input type="file" class="form-control" name="image">
</div>
 -->
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" name="user_email" value="<?php echo $user_email; ?>">
</div>

<div class="form-group">
<label for="password">Password</label>
<input type="password" class="form-control" name="user_password" value="<?php echo $user_password; ?>">
</div>


<div class="form-group">

<input type="submit" class="btn btn-success" name="edit_user" value="Update user">
</div>
</form>