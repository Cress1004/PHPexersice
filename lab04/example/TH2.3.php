<?php
    $scores = array(75, 65, 85, 90);
    $average = ($scores[0] + $scores[1] + $scores[2] + $scores[3]) / 4;
    print "before average = $average \n";
    $scores[3] = 95;
    $average = ($scores[0] + $scores[1] + $scores[2] + $scores[3]) / 4;
    print "after average = $average";
?>

