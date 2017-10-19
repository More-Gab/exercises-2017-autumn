<?php
$books = [
    [
        'author' => 'Milo Yiannopoulos',
        'title' => 'Dangerous',
        'price' => '$15.62'
    ],
    [
        'author' => 'Margaret Atwood',
        'title' => 'The Handmaid\'s Tale',
        'price' => '$8.69'
    ],
    [
        'author' => 'George Orwell',
        'title' => '1984',
        'price' => '$7.09'
    ],
    [
        'author' => 'Rupi Kaur',
        'title' => 'Milk and Honey',
        'price' => '$8.99'
    ],
    [
        'author' => 'Neil Gaiman',
        'title' => 'Norse Mythology',
        'price' => '$15.57'
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
</head>
<body>
    
    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th><strong>Price</strong></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($books as $book) : ?>
                <tr>
                    <td><?php echo $book['title']; ?></td>
                    <td><?php echo $book['author']; ?></td>
                    <td><strong><?php echo $book['price']; ?></strong></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>