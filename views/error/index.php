<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Error-404</title>
</head>

<body>
  <?php require 'views/header.php'; ?>

  <div id="main">
    <h1 style="color: red;"><?php echo $this->mensaje; ?></h1>
  </div>

  <?php require 'views/footer.php'; ?>

</body>

</html>