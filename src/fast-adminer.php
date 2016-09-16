<?php

echo "Downloading last Adminer version... (~400 KB) ";

file_put_contents('./adminer.php',
    file_get_contents('http://www.adminer.org/latest.php')
);

echo "Downloaded! \n \n";

echo "Now you can access Adminer under this URL: \n";
echo "http://[YOUR-SITE-URL]/adminer.php \n";
