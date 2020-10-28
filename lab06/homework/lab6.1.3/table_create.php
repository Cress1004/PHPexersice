<html>

<head>
    <title>Create Table</title>
</head>

<body>
    <?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    $db_name = 'mydatabase';
    $table_name = 'Products';

    $connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, $db_name);
    if (!$connect) {
        die("Cannot connect to $server using $user");
    } else {
        $SQLcmd = "CREATE TABLE $table_name(
ProductID INT UNSIGNED NOT NULL
AUTO_INCREMENT PRIMARY KEY,
Product_desc VARCHAR(50),
Cost INT,
Weight INT,
Numb INT)";
        //mysql_select_db($mydb);
        if (mysqli_query($connect, $SQLcmd)) {
            print '<font size="4" color="blue" >Created Table ';
            print "<i>$table_name</i> in database <i>$db_name</i> <br></font>";
            print "<br>SQLcmd = $SQLcmd";
        } else {
            die("Table Create Creation Failed SQLcmd = $SQLcmd");
        }
        mysqli_close($connect);
    }
    ?></body>

</html>