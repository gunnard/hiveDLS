<?php
echo '<pre>
  ___ ___ .______   _______________
 /   |   \|__\   \ /   /\_   _____/
/    ~    \  |\   Y   /  |    __)_ 
\    Y    /  | \     /   |        \
 \___|_  /|__|  \___/   /_______  /
       \/                       \/ 
________    .____        _________ 
\______ \   |    |      /   _____/ 
 |    |  \  |    |      \_____  \  
 |    `   \ |    |___   /        \ 
/_______  / |_______ \ /_______  / 
        \/          \/         \/  
</pre>';

try {
    echo '<br />';
    echo 'Current PHP version: ' . phpversion();
    echo '<br />';

    $host = 'db';
    $dbname = 'database';
    $user = 'root';
    $pass = 'pass';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $conn = new PDO($dsn, $user, $pass);

    echo 'Database connected successfully';
    echo '<br />';
} catch (\Throwable $t) {
    echo 'Error: ' . $t->getMessage();
    echo '<br />';
}
