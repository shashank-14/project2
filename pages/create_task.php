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

<body>
<center>
<form action="index.php?page=tasks&action=store&id=" method="post" id="form1" class = "form-inline">

<div class = "form-group">
Owner Email:<input type="text" class="form-control" name="owneremail" value="">
</div>
<br><br>

<div class = "form-group">
Owner ID:   <input type="text" class="form-control" name="ownerid" value="">
</div>
<br><br>

<div class = "form-group">
Created Date:<input type="text" class="form-control" name="createddate" value="">
</div>
<br><br>

<div class = "form-group">
Due Date:<input type="text" class="form-control" name="duedate" value="">
</div>
<br><br>

<div class = "form-group">
Message:<input type="text" class="form-control" name="message" value="">
</div>
<br><br>

<div class = "form-group">
Is Done:<input type="text" class="form-control" name="isdone" value="">
</div>
<br><br>

<button type="submit" class="btn btn-primary" form="form1" value="create">Create</button>
</form>



<script src="js/scripts.js"></script>
</center>
</body>
</html>