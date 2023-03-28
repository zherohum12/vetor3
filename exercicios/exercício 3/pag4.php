<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pag4</title>
</head>
<body>
    <form action="pag5.php" method="post">
    <?php
        foreach($_POST['selecao'] as $valores){
            echo "<input type='checkbox' name='valorS[]' id='valorS[]' value='$valores'>$valores <br>";
        }
    ?>
    <input type="submit" value="OK">
    </form>
</body>
</html>