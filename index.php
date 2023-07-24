<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>

<body>

    <!-- Lambda Functions -->
    <h1>
        Recommended books
    </h1>

    <?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => '2009',
            'purchaseUrl' => 'http://example.com'
        ],

        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => '2012',
            'purchaseUrl' => 'http://example.com'
        ],

        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => '2019',
            'purchaseUrl' => 'http://example.com'
        ]
    ];

    $filteredBooks = array_filter(
        $books,
        function ($book) {
            return $book['author'] === 'Andy Weir';
        }
    );
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl']; ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>
