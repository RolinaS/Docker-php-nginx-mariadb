<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>MVC</title>
</head>
<body>
    <?php require './views/partials/_header.php'; ?>
    <?php require($template); ?>
    <?php require './views/partials/_footer.php'; ?>
</body>
</html>
