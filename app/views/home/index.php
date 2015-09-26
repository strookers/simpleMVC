<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mithun</title>
    <link rel="stylesheet" href="..../public/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include 'inc/nav.php';
?>
<?php

$page = @$_GET['page'];

if(@$_GET['page']){
    include @$_GET['page'].".php";
}else{
    include "forside.php";
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
<?php
echo 'hello ' . $data['name'];