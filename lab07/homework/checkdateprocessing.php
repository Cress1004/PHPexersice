<html>

<head>
    <title>Date Check</title>
</head>

<body>
    <?php
    function namnhuan($year)
    {
        if ($year % 400 == 0)
            return true;
        if ($year % 4 == 0 && $year % 100 != 0)
            return true;
        return false;
    }
    $date = $_POST["date"];
    $two = '[[:digit:]]{2}';
    $month = '[0-2][[:digit:]]';
    $day = '[0-3][[:digit:]]';
    $year = "2[[:digit:]]$two";

    if (mb_ereg("^($month)/($day)/($year)$", $date)) {
        $datearr = preg_split("/\//", $date);
        $month = (int)$datearr[0];
        $day = (int)$datearr[1];
        $year = (int)$datearr[2];
        if ($month <= 0 || $month > 12)
            print "Invalid month=$month<br>";
        else {
            switch ($month) {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    if ($day <= 0 || $day > 31)
                        print "Invalid for 31 days = $date";
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    if ($day <= 0 || $day > 30)
                        print "Invalid for 30 days date = $date";
                    break;
                case 2:
                    if (namnhuan($year)) {
                        if ($day <= 0 || $day > 29)
                            print "Invalid for 29days date = $date";
                        break;
                    }
                    if ($day <= 0 || $day > 28)
                        print "Invalid for 28 days date = $date";
                    break;
                default:
                    print "Valid date = $date";
                    break;
            }
        }
    } else {
        print "Invalid form for date=$date";
    }
    ?>
</body>

</html>