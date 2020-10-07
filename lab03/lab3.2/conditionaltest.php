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
        printf("Your final grade is %.lf. You got A, Congratulation!", $final);
    }
    elseif($final>79){
        printf("Your final grade is %.lf. You got B.", $final);
    }
    elseif($final>69){
        printf("Your final grade is %.lf. You got C.", $final);
    }
    elseif($final>59){
        printf("Your final grade is %.lf. You got D.", $final);
    }
    elseif($final>=0){
        printf("Your final grade is %.lf. You got F.", $final);
    }
    else{
        printf("Illegal grade less than 0, Final grade = %.lf", $final);
    }
    ?>
</body>

</html>