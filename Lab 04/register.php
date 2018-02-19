<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Register Page</title>
</head>
<body>
      <form action="" method="POST">
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
                  <td><input type="submit" name="submit" value="Submit"></td>
                  <td><input type="reset" name="reset" value="Reset"></td>
               </tr>
            </table>
      </form>
     <?php
         $un = $pw = $rpw = $email = $phone = $phone = $fname = "";
         if ($_SERVER["REQUEST_METHOD"]=="POST") {
               $un    = validate($_POST["un"]);
               $pw    = validate($_POST["pw"]);
               $rpw   = validate($_POST["rpw"]);
               $email = validate($_POST["email"]);
               $phone = validate($_POST["phone"]);
               $fname = validate($_POST["fn"]);


         // echo "User:".$un."<br/>";
         // echo "Password:".$pw."<br/>";
         // echo "Retyoe Pass:".$rpw."<br/>";
         // echo "Email:".$email."<br/>";
         // echo "Phone:".$phone."<br/>";
         // echo "Full Name:".$fname."<br/>";
         }
         function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

         $darray = array('User'=>$un,'Password'=>$pw,'R-PW'=>$rpw,'Email'=>$email,'Phone'=>$phone,'FUllName'=>$fname);
         print_r($darray);
      ?>
</body>
</html>