<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $p=$_POST["p"];
    }

    function Palindrome($str){ 
        $p=strtolower($str);
        $reverse=  strrev($p);
        if ( $reverse === $p){ 
            return "$str is Palindrome";
        }
        else{
            return "$str is not a palindrome";
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
</head>
<body>
    <div class="container">
        <form  method="POST" autocomplete="off">
    <input type="text" name="p" placeholder="Enter a String" required value="<?php echo $p?>">
    </form>
    </div>
    <div><?php echo Palindrome($p) ?></div>
   
</body>
</html>