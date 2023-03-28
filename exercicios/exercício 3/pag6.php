<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pag6</title>
</head>
<body>
    <?php
        $escolha = isset($_POST['escolha']) ? $_POST['escolha'] : "";
        echo "<h1>$escolha</h1>";
    ?>

</body>
</html>