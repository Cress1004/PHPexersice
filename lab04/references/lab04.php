<?php
    function user_sort($a, $b) {
    // smarts is all-important, so sort it first
        if($b == 'smarts') {
            return 1;
        } else if($a == 'smarts') {
            return -1;
        }
            return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
        }

    $values = array(
        'name' => 'Buzz Lightyear',
        'email_address' => 'buzz@starcommand.gal',
        'age' => 32,
        'smarts' => 'some'
    );
    $init_values = array(
        'name' => 'Buzz Lightyear',
        'email_address' => 'buzz@starcommand.gal',
        'age' => 32,
        'smarts' => 'some'
    ); 

    $submitted = $_GET['submitted'] ?? null;
    $sort_type = $_GET['sort_type'] ?? "sort";
    if(isset($submitted)) {
        
        if($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
            $sort_type($values, 'user_sort');
        } else {
            $sort_type($values);
        }
    }

    function checked($type, $sort_type) {
        echo $type == $sort_type ? "checked" : "";
    }
?>
<form action="lab04.php" method="get">
    <p>
        <input type="radio" name="sort_type" value="sort" checked="checked" />Standard sort
        <input type="radio" name="sort_type" value="rsort" <?php checked("rsort", $sort_type) ?>/> Reverse sort
        <input type="radio" name="sort_type" value="usort" <?php checked("usort", $sort_type) ?>/> User-defined sort<br />
        <input type="radio" name="sort_type" value="ksort" <?php checked("ksort", $sort_type) ?>/> Key sort
        <input type="radio" name="sort_type" value="krsort" <?php checked("krsort", $sort_type) ?>/> Reverse key sort
        <input type="radio" name="sort_type" value="uksort" <?php checked("uksort", $sort_type) ?>/> User-defined key sort<br />
        <input type="radio" name="sort_type" value="asort" <?php checked("asort", $sort_type) ?>/> Value sort
        <input type="radio" name="sort_type" value="arsort" <?php checked("arsort", $sort_type) ?>/> Reverse value sort
        <input type="radio" name="sort_type" value="uasort" <?php checked("uasort", $sort_type) ?>/> User-defined value sort<br />
    </p>
    <p>
        <input type="submit" value="sort" name="submitted" />
    </p>
</form>
<p> Values <?= isset($submitted) ? "sorted by $sort_type" : "unsorted"; ?>:</p>
<ul>
    <?php
        // foreach($values as $key=>$value) { 
        //     echo "
        //         <li><b>$key</b>: $value</li>
        //     "; 
        // } 
        print("<table><tr>");
        print("<td style=\"width: 500px\">");
        foreach ($init_values as $key => $value) {
            echo "<li><b>$key</b>: $value </li>";
        }
        print("</td><td style=\"width: 500px\">");
        if(array_key_exists("submitted",$_GET)){
            foreach ($values as $key => $value) {
                echo "<li><b>$key</b>: $value </li>";
            }
        }
        print("</td>");
        print("</tr>");
    ?>
</ul>
