<?php
    if (isset($_POST['calculate'])){
        $flag=3;
        if(empty($_POST["sal"])){
            $sal ="Enter your salary in USD please";
            $flag--;
        }
        if(empty($_POST["salary"])){
            $salary ="Choose one please";
            $flag--;
        }
        if(empty($_POST["tax"])){
            $tax ="Enter the Tax free allowance please";
            $flag--;
        }
        if($flag==3 && $_POST["salary"]=="monthly"){
            $sm= $_POST["sal"];
            $sy= $_POST["sal"]*12;
            if($sy<10000){
                $taxm= 0;
                $taxy= 0;
            }
            else if(10000<$sy && $sy<25000){
                $taxy= $sy*(11/100);
                $taxm= $taxy/12;
            }
            else if(25000<$sy && $sy<50000){
                $taxy= $sy*(30/100);
                $taxm= $taxy/12;
            }
            else if(50000<$sy){
                $taxy= $sy*(45/100);
                $taxm= $taxy/12;
            }
            if($sy>10000){
                $ssfy=(4/100)*$sy;
                $ssfm=$ssfy/12;
            }
            else{
                $ssfy=0;
                $ssfm=0;
            }
            $satm=$sm-$taxm-$ssfm+$_POST["tax"];
            $saty=$satm*12;
        }
        else if($flag==3 && $_POST["salary"]=="yearly"){
            $sy= $_POST["sal"];
            $sm= $_POST["sal"]/12;
            if($sy<10000){
                $taxm= 0;
                $taxy= 0;
            }
            else if(10000<$sy && $sy<25000){
                $taxy= $sy*(11/100);
                $taxm= $taxy/12;
            }
            else if(25000<$sy && $sy<50000){
                $taxy= $sy*(30/100);
                $taxm= $taxy/12;
            }
            else if(50000<$sy){
                $taxy= $sy*(45/100);
                $taxm= $taxy/12;
            }
            if($sy>10000){
                $ssfy=(4/100)*$sy;
                $ssfm=$ssfy/12;
            }
            else{
                $ssfy=0;
                $ssfm=0;
            }
            $saty=$sy-$taxy-$ssfy+$_POST["tax"];
            $satm=$saty/12;
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
    <title>Salary Tax Calculator</title>
</head>
<body>
    <h1>Salary Tax Calculator</h1>
    <form method="POST" autocomplete="off">
        <p>
  	        <input type="number" name="sal" placeholder="Enter your salary in USD" value="<?php echo $_POST['sal']?>"><br>
            <span> <?php echo $sal; ?> </span>
        </p>
        <p>
        <label>
            <input type="radio" name="salary" value="monthly">Monthly
        </label>
        </p>
        <p>
            <label>
                <input type="radio" name="salary" value="yearly">Yearly
            </label>
        </p>
        <span> <?php echo $salary; ?> </span>
        <p>
  	        <input type="number" name="tax" placeholder="Tax Free Allowance in USD" value="<?php echo $_POST['tax']?>"><br>
            <span> <?php echo $tax; ?> </span>
        </p>
        <button type="submit" name="calculate">calculate</button>
    </form><br>
    <table id="customers" class="center">
        <tr>
            <th></th>
            <th>Monthly</th>
            <th>Yearly</th>
        </tr>
        <tr>
            <td>Total salary</td>
            <td><?php echo number_format("$sm", 2)."$" ?></td>
            <td><?php echo number_format("$sy", 2)."$" ?></td>
        </tr>
        <tr>
            <td>Tax Amount</td>
            <td><?php echo number_format("$taxm", 2)."$" ?></td>
            <td><?php echo number_format("$taxy", 2)."$" ?></td>
        </tr>
        <tr>
            <td>Social security fee</td>
            <td><?php echo number_format("$ssfm", 2)."$" ?></td>
            <td><?php echo number_format("$ssfy", 2)."$" ?></td>
        </tr>
        <tr>
            <td>Salary after tax</td>
            <td><?php echo number_format("$satm", 2)."$" ?></td>
            <td><?php echo number_format("$saty", 2)."$" ?></td>
        </tr>
    </table>
</body>
</html>