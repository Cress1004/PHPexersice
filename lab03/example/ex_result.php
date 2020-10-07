<html>

<head>
    <title> Coin Flip Results </title>
</head>

<body> <?php
        $value = $_POST["value"];
        $cost = $_POST["cost"];
        srand((float) microtime() * 10000000);
        $flip = rand(0, 99);
        print "Ket qua sinh ngau nhien: $flip <br> ";

        if ($flip == $value) {
            $cost = $cost*70;
        } else{
            $cost = 0;
        }
        print "<font color=\"blue\"> Ban nhan duoc so tien la: $cost !</font>";
        print ' Ban nhan duoc so tien la: $cost!';
        ?> </body>

</html>