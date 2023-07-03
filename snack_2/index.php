<?php 
    $flag = null;
    if(isset($_GET["age"]) && isset($_GET["nome"]) && isset($_GET["email"])){
        $anni = $_GET["age"];
        $nome = $_GET["nome"];
        $email = $_GET["email"];
        if(strlen($nome) > 3 && str_contains($email, '@') && str_contains($email, '.') && is_numeric($anni)){
            $flag = true;
        } else{
            $flag = false;
        } 
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($flag !== null){ ?>
        <h4><?php echo $flag === true ? "Accesso riuscito" : "Accesso negato"; ?></h4>
        <?php } else{?>
    <form action="index.php" method="GET">
        <input type="text" name="nome" placeholder="Inserisci il tuo nome">
        <input type="text" name="email" placeholder="Inserisci la tua mail">
        <input type="text" name="age" placeholder="Inserisci la tua età">
        <button type="submit">Invia</button>
    </form>
    <?php } ?>
</body>
</html>