<?php
date_default_timezone_set("Asia/Kolkata");
$emailExists = false;
$status = 0;
$emailID =  $_POST['email'];
$file = fopen("emails.csv", "a+");

while ($row = fgetcsv($file))
    if ($row[1] == $emailID) {
        $emailExists = true;
        break;
    }

if (!$emailExists) $status = fputcsv($file, array(date("Y-m-d h:i:sa"), $emailID));
fclose($file);

if ($status > 0) echo "Thank you for subscribing!";
else if ($status === 0) echo "You have already subscribed. Thank you!";
else echo "Oops! Something went wrong. Please try again";
