<?php

//The Auto-Updater, Planned to be moved into a function.
$write = fopen("crow.php","w");
$data = file_get_contents("https://raw.githubusercontent.com/chattybot0/crow.php/main/crow.php");
fwrite($write,$data);
fclose($write);

//Log a value to console
function console_log($text = "No input specified, This means this must be a Crow.PHP FATAL error."){
  echo "<!--Added by Crow.php--><script>console.log(" . $text . ");</script>";
}

//Check for `ai.pkg`
if(file_exists("ai.pkg")){
  
}
else {
  console_log("Crow.PHP Load error: No ai.pkg file found, Or the permissions to read it is denied.");
}

?>
