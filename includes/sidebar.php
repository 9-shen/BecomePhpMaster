 <div class="col-md-4">


<!-- Blog Search Well -->
<div class="well">
<h4>Blog Search</h4>
<form action="search.php" method="POST">
<div class="input-group">
<input type="text" name="search" class="form-control">
<span class="input-group-btn">
<button name="submit" type="submit" class="btn btn-default" type="button">
    <span class="glyphicon glyphicon-search"></span>
</button>
</span>
</div>
</form>
<!-- /.input-group -->
</div>

<!-- Blog login-->
<div class="well">
<h4>Blog login</h4>
<form action="includes/login.php" method="POST">
<div class="form-group">
<input type="text" name="username" class="form-control" placeholder="Username">
</div>
<div class="input-group">
<input type="password" name="password" class="form-control" placeholder="Password">
<span class="input-group-btn">
<button class="btn btn-primary" name="login" type="submit">
Submit
</button>
</span>
</div>
</form>
<!-- /.input-group -->
</div>





    <!-- Blog Categories Well -->
                <div class="well">

<?php 

    $query = "SELECT * FROM categories";
    $select_categories_sibebar = mysqli_query($connection, $query);

 ?>

 <h4>Blog Categories</h4>
            <div class="row">
            <div class="col-lg-12">
            <ul class="list-unstyled">
            <?php 
            while ($row = mysqli_fetch_assoc($select_categories_sibebar)) {
             $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];
            echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
            }
            ?>

            </ul>

            </div>
                    </div>
                    <!-- /.row -->
                </div>







                <!-- Side Widget Well -->
                <?php include "widget.php"; ?>

            </div>