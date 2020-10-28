<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
$db_name = 'mydatabase';
$table_name = 'Products';

$search = $_GET['search'];

$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, $db_name);
if (!$connect) {
    die("Cannot connect to $server using $user");
} else {
    $query = "SELECT * FROM $table_name WHERE (Product_desc = \"$search\")";
    $results = mysqli_query($connect, $query);
    if ($results) {
        print '<h2><font color="blue">';
        print "$table_name Data</font></h2>";
        print "The query is <i>$query </i><br>";
        print '<table border=1>';
        print '<th>Num</th><th>Product</th><th>Cost</th><th>Weight</th><th>Count</th>';
        while ($row = mysqli_fetch_row($results)) {
            print '<tr>';
            foreach ($row as $field) {
                print "<td>$field</td> ";
            }
            print '</tr>';
        }
    } else {
        die("Table Insert failed SQLcmd = $query");
    }
    mysqli_close($connect);
}
