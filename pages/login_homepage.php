<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<style>
html body {
    background: linear-gradient(to bottom right, #7575a3, #ffffff);
    text-align:center;
}
label {
width:100px;
}
</style>

<body>



<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>

<div style="position: absolute; top: 20; right: 140;">
<form action="index.php?page=accounts&action=show" method="POST">
        <button type="submit" class="btn btn-primary">Your Profile</button>
</form>
</div>

<div style="position: absolute; top: 20; right: 30;">
<form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit" class="btn btn-primary">LOGOUT</button>
</form>
</div>

<script src="js/scripts.js"></script>
</body>
