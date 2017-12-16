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


<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1" class = "form-inline">

<div class = "form-group">
<label>ID-</label>
<input type="text" name="id" class="form-control" value="<?php echo $data->id;?>"readonly>
</div>
<br><br>

<div class = "form-group">
<label>Owner Email-</label>
<input type="text" name="owneremail" class="form-control" value="<?php echo $data->owneremail;?>"readonly><br>
</div>
<br><br>

<div class = "form-group">
<label>Owner ID-</label>
<input type="text" name="ownerid" class="form-control" value="<?php echo $data->ownerid;?>"readonly><br>
</div>
<br><br>

<div class = "form-group">
<label>Created Date-</label>
<input type="text" name="createddate" class="form-control" value="<?php echo $data->createddate;?>"readonly><br>
</div>
<br><br>

<div class = "form-group">
<label>Due Date-</label>
<input type="text" name="duedate" class="form-control" value="<?php echo $data->duedate;?>"readonly><br>
</div>
<br><br>

<div class = "form-group">
<label>Message-</label>
<input type="text" name="message" class="form-control" value="<?php echo $data->message;?>"readonly><br>
</div>
<br><br>

<div class = "form-group">
<label>Is Done-</label>
<input type="text" name="isdone" class="form-control" value="<?php echo $data->isdone;?>"readonly><br>
</div>
<br><br>

    <button type="submit" form="form1" class="btn btn-primary" value="delete">Delete</button>
</form>


<script src="js/scripts.js"></script>
</body>
</html>