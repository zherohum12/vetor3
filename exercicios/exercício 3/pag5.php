<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pag5</title>
</head>
<body>
    <form action="pag6.php" method="post">
        <?php  
            foreach($_POST['valorS'] as $item)
                echo "<input type='radio' name='escolha' id='escolha' value='$item'>$item <br>"
        ?>
        <input type="submit" value="ok">
    </form>
</body>
</html>