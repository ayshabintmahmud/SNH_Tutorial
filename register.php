<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <strong> <p> Welcome ! Please Register </p></strong>
    <p>All fields are Required</p>

    <form class="" action="processregister.php" method="POST">

      <?php
      if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
                echo "<span style='color:red'>" . $_SESSION['error'] . "</span>";
                session_unset();
                session_destroy();
                 }


       ?>
      <p>
         <label for="">First Name</label><br />
         <input
         <?php
         if(isset($_SESSION['first_name'])){
                   echo "Value =" . $_SESSION['first_name'];

                    }
          ?>
         type="text" name="first_name" value="" placeholder="First Name" >

      </p>

      <p>
         <label for="">Last Name</label> <br />
         <input
         <?php
         if(isset($_SESSION['last_name'])){
                   echo "Value =" . $_SESSION['last_name'];

                    }
          ?>

         type="text" name="last_name" value="" placeholder="Last Name" >

      </p>

      <p>
         <label for="">Email</label> <br />
         <input
         <?php
         if(isset($_SESSION['email'])){
                   echo "Value =" . $_SESSION['email'];

                    }
          ?>

         type="text" name="email" value="" placeholder="Your Email" >

      </p>

      <p>
         <label for="">Password</label> <br />
         <input type="password" name="password" value="" placeholder="Password" >

      </p>

      <p>
         <label for="">Gender</label> <br />
         <select class="" name="gender" >
           <option value="">Select One</option>
           <option          <?php
                    if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'female'){

                               }
                     ?>


                     >Female</option>
           <option             <?php
                    if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'male'){

                               }
                     ?>


                     >Male</option>

         </select>
      </p>


      <p>
         <label for="">Designation</label> <br />
         <select class="" name="designation" >
           <option value="">Select One</option>
           <option    <?php
                    if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Medical team'){

                               }
                     ?>
                     >Medical Team (MT)</option>
           <option value="">Patient</option>

         </select>

      </p>

      <p>
         <label for="">Department</label> <br />
         <input
         <?php
         if(isset($_SESSION['department'])){
                   echo "Value =" . $_SESSION['department'];

                    }
          ?>

         type="text" name="department" value="" placeholder="Department">
      </p>

      <p>
        <button type="submit" name="Register"> Register</button>

      </p>

    </form>
    <?php
    include_once('lib/footer.php');
     ?>
        </p>
  </body>
</html>
