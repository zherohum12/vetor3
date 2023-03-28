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
        $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : "";
        $array = explode(';', $cidade);

        foreach($array as $valores){
            echo "<input type='checkbox' name='valor[]' id='valor[]' value='$valores'>$valores <br>";
        }
    ?>
    <input type="submit" value="OK">
    </form>
</body>
</html>