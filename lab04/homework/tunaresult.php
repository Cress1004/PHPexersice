<html>

<head>
    <title>Tuna Cafe</title>
</head>

<body>
    <font size=4 color="blue">Tuna Cafe Results Received</font>
    <?php
    $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Fie', 'Grilled Tuna', 'Tuna Surprise');
    $prefer = $_GET["prefer"];
    if (count($prefer) == 0) {
        print "Oh no! Please pick somthing as your favourite!";
    } else {
        print '<br>Your selections were: <ul>';
        foreach ($prefer as $item) {
            print "<li>$menu[$item]</li>";
        }
    }
    ?>
</body>

</html>