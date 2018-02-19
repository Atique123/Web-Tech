<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Index</title>
</head>
<body>
    <form name="LOGIN" action="" method="POST">
        <fieldset align="center" style="float: center;">
        <h1 align="center">LOGIN</h1><hr>
        <button type="button" value="" style="float: right;"><a href="register.php">Register</a></button><br><br>
        <table align="center">
            <tr>
                <td>User:</td>
                <td><input type="text" placeholder="Enter your user name" name="username" required=""></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="Password" placeholder="Enter your Password" name="password" required=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
        </fieldset>
    </form>

    <?php
    if(isset($_POST['username'],$_POST['password'])){
 
        $user = array(
                        "user" => "shahriar",
                        "pass"=>"12345"  ,         
                );
        $username = $_POST['username'];
        $pass = $_POST['password'];
        if($username == $user['user'] && $pass == $user['pass']){
            session_start();
            $_SESSION['simple_login'] = $username;
            header("Location: home.php");
            exit();
        }else{
            echo '<p>Username or password is invalid</p>';
        }
    }
    ?>
</body>
</html>