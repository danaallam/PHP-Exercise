<?php 
if (isset($_POST['input'])){
    if (empty($_POST["fullname"]) || empty($_POST["username"]) || empty($_POST["password_1"]) || empty($_POST["password_2"]) || empty($_POST["email"]) || empty($_POST["phone"]) || empty($_POST["dob"]) || empty($_POST["social"])){
        $name ="Enter your Full Name please";
        $username ="Enter your User name please";
        $password_1 ="Enter your Password please";
        $password_2 ="Confirm your Password please";
        $email ="Enter your User Email please";
        $phone ="Enter your Phone number please";
        $dob ="Enter your User DOB please";
        $social ="Enter your User social security number please";
        }
    else{
        if(!empty($_POST["password_2"])){
            if (($_POST["password_1"]) != ($_POST["password_2"])){
                $password_2="Password does not match";
            }
            else{
                if (($_POST["username"] == "Dana"))
                    $input="User already exists";
                else
                    $input="Sign up successful";
            }
        }
    } 
}  

if (isset($_POST['input_2'])){
    if ( ($_POST["username_1"] == "Dana") && ($_POST["password_3"] == "123")){
        header("Location: safe.php");       
    }
    else{
        $username_1='';
        $password_3='';
        $error="Wrong username or password";
    } 
}  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
<div class="box">
    <div class="reg">
  	    <h2>Register</h2>
        <form autocomplete="off" method="post" class="left">
  	        <p>
  	            <input type="text" name="fullname" placeholder="Full Name"><br>
                <span> <?php echo $name; ?> </span>
            </p>
            <p>
  	            <input type="text" name="username" placeholder="Username"><br>
                <span> <?php echo $username; ?> </span>
            </p>
            <p>
  	            <input type="password" name="password_1" placeholder="Password"><br>
                <span> <?php echo $password_1; ?> </span>
            </p>
  	        <p>
  	            <input type="password" name="password_2" placeholder="Retype Password"><br>
                <span> <?php echo $password_2; ?> </span>
            </p>
            <p>
  	            <input type="email" name="email" placeholder="E-mail"><br>
                <span> <?php echo $email; ?> </span>
            </p>
            <p>
                <input type="tel" name="phone" placeholder="Phone Number"><br>
                <span> <?php echo $phone; ?> </span>
            </p>
            <p>
                <input type="Date" name="dob"><br>
                <span> <?php echo $dob; ?> </span>
            </p>
            <p>
                <input type="number" name="social" placeholder="SSN"><br>
                <span> <?php echo $social; ?> </span>
            </p>
  	        <p>
  	            <button type="submit" name="input"><span class="regbtn">Register</span></button>
            </p>
            <span class="msg"> <?php echo $input; ?> </span>
            <p>Already a member? <a href="home.php">Sign in</a></p>
        </form>
    </div>
    <div class="login">
        <h2>Login</h2>
        <div class="mid1">
            <div class="prof"></div>
            <form autocomplete="off" method="POST">
                <p>
                    <input type="text" name="username_1" placeholder="Username" value="<?php echo $username_1; ?>">
                </p>
                <p>
  	                <input type="password" name="password_3" placeholder="Password" value="<?php echo $password_3; ?>">
                </p>
                <p>
                    <span class="error"> <?php echo $error; ?> </span>
                </p>
  	            <div>
                <input type="submit" value="Login" class="btn" name='input_2'>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
