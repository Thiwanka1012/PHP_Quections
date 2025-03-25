2)Create a simple HTML form and accept the user name and display the name through PHP echo statement.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="Get">
    <input type="text" name="User name">
    <input type="submit" name="submit">

    </form>


    <?php
    
    $username=$_GET['User name'];
    echo $username;
    
    
    ?>

    
</body>
</html>
