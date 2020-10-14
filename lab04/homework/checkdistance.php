<html>

<head>
    <title>Distance and time calculations</title>
</head>

<body>
    <?php
    $cities = array(
        'Dallas' => 803, 'Toronto' => 435, 'Boston' => 848,
        'Nashville' => 406, 'Las Vegas' => 1526, 'San Francisco' => 1835,
        'Washington, DC' => 595, 'Miami' => 1189, 'Pittsburgh' => 409
    );
    $destination = $_GET["destination"];
    if (array($destination)) {
        if(count($destination)>1){
        ?>
            <table>
                <tr>
                    <th>No.</th>
                    <th>Destination</th>
                    <th>Distance</th>
                    <th>Driving time</th>
                    <th>Walking time</th>
                </tr>
                <?php
                $count = 1;
                foreach ($destination as $item) {
                    if (isset($cities[$item])) {
                        $distance = $cities[$item];
                        $time = round(($distance / 60), 2);
                        $walktime = round(($distance / 5), 2);
                    }else {
                        $distance = "#";
                        $time = "#";
                        $walktime = "#";
                    }
                    print "<tr><td> $count </td>";
                    print "<td> $item </td>";
                    print "<td> $distance </td>";
                    print "<td> $time </td>";
                    print "<td> $walktime </td></tr>";
                    $count ++;
                    }
                print "</table>";
            } else {
                $item = $destination[0];
                if (isset($cities[$item])) {
                    $distance = $cities[$item];
                    $time = round(($distance / 60), 2);
                    $walktime = round(($distance / 5), 2);
                    print "The distance between Chicago ang <i>$item</i> is  $distance miles.";
                    print "<br>Driving at 60 miles per hour it would take $time hours.";
                    print "<br>Walking at 5 miles pre hour it would take $walktime hours.";
                } else {
                    print "Sorry, do not have destination information for $item.";
                }
            }
        }
       ?>
</body>

</html>