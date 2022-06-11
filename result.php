<?php

$my_name = htmlspecialchars($_POST['my_name'],ENT_QUTES);
$choices = htmlspecialchars($_POST['choces'],ENT_QUTES);
$number = htmlspecialchars($_POST['number'],ENT_QUTES);
?>

<p>私の名前は、<?php echo $my_name;?></p>
<p>ご希望の商品は、<?php echo $choices;?></p>
<p>御注文は、<?php echo $number; ?></p>