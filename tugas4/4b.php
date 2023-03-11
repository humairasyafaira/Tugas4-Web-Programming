<?php 
$hardware = ['Mother Board','Processor','Hard Disk','PC Coller', 'VGA Card','SSD'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4b.php</title>
</head>
<body>
<b>Macam-macam perangkat keras komputer</b>
    <ul>
        <?php for($i = 0;$i < count($hardware); $i++){ ?>
        <li><?= $hardware[$i]; ?></li>
        <?php } ?>
    </ul>

    <b>Macam-macam perangkat keras komputer baru</b>
        <?php 
        array_push($hardware,'Card Reader','Modem');    
        ?>
    <ul>
        <?php for($i = 0;$i < count($hardware); $i++){
             sort($hardware); ?>
        <li><?= $hardware[$i]; ?></li>
        <?php } ?>
    </ul>
</body>
</html>