<?php
// the message
$msg = "test\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("overlordactual007@gmail.com","My subject",$msg);
?>