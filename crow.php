<?php

/*
 CrowDotPHP
*/

/*The Auto-Updater*/
function update()
{
    $write = fopen("crow.php", "w");
    $data = file_get_contents("https://crowdotphp.martiaforoud.repl.co/crow.min");
    fwrite($write, $data);
    fclose($write);
}

/*Log a value to console*/
function console_log($text = "No input specified, This means this must be a Crow.PHP FATAL error.")
{
    echo "<script>console.log('" . $text . "');</script>";
}

function includer($pack)
{
    echo $pack["require"];
    foreach ($pack["require"] as $name => $pack)
    {
        $composer = json_decode(file_get_contents("https://raw.githubusercontent.com/" . str_replace("-", "", $name) . "/master/composer.json"));
        if (count($composer["require"]) == 0)
        {
            echo "Load:" . $pack["name"];
            return true;
        }
        else
        {
            includer($composer);
        }
    }
}

/*Detect the packages*/

function loadpkgs()
{
    $read = fopen("composer.json", "r");
    $packs = json_decode(fread($read, filesize("composer.json")) , true);
    /*includer($packs);*/
    /*echo $packs["require"];*/
    
}

/*Check for `composer.json`*/
if (file_exists("composer.json"))
{
    loadpkgs();
}
else
{
    console_log("Crow.PHP Load error: No composer.json file found, Or the permissions to read it is denied.");
}
?>
