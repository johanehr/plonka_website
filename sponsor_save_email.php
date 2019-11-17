<?php

  header('Content-type: text/plain');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather all post data
    $email = $_POST["email"];
    $timestamp = date("Y-m-d_His");
    $log_file = fopen('scripts/non-public/swish_emails.txt', 'a');     // Append values to file
    while(!flock($log_file, LOCK_EX)) {
      // acquire an exclusive lock, wait for file to become available
    }
    fwrite($log_file,"Timestamp: ".$timestamp."\nEmail: ".$email."\n---\n");  // update file
    fflush($log_file);            // flush output before releasing the lock
    flock($log_file, LOCK_UN);    // release the lock
    fclose($log_file);

    echo "Thank you for your interest - we'll get in touch! You can now leave this page.";

  }
  else {
    echo "ERROR! If you got this message after trying to send us your email to get more information about when we open up for Swish, contact us via email.".PHP_EOL;
  }

?>
