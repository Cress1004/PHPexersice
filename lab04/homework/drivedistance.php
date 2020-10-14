<html>

<head>
    <title>Distance From Chicago!</title>
</head>

<body>
    <font size=4, color=blue>WELCOME TO THE DISTANCE CACULATION PAGE</font>
    <br>The page that calculate the distances frpm Chicago</br>
    <BR> Select a destination:
    <form action="checkdistance.php" method="GET">
        <select name="destination[]" size=5 multiple="multiple">
            <option>Boston</option>
            <option>Dallas</option>
            <option>Miami</option>
            <option>Nashville</option>
            <option>Las Vegas</option>
            <option>Pittsburgh</option>
            <option>San Francisco</option>
            <option>Toronto</option>
            <option>Washington, DC</option>
            <option>Hanoi</option>
        </select>
        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>


</body>

</html>