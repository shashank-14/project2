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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
</head>

<body>


<br>
<center>
<form action="index.php?page=accounts&action=edit&id=<?php echo $data->id; ?>" method="post" class = "form-inline">
    
    <div class = "form-group">
    First name: <input type="text" class="form-control" name="fname" value="<?php echo $data->fname; ?>"readonly>
    </div>
    <br><br>

    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>"readonly><br><br>
    Email: <input type="text" name="email" value="<?php echo $data->email; ?>"readonly><br><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>"readonly><br><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"readonly><br><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>"readonly><br><br>
    <br><br>
    </div>
    <input type="submit" value="Edit">
</form>


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>

</center>
<script src="js/scripts.js"></script>
</body>
</html>