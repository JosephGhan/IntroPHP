<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Php</title>
    <?php 
        $theName = "Stitch";
        if (isset($_GET['firstName']))
        {
            $theName = htmlentities($_GET['firstName']);
        }
    ?>
</head>
<body>
    <?php echo("<h1>Hello World from HTML</h1>"); 
          echo("<p>$theName</p>");
    ?>
    <form action="">
        <input type="text" name="firstName" id="">
        <input type="submit" value="Submit">
    </form>

</body>
</html>