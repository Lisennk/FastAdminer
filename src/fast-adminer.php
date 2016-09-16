<?php


// Clear screen
if (PHP_OS == 'Linux') {
    system('clear');
} else {
    system('cls');
}

echo "Downloading last Adminer version... (~400 KB) ";

if (!file_exists('./adminer.php')) {
    if (!file_put_contents('./adminer.php',
        file_get_contents('http://www.adminer.org/latest.php')
    )) {
        echo "Can`t write file to the disk: use sudo.";
    };
} else {
    die("\n \nError: file adminer.php already exists in \n" . __DIR__ . "\n");
}

echo "Downloaded! \n \n";

echo "Now you can access Adminer under this URL: \n";
echo "\e[4m\033[1mhttp://\e[0m\e[4m[YOUR-SITE-URL]\e[4m\e[1m/adminer.php \e[0m \n \n";

readline("Press Enter to remove Adminer file and return to the terminal. \n \n");

if (unlink('./adminer.php')) {
    echo "Adminer.php was removed...";
} else {
    echo "Error: Can`t remove adminer.php :(";
}

echo "\n";