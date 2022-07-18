<?php require('header.php') ?>
    <!-- main content -->
    <form action="message.php" method ="post">
<div class="container mesdiv text-center">
    
       <div class="col-md-12 mesdiv"><input type="text" placeholder="Name" name="name" required></div>
       <div class="col-md-12 mesdiv"><input type="text" placeholder="mobile No" name="mobile" required></div>
       <div class="col-md-12 mesdiv"><input type="text" placeholder="Email id" name="email" required></div>
       <div class="col-md-12 mesdiv"><textarea  name="custmessage" cols="59" style ="max-width:45%" placeholder="Your message here......" required></textarea></div>
        <input type="submit" class=" btn btn-info" style =" width: 80px" value="Submit">

        <h3>  <?php
            if (isset($_GET['submit'])){
            if ($_GET['submit'] == 1) {
               echo " Your Message Sent!";
              }
              if ($_GET['submit'] == 0) {
                echo " Message Not sent ... Please try again after some time...";
               }
            }
        ?></h3>
        </div>
        </form>
       
    </div>
    <!-- footer content -->
    <?php require('footer.php') ?>