# Crow.PHP - The Auto Package Installer
Why waste time install and update packages? Auto-Install them, Don't waste your time.

How to use?

`Crow.PHP` uses Packagist repo format, so if you are looking for packages or want to make your own package, check [Here](https://packagist.org/)<br>
To activate it, just add this line to the first of your code:
```PHP
include('crow.php');
```
*the packages will be installed and added automatically.*
<br><br>
[See Crow.PHP](https://github.com/chattybot0/crow.php/blob/main/crow.php)
<br>
[See the repo on github](https://github.com/chattybot0/crow.php/)
<br>
[See the DevLog on Trello](https://trello.com/b/nZMhZM0q/crowphp)
<br>
[Learn how to write your ai.pkg](https://github.com/chattybot0/crow.php/blob/main/creators/ai.md)
<br>
[Wanna show off? Learn how to create a package](https://github.com/chattybot0/crow.php/blob/main/creators/pkg.md)
<br><br><br><br><br>
**Note**: _Crow.PHP auto updates, so adding it only once, and the newest version will always be installed._
<br>
**Another Note**: _The updates will affect you after some time, so be patient._
<br>
**A Last Note**: _Crow.PHP only updates when an HTTP GET request is made, but you can run it manually or use cron jobs. ( i prefer ~crow~ jobs )_



test thing:
```PHP
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
```
