<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    $favcolor = "red";

    switch ($favcolor) {
        case "red";
        echo "Your favourite color is red!";
        break;
        case "blue";
        echo "Your favourite color is blue";
        break;
        case "green";
        echo "Your favourute color is green";
        break;
        default:
        echo "Your favourite color is neither red,blue,nor green"; 
    }
    ?>
    
</body>
</html>