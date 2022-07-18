<?php require('header.php') ?>
    <!-- main content -->
    <?php 
                require('dbconnect.php');
                $cmd = "SELECT * FROM courses";
                $data = mysqli_query($conn, $cmd);
                $num = mysqli_num_rows($data);
                echo mysqli_error($conn);
              
    ?>    
<div class="container mesdiv text-center">

    <div class="col-md-7"><h1>Admission Form</h1>
    <form action= "roll.php" method= "post" enctype = "multipart/form-data">
       <div class="col-md-12 mesdiv"><input type="text" placeholder="Name" name="name" required></div>
       <div class="col-md-12 mesdiv"><input type="text" placeholder="Fathers Name / Legal Gaurdians Name" name="gardiansname" required></div>
       <div class="col-md-12 mesdiv"><input type="text" placeholder= "Mobile No" name="mobile" required></div>
       <div class="col-md-12 mesdiv"><input type="text" placeholder="Email id" name="email" required></div>
       <div class="col-md-12 mesdiv">Male<Input type= "radio"  name= "gender" value="male">Female<Input type= "radio"  name= "gender" value="female"></div>
       <div class="col-md-12 mesdiv">
                <label>Choose a course/ subject:</label>
                <select id="courses" name="courselist" requied>
                <option value="">Please Select</option>  
                    <?php while($row = mysqli_fetch_array($data))
                        { 
                    ?>  
                <option value= "<?php echo $row[1];?>"><?php echo $row[1];?></option>
                     <?php 
                     }
                     ?>
                </select>
                      
        </div> 
        <input type="submit" class=" btn btn-info" style =" width: 80px" value="Submit">
        </div>
        <div class="col-md-5 text-center">
        <p>Please Upload Your Photograph:</p><Input id='pic' name='pic' type='file' > 
        </div>
        </form>
        <p class="text-danger">
		</div>
        
    </div>
    <?php require('footer.php')  ?>