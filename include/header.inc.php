<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Webpage Designer</title>
    
</head>
<body class="<?php echo isset($_GET['backgroundColor']) ? strtolower($_GET['backgroundColor']) : ''?>bg">
<ul class="nav ">
    <li class="nav-item">
    <a class="nav-link" href="page1.php">Page 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="page2.php">Page 2</a>
  </li>
  </ul>
  
