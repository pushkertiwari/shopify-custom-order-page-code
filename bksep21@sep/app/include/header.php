<?php 
ob_start();
session_start(); 
include 'include/DBConnection.php'; ?>
<?php if(isset($_REQUEST['shop'])){ $_SESSION['shop']=$_REQUEST['shop']; } ?>
<!DOCTYPE html>
<head>
  <title>Bleefs App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <script src="https://cdn.shopify.com/s/assets/external/app.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/app/include/css/style.css" type="text/css">
  <script type="text/javascript" src="/app/include/js/jquery.validate.js"></script>
  <style type="text/css">
    .my_body{
      /* background-color: #f4f6f8; */
    }
  </style>

</head>
<body class="my_body">
  