<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Bonjour, <?php echo htmlspecialchars($_GET['nom']); ?>.
Tu as <?php echo (int)$_GET['age']; ?> ans.

Heyyy, <?php echo htmlspecialchars($_POST['nom']); ?>.
Tu as toujours <?php echo (int)$_POST['age']; ?> ans.

Salut, <?php echo htmlspecialchars($_POST['nom']); ?>.
Tu as toujours <?php echo (int)$_POST['age']; ?>  ans, et tu est un/une <?php echo htmlspecialchars($_POST['sex']); ?>

<p>Bonjour <?php echo $_GET['nom'] . ' agé de '. $_GET['age']. ' ans' ?> !</p>
    
<p>Bonjour <?php echo $_POST['nom'] . ' agé de '. $_POST['age']. ' ans' ?> !</p>
</body>
</html>

