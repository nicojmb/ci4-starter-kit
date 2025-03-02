<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title inertia>ci4-starter-kit</title>

    <?php if (ENVIRONMENT === 'development') : ?>
        <script type="module" src="http://localhost:7325/@vite/client"></script>
        <script type="module" src="http://localhost:7325/resources/js/app.ts"></script>
    <?php else: ?>
        <!-- Styles -->
        <link rel="stylesheet" href="<?= inertia()->assets()->css() ?>">

        <!-- Scripts -->
        <script src="<?= inertia()->assets()->js() ?>" defer></script>
    <?php endif; ?>
</head>

<body>
    <?= inertia()->app($page) ?>
</body>

</html>