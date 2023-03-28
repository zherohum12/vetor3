<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pag3</title>
</head>
<body>
    <form action="pag4.php" method="post">
        <select name="tv[]" id="tv[]" multiple>
        <?php  
            foreach($_POST['tv'] as $item){
                echo "<option value='$item'>$item</option>";
            } 
        ?>
        </select><br>
        <input type="submit" value="ok">
    </form>
</body>
</html>