<?php
$updatedJSON = $_POST['json'];
$file_name = $_POST['fileName'];
$status = file_put_contents($file_name, $updatedJSON);
if ($status === FALSE) echo false;
else echo true;
