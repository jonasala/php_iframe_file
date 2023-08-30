<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_GET['title'] ?? 'empty title' ?></title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        iframe {
            border: none;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>

<body>
    <iframe src="readfile.php?file=<?= $_GET['file'] ?? '' ?>"></iframe>
</body>

</html>