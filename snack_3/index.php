<?php

$posts = [

    '15/03/2023' => [
        [
            'title' => 'Post 1',
            'author' => 'Piero Pelù',
            'text' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dolorum illo ipsam quibusdam placeat quis sint, atque eveniet saepe laborum? Asperiores odit vitae fugit aliquam aperiam illum sint obcaecati impedit."
        ],
        [
            'title' => 'Post 2',
            'author' => 'Piero Pelù',
            'text' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dolorum illo ipsam quibusdam placeat quis sint, atque eveniet saepe laborum? Asperiores odit vitae fugit aliquam aperiam illum sint obcaecati impedit."
        ],
    ],
    '15/04/2023' => [
        [
            'title' => 'Post 3',
            'author' => 'Piero Pelù',
            'text' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dolorum illo ipsam quibusdam placeat quis sint, atque eveniet saepe laborum? Asperiores odit vitae fugit aliquam aperiam illum sint obcaecati impedit."
        ]
    ],
    '25/06/2023' => [
        [
            'title' => 'Post 4',
            'author' => 'Piero Pelù',
            'text' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dolorum illo ipsam quibusdam placeat quis sint, atque eveniet saepe laborum? Asperiores odit vitae fugit aliquam aperiam illum sint obcaecati impedit."
        ],
        [
            'title' => 'Post 5',
            'author' => 'Piero Pelù',
            'text' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dolorum illo ipsam quibusdam placeat quis sint, atque eveniet saepe laborum? Asperiores odit vitae fugit aliquam aperiam illum sint obcaecati impedit."
        ],
        [
            'title' => 'Post 6',
            'author' => 'Piero Pelù',
            'text' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor dolorum illo ipsam quibusdam placeat quis sint, atque eveniet saepe laborum? Asperiores odit vitae fugit aliquam aperiam illum sint obcaecati impedit."
        ]
    ],
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
    <?php foreach($posts as $index => $post) {?>
        <h2>Posted in: <?php echo $index ?></h2>
    <?php foreach($post as $i => $info){?>
        <h4><?php echo $info['author'] ?></h4>
        <p><?php echo $info['text'] ?></p>
        <p><?php echo $info['title'] ?></p>
    <?php }} ?>
</body>
</html>