<?php

// db connection initialization


function getDBConnection()
{
    static $link = null;
    static $dblocation = "localhost";
    static $dbname = "myshop";
    static $dbuser = "root";
    static $dbpasswd = "";

    if (!$link) {
        $link = mysqli_connect($dblocation, $dbuser, $dbpasswd);
        if (!mysqli_select_db($link, $dbname)) {
            echo "MySQL Error";
            exit();
        }
        if (!$link) {
            echo "MySQL error";
            exit();
        }
    }

    return $link;
}