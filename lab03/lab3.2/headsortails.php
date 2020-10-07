<html>

<head>
    <title>Coin Flip!</title>
</head>

<body>
    <font size=4 color="blue">Please Pick Heads or Tails!</font>
    <form action="gotflip.php" method="post">
        <?php
        print "<input type=\"radio\" name=\"pick\" value=0> Heads";
        print "<input type=\"radio\" name=\"pick\" value=1> Tails";
        print "<BR>";
        ?>
        <input type="submit" value="Submit">
        <input type="reset" value="Restart">
    </form>
</body>

</html>