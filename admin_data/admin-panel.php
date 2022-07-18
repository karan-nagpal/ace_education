


<!-- Admin Header -->
<?php  require('admin-header.php')?>
<!-- Buttons for changing content -->
<?php require('admin_menu.php');?>
<!-- Customer messages content -->
<div class="col-md-9" id = "messageDiv">


<?php require('dbconnect.php')?>
    
    
    
    
    
    

    <?php
    $cmd = "select sr_id from Customer_message";
    $data = mysqli_query($conn ,$cmd);
    $numrow = mysqli_num_rows($data);
    $noofpages = ceil($numrow / 10);


    $cmd = "select * from Customer_message";
    $data = mysqli_query($conn ,$cmd);
    // $row = mysqli_fetch_array($data);
    // $numrow = mysqli_num_rows($data);
    ?>
    <h3>Message Board</h3>
    <p>Total Messages....... 
        
    </p>
    <table class=" table table-dark">
        <tr>
            <th>Sr No</th>
            <th>Name</th>
            <th>Mobile No</th>
            <th>Email Id</th>
            <th>Message</th>
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
            <td><?php echo $row[2];?></td>
            <td><?php echo $row[3]?></td>
            <td><?php echo $row[4]?></td>
        </tr>
        <?php } ?>      

    </table>
<p id= "tablebutton" class="text-center"></p>
</div>
<?php require('admin-footer.php') ?>
 
<script>
    var noOfPages = <?php echo $noofpages ?>;
    var sp = 1;
    var dp = noOfPages;
    // if(noOfPages <10)
    for(i=0; i<10; i++){
    var paradiv = document.getElementById("tablebutton");
    var navButton = document.createElement("span");
    navButton.innerHTML = i+1;
    navButton.classList.add("tableButton");
    paradiv.appendChild(navButton);
    navButton.addEventListener("click", navclick);
    function navclick(){
        window.location = "admin-panel.php?bid="+this.innerHTML;
    }
}

    </script>