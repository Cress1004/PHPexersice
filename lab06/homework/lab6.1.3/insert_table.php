<?php
$description = $_POST['description'];
$weight = (int)$_POST['weight'];
$cost = (int)$_POST['cost'];
$num = (int)$_POST['num'];

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
$db_name = 'mydatabase';
$table_name = 'Products';

$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, $db_name);
if (!$connect) {
    die("Cannot connect to $server using $user");
} else {
    $SQLcmd = "INSERT INTO $table_name (Product_desc, Cost, Weight, Numb) VALUES (\"$description\", $weight, $cost, $num);";
    if (mysqli_query($connect, $SQLcmd)) {
        print "<br>The query is $SQLcmd <br>";
        print '<font size="4" color="blue" >Insert into table ';
        print "<i>$table_name</i> in database<i>$db_name</i> successfully<br></font>";
    } else {
        die("Table Insert failed SQLcmd = $query");
    }
    mysqli_close($connect);
}
?>