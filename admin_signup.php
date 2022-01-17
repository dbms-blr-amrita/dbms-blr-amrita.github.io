<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$admin_name = "";
$admin_phonenumber = "";
$admin_email = $password = $confirm_password = "";
$admin_email_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $admin_name = trim($_POST["admin_name"]);
    $admin_phonenumber = trim($_POST["admin_phonenumber"]);
    // Validate admin_email
    if(empty(trim($_POST["admin_email"]))){
        $admin_email_err = "Please enter a admin_email.";
    // } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["admin_email"]))){
    //     $admin_email_err = "admin_email can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM admin WHERE admin_email = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_admin_email);
            
            // Set parameters
            $param_admin_email = trim($_POST["admin_email"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $admin_email_err = "This admin_email is already taken.";
                    echo '
                      <script>
                        alert("Email already taken");
                      </script>
                    ';
                } else{
                    $admin_email = trim($_POST["admin_email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Validate password
    if(empty(trim($_POST["admin_password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["admin_password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["admin_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["admin_password2"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["admin_password2"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($admin_email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO admin (admin_name, admin_email, admin_phonenumber, admin_password) VALUES (?, ?, ?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss",$admin_name ,$param_admin_email, $admin_phonenumber, $param_password);
            
            // Set parameters
            $param_admin_email = $admin_email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: admin_Login.php");
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
        var name = document.adminSUinfo.admin_name.value;
        if(name.length < 1) { alert('Please enter your name'); return false; }
    	var str = document.adminSUinfo.admin_password.value;
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
    		alert("Please Enter a Valid Password");
    		return false;
    	}
    	var str2 = document.adminSUinfo.admin_password2.value;
    	if(str != str2)
    	{
    		alert('Please Check your Confirm Password');
    		return false;
    	}
    }
    function numVal()
    {
    	var num = document.adminSUinfo.admin_number.value;
    	if(num.length() != 10)
    	{
    		alert('Please Check your Phone Number');
    		return false;
    	}
    }
	function validateemail(x)  
	{  
		var atposition = x.indexOf("@");  
		var dotposition = x.lastIndexOf(".");  
		if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
		{  
  			alert('Enter a Valid Email ID');  
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
        top: 55px;
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
    	top: 15%;
    	left: 37%;
        height: 73.5%;
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
    /* Chrome, Safari, Edge, Opera */
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button
	{
  		-webkit-appearance: none;
  		margin: 0;
	}

	/* Firefox */
	input[type=number]
	{
  		-moz-appearance: textfield;
	}
	a{ text-decoration: none; }
</style>
<body>
	<div class="out_form">
	<div style="background-color: rgba(255, 255, 255, 0); border-radius: 0;border-top-right-radius: 5px;border-top-left-radius: 5px; ">
        <h1>Admin Signup</h1><br>
  </div>
        <form action="admin_signup.php" name="adminSUinfo" method="post" class="form_des">
        	<div style="position: relative; left: 10%; bottom: 35%;">
          	<div class="form__group field">
          		<input type="text" name="admin_name" class="form__field" placeholder="Name" style="color: black;" id="admin_name" required/>
          		<label for="name" class="form__label">Name</label>
          	</div>
          	</div>
          <div style="position: relative; left: 10%; top: -36%;">
        	<div class="form__group field">
            <input type="email" class="form__field" name="admin_email" placeholder="Email ID" list="city" style="color: black;" id="admin_email" required/>
            <label for="name" class="form__label">Email ID</label>
          </div>
          
          <div style="position: relative; left: 0.3%;">
        	<div class="form__group field">
            <input type="Password" class="form__field" name="admin_password" placeholder="Password" list="city" style="color: black;" id="admin" required/>
            <label for="name" class="form__label">Password</label>
          	</div>
          </div>
            <div>
          	<div class="form__group field">
          		<input type="Password" name="admin_password2" class="form__field" placeholder="Re-Password" style="color: black;" id="admin_pword2" required/>
          		<label for="name" class="form__label">Confirm Password</label>
          	</div>
          	</div>
          	<div>
          	<div class="form__group field">
          		<input type="number" name="admin_phonenumber" class="form__field" placeholder="Name" style="color: black;" id="admin_number" required/>
          		<label for="name" class="form__label">Phone Number</label>
          	</div>
          	</div>
         <button class="btn one" type="submit" onclick="validateemail(document.adminSUinfo.admin_email.value); redirect(); numVal();" >Next</button>
        </form>
	</div>
		  <div style="position: relative; top: 38%;">
	      	Already a Member ?
          	<a href="admin_login.php" style="font-size: 18px; color: blue;">
          		Sign in
          	</a>
          </div>
</body>
</html>

