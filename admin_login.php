<?php
// Initialize the session
session_start();
 
//Check if the user is already logged in, if yes then redirect him to welcome page
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("location: index.php");
//     exit;
// }
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$admin_email = $password = "";
$admin_email_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if admin_email is empty
    if(empty(trim($_POST["admin_email"]))){
        $admin_email_err = "Please enter admin_email.";
    } else{
        $admin_email = trim($_POST["admin_email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["admin_password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["admin_password"]);
    }
    
    // Validate credentials
    if(empty($admin_email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, admin_email,admin_name ,admin_password FROM admin WHERE admin_email = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_admin_email);
            
            // Set parameters
            $param_admin_email = $admin_email;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if admin_email exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $admin_email, $admin_name, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            // Store data in session variables
                            $_SESSION["admin_name"] = $admin_name;
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["admin_email"] = trim($admin_email);                            
                            
                            // Redirect user to welcome page
                            header("location: admindashboard.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid admin_email or password.";
                        }
                    }
                } else{
                    // admin_email doesn't exist, display a generic error message
                    $login_err = "Invalid admin_email or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $mysqli->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<script type="text/javascript">
    function redirect()
    {
    	var str = document.admin_signin_info.admin_password.value;
    	if(str.length < 8)
    	{
    		alert("Length of the Password should be greater than 8");
    		return false;
    	}
    	if(str.match(/[a-z]/g) && str.match(/[A-Z]/g) && str.match(/[0-9]/g) && str.match(/[^a-zA-Z\d]/g))
    	{
    		//true
    	}
    	else
    	{
    		alert("Please Enter a Valid admin_Password");
    		return false;
    	}
    }
	function ValidateEmail(x)  
	{  
		var atposition = x.indexOf("@");  
		var dotposition = x.lastIndexOf(".");  
		if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
		{  
  			alert('Please Enter a Valid Email ID');  
  			return false;
  		}  
	}
</script>
<style type="text/css">
	*
	{
		border-radius: 5px;
	}
	body
	{
		background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url('');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		background-position: center;
	}
  .form__group {
  position: relative;
  padding: 15px 0 0;
  margin-top: 10px;
  width: 50%;
}

.form__field {
  border: 0;
  border-bottom: 2px solid black;
  outline: 0;
  font-size: 1.3rem;
  color: #fff;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
  border-radius: 0;
  width: 150%;
  position: relative;
  left: 2px;
}
.form__field::placeholder {
  color: transparent;
}
.form__field:placeholder-shown ~ .form__label {
  font-size: 1.3rem;
  cursor: text;
  top: 20px;
}

.form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: black;
}

.form__field:focus {
  padding-bottom: 6px;
  font-weight: 700;
  border-width: 3px;
  border-image: linear-gradient(to right, #11998e, #38ef7d);
  border-image-slice: 1;
}
.form__field:focus ~ .form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #11998e;
  font-weight: 700;
}

/* reset input */
    .form__field:required, .form__field:invalid
    {
        box-shadow: none;
    }
    .btn 
    {
        box-sizing: border-box;
        appearance: none;
        background-color: transparent;
        border: 2px solid rgba(225, 225, 225, 0.99);
        border-radius: 0.6em;
        cursor: pointer;
        display: flex;
        align-self: center;
        font-size: 16px;
        line-height: 1;
        margin: 20px;
        position: relative;
        top: 60px;
        left: 15%;
        text-decoration: none;
        text-align: center;
        text-transform: uppercase;
        font-family: sans-serif;
        font-weight: bold;
        box-shadow: 0 0 40px 40px rgba(89,125,244,0.6) inset;
    }
    .btn:active
    {
      transform: scale(1.1);
      box-shadow: 0 0 40px 40px rgba(255,255,255) inset;
    }
    .one
    {
      position: relative;
      transition: 0.1s;
      padding: 1.2em 2.8em;
    }
    .out_form
    {
    	text-align: center;
    	position: absolute;
    	background-color: rgba(255, 255, 255, 0.74);
    	padding: 10px;
    	top: 24%;
    	left: 37%;
        height: 51%;
        width: 25%;
        animation-duration: 0.6s;
        animation-timing-function: ease;
        animation-name: expand;
        animation-direction: forwards;
    }
    @keyframes expand
    {
        0%
        {
            transform: translateX(1400px);
        }
        100%
        {
            transform: translateX(5px);
        }
    }
    body
    {
        overflow-x: hidden;
    }
    form
    {
        height: 100px;
    }
    a {text-decoration: none;}
</style>
<body>
	<div class="out_form">
	<div style="background-color: rgba(255, 255, 255, 0); border-radius: 0;border-top-right-radius: 5px;border-top-left-radius: 5px; ">
        <h1>Admin Login</h1><br>
  </div>
        <form action = "admin_Login.php" name="admin_signin_info" method="post" class="form_des">
          <div style="position: relative; left: 10%; top: -25%;">
        	<div class="form__group field">
            <input type="text" class="form__field" name="admin_email" placeholder="Email ID" list="city" style="color: black;" id="admin" required/>
            <label for="name" class="form__label">Email ID</label>
          </div>
          <br>
          <div style="position: relative; left: 0.3%; top: -25%;">
        	<div class="form__group field">
            <input type="password" class="form__field" name="admin_password" placeholder="Pick Up Location" list="city" style="color: black;" id="admin" required/>
            <label for="name" class="form__label">Password</label>
          </div>
          </div>
         <button class="btn one" type="submit" onclick="redirect(); ValidateEmail(document.admin_signin_info.admin_email.value);">Next</button>
        </form>
	</div>
	      <div style="position: relative; top: 12.5%;">
	      	Don't have an account ?
          	<a href="admin_signup.php" style="font-size: 18px; color: blue;">
          		Sign up
          	</a>
          </div>
</body>
</html>