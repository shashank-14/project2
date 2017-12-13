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

<br>
<center>
<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>"><br><br>

    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>"><br><br>
    Email: <input type="text" name="email" value="<?php echo $data->email; ?>"><br><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>"><br><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>"><br><br>
    <br><br>
    <input type="submit" value="SAVE">
</form>



</center>
<script src="js/scripts.js"></script>
</body>
</html>