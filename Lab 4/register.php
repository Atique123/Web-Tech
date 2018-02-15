<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Register Page</title>
</head>
<body>
	<form>
		<fieldset align="center">
			<legend align="center">Register</legend>
            <input type='hidden' name='submitted' id='submitted'/>
            
            <label for='username' >UserName*:</label>
            <input type='text' name='username'/><br>

            <label for='password' >Password*:</label>
            <input type='password' name='password'/><br>

            <label for='password' >Re-type Password*:</label>
            <input type='password' name='password'/><br>

            <label for='email' >Email Address*:</label>
            <input type='text' name='email'/><br>

            <label for='email' >Phone:</label>
            <input type='text' name='phone'/><br>

            <label for='name' >Your Full Name*: </label>
            <input type='text' name='name'/><br>

            <button type="Submit">Submit</button>
            <button type="Reset">Reset</button>
		</fieldset>
    </form>
</body>
</html>