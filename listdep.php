<?php

include("fonction.php");
$result = deplist();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <h1>List de departement</h1>
    <ul>
        <?php foreach($result as $dep){ ?> 
        <li><?php echo $dep['dept_name'] ?></li>
        <? } ?>
    </ul>





</body>
</html>











































