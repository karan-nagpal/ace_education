<?php require('header.php') ?>
    <!-- main content -->
<div class="container">
       
    <div class="col-md-7 bodycon ">
        <div class="col-md-9  bodyconb">
            
            <img src="images/alexandre-van-thuan-mr9FouttLGY-unsplash.jpg" alt="img" class="img-responsive img-rounded">
        </div>
        <div class="content text-center">
            
        </div>
    </div>
    <form action='login.php' method= 'post'>
    <div class="col-md-3 bodycon bg-theme text-right fmar">
        
        <input type="text" id="loginEmail" name='email' class="login" placeholder="Enter Your Email ID"  required >
       <p> <i class="fa fa-eye" id="togglePassword"></i>
        <input type="password" id= "loginPass" name = 'password' placeholder="Enter Your Password"  class="login" required>
       </p>
        <input type="submit" class="btn login bg-primary btn-right" id ="loginButton" value= "Login"></button>
        </form>
        <a href="" class="text-left" >Forgot Password</a>
        <a class= "btn btn-info" href="addmission.php">Online Admissions</a>
      
    </div>

    <div class="col-md-3 text-center fmar bodycon">
    <?php 
		if(isset($_GET['id']))
		{
	     if($_GET['id'] == 1){
             ?><p style= "background-color: Green" class= 'text-center'><?php
             echo " Your records have been saved!"?><br>
             <?php echo " Our team will call you shortly! Thanks";

         };
         if($_GET['id'] == 0){
           ?><p style= "background-color: Red" class= 'text-center'><?php echo " Please Try again later?";?></p>
           <?php
        };
		}

		?>
        </p>
        <p><span style="color: gold; font-weight: bold;">Our Mission</span> is  to provide best services and help aspirants make their futureeven more succesful and bright, as our slogan says we 
        nurture the minds... </p>
    </div>
    </div>
    <!-- footer content -->
    <?php require('footer.php') ?>