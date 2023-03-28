<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pag2</title>
</head>
<body>
    <form action="pag3.php" method="post">
        <?php  
            foreach($_POST as $item)
                echo "<input type='checkbox' name='tv[]' id='tv[]' value='$item'>$item <br>"
        ?>
        <input type="submit" value="ok">
    </form>
</body>
</html>