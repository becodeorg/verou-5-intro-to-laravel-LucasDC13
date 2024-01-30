<!doctype HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wow, a homepage!</title>
        <link rel="stylesheet" href="/app.css">
        <script src="/app.js"></script>
    </head>

    <body>
        <?php foreach ($posts as $post) : ?>
            <article>
                <?= $post; ?>
            </article>
            <hr>
        <?php endforeach; ?>         
    </body>
</html>