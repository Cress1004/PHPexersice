<html>

<head>
    <title> Receiving Input </title>
</head>

<body>
    
    <font size=5>Thank You: Got Your Input.</font>
    <?php
    $name = $_POST["username"];
    $email=$_POST["email"];
    print("<br>Your name address is $name");
    print("<br>Your email is $email");
    ?>
</body>
</html>