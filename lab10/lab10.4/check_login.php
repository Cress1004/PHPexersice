<?php session_start(); ?>

<?php
$server = "localhost";
$username = "root";
$password = "";
$my_db = "mydatabase";
$table = "Users";

// Create connection
$conn = mysqli_connect($server, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$username = $_POST["username"];
$password = $_POST["password"];
$sql = "SELECT * FROM 'Users' WHERE UserName = '$username';";
print $sql;
$result = $conn->query($sql);
if ($result) {
    while ($row = $result->fetch_assoc()) {
        if ($password == $row['Password']) {
            print "Login successfully.";
            print "<h1>Welcome to store, " . $row["DisplayName"] . "</h1>";
        } else {
            print "<p style='color:red'>Invalid Password. Please <a href='login.php'>login</a> again !<p>";
        }
    }
} else {
    print "<p style='color:red'>Invalid username. Please <a href='login.php'>login</a> again !</p>";
}
?>