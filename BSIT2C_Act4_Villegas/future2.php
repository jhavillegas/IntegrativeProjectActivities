<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Investment</title>
    
</head>
<body >
<div class="wrapper">
<div class=result>
<a href="future1.php"><h3>Back</h3></a>
    <div class="name">
	<?php
    $InvestedAmount = $_POST['amount'];
    $NumOfYears = $_POST['years'];
	?>
</div>
<div>
<h2 class="amount">INVESTED AMOUNT:</h2>
<?php
echo $InvestedAmount;
?>
<h2 class="years">INVESTMENT YEARS:</h2>
<?php
echo $NumOfYears;
?>
<div class="title">
    <?php
    echo "YEARS"." "."AMOUNT";
    ?>
</div>
<div class="invest">
<?php
if(isset($_POST['submit']))
{
    $InvestedAmount = $_POST['amount'];
    $NumOfYears = $_POST['years'];
    $s = 2020;

    for($i = 1; $i < $NumOfYears + 1; $i++)
    {
        $add = $s +$i;
        if($i % 2 == 0)
        {
            $InvestedAmount = round($InvestedAmount * 0.14 + ($InvestedAmount),2);
            echo "<table>
                <td>$add</td>
                <td>&#8369; $InvestedAmount</td>
                </table>";
        }
        else
        {
            $InvestedAmount = round($InvestedAmount * 0.12 + ($InvestedAmount),2);
            echo "<table>
                <td>$add</td>
                <td>&#8369; $InvestedAmount</td>
                </table>";
        }
    }
}

?>
</div>

    
</div>
</div>
</div>




</body>
</html>