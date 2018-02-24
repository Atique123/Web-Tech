<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Index</title>
</head>
<body>
    <form name="LOGIN" action="" method="POST">
        <div align="center">
        <fieldset align="center" style="width: 30%;">
        <h1 align="center">LOGIN</h1><hr>
        <button type="button" value="" style="float: right;"><a href="register.php">Register</a></button><br><br>
        <table align="center">
            <tr>
                <td>User:</td>
                <td><input type="text" placeholder="Enter your user name" name="un" value="<?php if(isset($_COOKIE["user"])) {echo $_COOKIE["user"];} ?>" required=""></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="Password" placeholder="Enter your Password" name="pw" value="<?php if(isset($_COOKIE["pass"])) {echo $_COOKIE["pass"];}?>" required=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="remember" <?php if(isset($_COOKIE["user"])) { ?> checked <?php }?>>Remember me</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2" align="right"><input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
        </fieldset>
        </div>
    </form>

    <?php
       if (isset($_POST['submit']))
        {
                $user = $_POST['un'];
                $pass = $_POST['pw'];
                $file = file_get_contents("log.txt");

        if(!strstr($file, "$user||$pass"))
        {
                  echo "Sorry! You Insert an Invalid Name & Email. Please Use a Valid name & email and Try Again.";
        }
        else
        {
                   if(!empty($_POST["remember"]))
                     {
                     setcookie ("user", $_POST["un"], time() + (10 * 365 * 24 * 60 * 60));
                     setcookie ("pass", $_POST["pw"], time() + (10 * 365 * 24 * 60 * 60));
                     }
                     else
                     {
                     if(isset($_COOKIE["user"]))
                     {
                     setcookie ("user", "");
                     }
                     if(isset($_COOKIE["pass"]))
                     {
                     setcookie ("pass", "");
                    }
                }
                    session_start();
                    $_SESSION['simple_login'] = $user;
                    $_SESSION['pass_login']   = $pass;
                    header("Location: home.php");
                    exit();
        }
        }
?> 
 
</body>
</html>