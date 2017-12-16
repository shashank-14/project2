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

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post" class = "form-inline">

    <div class = "form-group" align="center">
    <label>First name-</label>
    <input type="text" class="form-control" name="fname" value="<?php echo $data->fname; ?>">
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Last name-</label>
    <input type="text" class="form-control" name="lname" value="<?php echo $data->lname; ?>">
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Email-</label>
    <input type="text" class="form-control" name="email" value="<?php echo $data->email; ?>">
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Phone-</label>
    <input type="text" class="form-control" name="phone" value="<?php echo $data->phone; ?>">
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Birthday-</label>
    <input type="text" class="form-control" name="birthday" value="<?php echo $data->birthday; ?>">
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Gender-</label>
    <input type="text" class="form-control" name="gender" value="<?php echo $data->gender; ?>">
    </div><br><br>
    <input type="submit" class="btn btn-primary" value="SAVE">
</form>

<script src="js/scripts.js"></script>
</body>
</html>