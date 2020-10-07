<html>

<head>
    <title>COnditional Test</title>
</head>

<body>
    <?php
    $first = $_POST["firstName"];
    $middle = $_POST["middleName"];
    $last = $_POST["lastName"];
    print("Hi $first! Your full name is $last $middle $first. <br></br>");
    if ($first == $last) {
        print("$first and $last is equal");
    }
    elseif ($first < $last) {
        print("$first is less than $last");
    }
    else{
        print("$first is greater than $last");
    }
    print("<br></br>");
    $grade1 = $_POST["grade1"];
    $grade2 = $_POST["grade2"];
    $final = (2*$grade1+3*$grade2)/5;
    if($final>89){
        print("Your final grade is $final. You got A, Congratulation!");
    }
    elseif($final>79){
        print("Your final grade is $final. You got B");
    }
    elseif($final>69){
        print("Your final grade is $final. You got C");
    }
    elseif($final>59){
        print("Your final grade is $final. You got D");
    }
    elseif($final>=0){
        print("Your final grade is $final. You got F");
    }
    else{
        print("Illegal grade less than 0, Final grade = $final");
    }
    ?>
</body>

</html>