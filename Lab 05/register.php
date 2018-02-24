<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Register Page</title>
</head>
<body>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
         <div align="center">
        <fieldset align="center" style="width: 40%;">
            <h1 align="center">Register</h1><hr>
            <table align="center">
               <tr>
                  <td>UN:</td>
                  <td><input type="text" name="un" required=""></td>
               </tr>
               <tr>
                  <td>PW:</td>
                  <td><input type="password" name="pw" required=""></td>
               </tr>
               <tr>
                  <td>R-PW:</td>
                  <td><input type="password" name="rpw" required=""></td>
               </tr>
               <tr>
                  <td>Email:</td>
                  <td><input type="email" name="email"></td>
                  <?php
                  if(isset($_POST['em']))
                  {
                     $em1 = $_POST["em"];
                     $_SESSION["em11"] = em1;
                  }
                  ?>
               </tr>
               <tr>
                  <td>Phone:</td>
                  <td><input type="text" name="phone"></td>
               </tr>
               <tr>
                  <td>Full name:</td>
                  <td><input type="text" name="fn"></td><br>
               </tr>
               <tr>
                  <td colspan="2" align="right"><input type="submit" name="submit" value="Register"></td>
                  <td><input type="reset" name="reset" value="Reset"></td>
               </tr>
            </table>
         </fieldset>
      </div>
      </form>
      <?php

       if (isset($_POST['submit']))
         {
               $un = $_POST['un'];
               $pw = $_POST['pw'];
               $rpw = $_POST['rpw'];
               $email = $_POST['email'];
               $phone = $_POST['phone'];
               $fn = $_POST['fn'];
               $file = file_get_contents("log.txt");
               $string = "$un||$pw||$rpw||$email||$phone||$fn";

         if(!strstr($file, "$string"))
         {
               $myFile = "log.txt";
               $fh = fopen($myFile, 'a') or die("can't open file");
               $stringData = "$un||$pw||$rpw||$email||$phone||$fn\n";
               fwrite($fh, $stringData);
               echo "your Registration Information Successfully Inserted.";
               fclose($fh);
         }
         else
         {
             echo "Sorry the name: $un and email: $email is already in database. please use defrent name & email.";
         }
      }
    ?> 
    
</body>
</html>