<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");

$db_name = "mydatabase";
$table_name = "categories";
// Create connection
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, $db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST["submit"])) {
    $cat_id = $_POST["cat_id"];
    $title = $_POST["title"];
    $description = $_POST["description"];

    if ($cat_id != null && $title != null && $description != null) {
        $sql = "INSERT INTO $table_name VALUES ('$cat_id', '$title', '$description')";
        if (mysqli_query($conn, $sql)) {
            echo "New record is inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

//mysqli_close($conn);
?>

<html>

<head>
    <title>Category admin</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid #000000;
    }
</style>

<body>
    <h2>Category Administration</h2>
    <form action="admin.php" method="post">
        <table>
            <tr>
                <th>CatID</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
            <?php
            $sql = "SELECT *FROM categories";
            $results = mysqli_query($conn, $sql);

            if ($results->num_rows > 0) {
                // output data of each row
                while ($row = mysqli_fetch_row($results)) {
                    print '<tr>';
                    foreach ($row as $field) {
                        echo "<td> $field </td>";
                    }
                    print '</tr>';
                }
            } else {
                echo "0 results";
            }
            ?>
            <tr>
                <td><input type="text" size="15" name="cat_id"></td>
                <td><input type="text" size="30" name="title" "></td>
            <td><input type=" text" size="30" name="description"><br /></td>
            </tr>
        </table>
        <input type="submit" value="Add category" name="submit">
    </form>

</body>

</html>