#!/usr/bin/php
<?php

try {
    if (PHP_OS != 'Linux') throw new Exception('This script supports only Linux');
    if (file_exists('./adminer.php')) throw new Exception('file adminer.php already exists');

    $path = system('pwd');
    system('clear');

    echo "Downloading last Adminer version (~400 KB) to " . $path . "/adminer.php... \n";

    if (!file_put_contents($path . '/adminer.php', file_get_contents('http://www.adminer.org/latest.php')))
        throw new Exception('Can`t write file to the disk, try to use sudo');

    echo "Downloaded! \n \n"
       . "Now you can access Adminer under this URL: \n";

    echo "\e[4m" // <underline>
        . "\e[1m" // <bold>

        . "http://"

        . "\e[0m" // </bold> </underline>
        . "\e[4m" // <underline>

        . "[YOUR-SITE-URL]"

        . "\e[1m" // <bold>

        . "/adminer.php"

        . "\e[0m" // </bold> </underline>
        . "\n \n";

    readline("Press Enter to remove Adminer file and return to the terminal. \n \n");

    if (!unlink($path . '/adminer.php')) throw new Exception("Can`t remove adminer.php");

    echo "Adminer was removed... \n";
} catch (Exception $e) {
    echo "\n Error: ". $e->getMessage() . "\n";
}