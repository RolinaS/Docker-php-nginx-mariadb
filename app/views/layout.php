<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>MVC</title>
</head>
<body>
    <?php require './views/partials/_header.php'; ?>
    <?php require($template); ?>
    <?php require './views/partials/_footer.php'; ?>
</body>
</html>
