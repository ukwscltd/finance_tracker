<?php

if (file_exists(__DIR__ . '/vendor/autoload.php') == false) {
    print "Please run composer install" . PHP_EOL;
    print PHP_EOL;
    exit(1);
}

require(__DIR__ . '/vendor/autoload.php');

print "FT";
