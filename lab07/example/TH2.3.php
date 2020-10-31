<?php
$date = "12/mm/1999";

// if (mb_ereg("../../....", $date)) {
//     print "Valid date= $date";
// } else {
//     print "Invalid date= $date";
// }
$two = '[[:digit:]]{2}';
if (mb_ereg("^$two/$two/$two$two$", $date)) {
    print "Valid date= $date";
} else {
    print "Invalid date= $date";
}
?>