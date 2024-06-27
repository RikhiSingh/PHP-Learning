<?php 

    // first the constant name then its value
    define("NAME","Yoshi");
    
    // $name = 'Alex';
    // $name = 'Jones';
    // this will get overwritten, if we dont want it to happen so we can define a constant
    $age = 30;

    // String
    $stringOne = 'This is my email ';
    $stringTwo = "xyz@domain.com";

    // concatenate the string
    echo $stringOne . $stringTwo;

    // QUOTES SENSITIVITY
    $name = "alpha";
    echo 'Hey my name is $name';
    // this will work while the one on top won't
    echo "Hey my name is $name";

    echo $name[0];

    echo strlen($name);
    echo strtoupper($name);
    echo strtolower($name);
    // replace a with x in $name
    echo str_replace('a', 'x', $name);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP file</title>
</head>
<body>
    
    <h1>User Profile page</h1>

    <!-- <div><?php echo $name; ?></div> -->
    <!-- no need to use dollar sign its a constnat not a variable -->
    <div><?php echo NAME; ?></div>
    <div><?php echo $age; ?></div>

</body>
</html>