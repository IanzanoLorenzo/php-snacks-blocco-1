<?php
$partite = [
    "03/01/2023" => [
        [
            "squadra_ospite" => [
                "nome"=> "Naboli",
                "punti" => 30
            ],
            "squadra_di_casa" =>[
                "nome" => "Napoli Nord",
                "punti" => 31
            ]
        ],
        [
            "squadra_ospite" => [
                "nome"=> "Egitto",
                "punti" => 22
            ],
            "squadra_di_casa" =>[
                "nome" => "Dio Brando",
                "punti" => 3000
            ]
        ],
        [
            "squadra_ospite" => [
                "nome"=> "Boh",
                "punti" => 10
            ],
            "squadra_di_casa" =>[
                "nome" => "Boh 2",
                "punti" => 60
            ]
        ],
        [
            "squadra_ospite" => [
                "nome"=> "Oxford",
                "punti" => 11
            ],
            "squadra_di_casa" =>[
                "nome" => "Venezia",
                "punti" => 68.5
            ]
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($partite["03/01/2023"] as $index => $partita){ ?>
        <h4><?php echo $partita["squadra_di_casa"]["nome"]." - ".$partita["squadra_ospite"]["nome"]." | ".$partita["squadra_di_casa"]["punti"]." - ".$partita["squadra_ospite"]["punti"]; ?></h4>
    <?php }?>
</body>
</html>