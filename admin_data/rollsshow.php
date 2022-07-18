
<?php  require('admin-header.php')?>
<!-- Buttons for changing content -->
<?php require('admin_menu.php');?>
<!-- Customer messages content -->
<div class="col-md-9" id="rollsDiv">
<h3>Students List</h3>
    <?php require('dbconnect.php')?>
    <?php
    $cmd = "select * from Customers";
    $data  = mysqli_query( $conn, $cmd);
    $numrow = mysqli_num_rows($data);
    ?> <h2> Total Students: <?php echo $numrow;?></h2>
    
    <table class=" table table-dark">
        <tr>
            <th>Sr No</th>
            <th>Name</th>
            <th>Father/ Gaurdian Name</th>
            <th>Mobile No</th>
            <th>Course</th>
            <th>Sex</th>
            <th>Email Id</th>
            <th>Date of admission</th>
            <th>Fee Status</th>
            <th></th>
        </tr>
        <?php
        $sn = 0;
        while( $row = mysqli_fetch_array($data)){
                $sn++;
        ?>
        <tr>
            <td><?php echo $sn; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2];?></td>
            <td><?php echo $row[3];?></td>
            <td><?php echo $row[4]?></td>
            <td><?php echo $row[5]?></td>
            <td><?php echo $row[6]?></td>
            <td><?php echo $row[7]?></td>
            <td><?php echo $row[8]?></td>
            <td><a href="deleteroll.php?id=<?php echo $row[0]?>">DELETE</a></td>
        </tr>
        <?php } ?>      
</table>
</div>
<?php require('admin-footer.php')?>