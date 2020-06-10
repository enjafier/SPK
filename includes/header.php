<!DOCTYPE html>
<html>

<style>
    .tengah{
        text-align: center;
    }
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
    <?php
    if (isset($page_title)) {
        echo $page_title;
    } else {
        echo 'SPK Website';
    }
    ?>
    </title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link"  href="index.php"></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link"  href="index.php">Home</a>
    </li>
    

  </ul>

</nav>
</body>

    <div class="container">
        <div class="row">
