
<!-- Admin Header -->
<?php  require('admin-header.php')?>
<!-- Buttons for changing content -->
<?php require('admin_menu.php');?>
<!-- Customer messages content -->
<div class="col-md-9" id = "messageDiv">
<div class="col-md-9" id="uploadsDiv">
<div class="uploadsDiv">
<form action="uploadCourse.php" method = 'post' >
        <div class="col-md-5 addcatdiv">
            <h3>Add new Category</h3>
            
            <input type="text" name = "newCourse" placeholder= "New Course here..!" >
            <input type="submit" class= "btn btn-success" >
            </form>
            <p><?php
            require('dbconnect.php');
            $cmd = "select * from courses";
            $data = mysqli_query($conn ,$cmd);
            // $row = mysqli_fetch_array($data);
            // $numrow = mysqli_num_rows($data);
            ?> </div>
            <div class="col-md-6">
            <h3>Courses</h3>
            
                
            </p>
            <table class=" table table-dark">
                <tr>
                    <th>Sr No</th>
                    <th>Course</th>
                    </tr>
                <?php
                $sn =0;
                    while($row =  mysqli_fetch_array($data))
                    {
                    $sn++;
                ?>
                <tr>
                    <td><?php echo $sn;?></td>
                    <td><?php echo $row[1];?></td>
                    </tr>
                <?php } ?>      
        </div>
</div>
<?php require('admin-footer.php') ?>