<?php include 'includes/header.php'; ?>

<?php 

if(isset($_SESSION['username'])){

	$username = $_SESSION['username'];

	$query = "SELECT * FROM users WHERE username = '{$username}'";
	$select_user_profile_query = mysqli_query($connection, $query);

	while ($row = mysqli_fetch_array($select_user_profile_query)) {
		
		    $user_id          = $row['user_id'];
            $username     = $row['username'];
            $user_password      = $row['user_password'];
            $user_firstname       = $row['user_firstname'];
            $user_lastname     = $row['user_lastname'];
            $user_email      = $row['user_email'];
           // $user_image        = $row['user_image'];
            $user_role        = $row['user_role'];
	}

}

 ?>
<?php 


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
	 
	 $query .= "WHERE username = '{$username}'";


     $update_user = mysqli_query($connection, $query);
	confirm($update_user);
 }








 ?>




<div id="wrapper">

<!-- Navigation -->
<?php include 'includes/navigation.php'; ?>


<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
Dashboard <small>Author</small>
</h1>
<ol class="breadcrumb">
<li class="active">
<i class="fa fa-dashboard"></i> Dashboard
</li>
</ol>

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
	echo "<option value='subscriber'>subscriber</option>";

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

<input type="submit" class="btn btn-success" name="edit_user" value="Update Profile">
</div>
</form>







</div>
</div>
<!-- /.row -->

</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>


<!-- /#page-wrapper -->

<?php include "includes/footer.php"; ?>
