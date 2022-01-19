<?php

/* db connection initialization
$dblocation="localhost";
$dbname = "myshop";
$dbuser = "root";
$dbpasswd = "";

//db connection
$db = mysqli_connect($dblocation,$dbuser,$dbpasswd);


if(!$db){
    echo "MySQL error";
    exit();
}

if (!mysqli_select_db($db, $dbname)){
    echo "MySQL Error";
    exit();
}
*/

// I'll try to learn some PDO from official documentation...
$dbuser = "root";
$dbpasswd = "";

try {
    $db = new PDO('mysql:host=localhost;dbname=myshop;charset=utf8', $dbuser, $dbpasswd);
    /* USED FOR TESTING
     * foreach ($db->query('SELECT * from categories') as $row) {
       print_r($row);
    }
    $db = null;
    */

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
