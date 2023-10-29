<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
$presentTime = new DateTime() ;
$destinationTime = new DateTime('2015-10-21 04:29:00 PM');
?>
<div class="destinationTime">
    <table>
        <tr>
            <th>MONTH</th>
            <th>DAY</th>
            <th>YEAR</th>
            <th> AM / PM </th>
            <th>HOUR</th>
            <th> : </th>
            <th>MIN</th>
        </tr>
        <tr>
        <td><?php echo $destinationTime->format('M') ?></td>
        <td><?php echo $destinationTime->format('d') ?></td>
        <td><?php echo $destinationTime->format('Y') ?></td>
        <td><?php echo $destinationTime->format('a') ?></td>
        <td><?php echo $destinationTime->format('g') ?></td>
        <td>:</td>
        <td><?php echo $destinationTime->format('i') ?></td>
    </tr>
</table>
<p>DESTINATION TIME</p>
</div>
<div class="presentTime">
<table>
    <tr>
        <th>MONTH</th>
        <th>DAY</th>
        <th>YEAR</th>
        <th> AM / PM </th>
        <th>HOUR</th>
        <th> : </th>
        <th>MIN</th>
    </tr>
    <tr>
        <td><?php echo $presentTime->format('M') ?></td>
        <td><?php echo $presentTime->format('d') ?></td>
        <td><?php echo $presentTime->format('Y') ?></td>
        <td><?php echo $presentTime->format('a') ?></td>
        <td><?php echo $presentTime->format('g') ?></td>
        <td>:</td>
        <td><?php echo $presentTime->format('i') ?></td>
    </tr>
</table>
<p>PRESENT TIME</p>
</div> 
<div class="interval">
    <?php $interval = $presentTime->diff($destinationTime); ?>
<table>
    <tr>
        <th>YEAR</th>
        <th>MONTH</th>
        <th>DAY</th>
        <th> HOUR</th>
        <th> : </th>
        <th>MIN</th>
        <th>SEC</th>
    </tr>
    <tr>
        <td><?php echo $interval->format('%R%Y') ?></td>
        <td><?php echo $interval->format('%R%M') ?></td>
        <td><?php echo $interval->format('%R%a') ?></td>
        <td><?php echo $interval->format('%R%H') ?></td>
        <td>:</td>
        <td><?php echo $interval->format(' %R%i') ?></td>
        <td><?php echo $interval->format('%R%S') ?></td>
    </tr>
</table>
<p>INTERVAL</p>
</div>   

 <!-- echo $destinationTime->format('M d Y a g:i') . '<br>'; -->
 <!-- echo $presentTime->format('M d Y a g:i'). '<br>';

 $interval = $presentTime->diff($destinationTime);
 echo $interval->format('%R%Y years %R%M Month %R%a Days %R%H hours : %R%i Min %R%S');

 'Y année / M mois / j ou a jour / g ou H heure / i min / s sec / a PM/AM -->


</body>
</html>