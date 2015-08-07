<?php include 'includes/header.php'; ?>

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

<div class="col-xs-6">


<?php insert_categories(); ?>


<form action="" method="POST">

<div class="form-group">
    <label for="cat_title"> Add Category</label>
<input class="form-control" type="text" name="cat_title">
</div>
<div class="form-group">
<input class="btn btn-primary" type="submit" value="Add Category" name="submit">
</div>


</form>
<?php 
// Update and include auery

if (isset($_GET['edit'])) {
    $cat_id = $_GET['edit'];
    include "includes/update_categories.php";
}

 ?>


</div>
<div class="col-xs-6 ">

<table class="table table-bordered table-hover ">
    <tr>
        <th>ID</th>
        <th>Category Title</th>
    </tr>
   
        
<?php findAllCategories(); ?>
<?php deleteCategories(); ?>

</table>

</div>

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
