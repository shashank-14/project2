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

<h3>Register</h3>
<form action="index.php?page=accounts&action=store" method="post" id="form1" class = "form-inline">
    <div class = "form-group" align="center">
    <label>First name-</label>
    <input type="text" class="form-control" name="fname" value=""><br>
    </div><br><br>
    <div class = "form-group">
    <label>Last name-</label>
    <input type="text" class="form-control" name="lname" value=""><br>
    </div><br><br>
    <div class = "form-group">
    <label>Email ID-</label>
    <input type="text" class="form-control" name="email" value=""><br>
    </div><br><br>
    <div class = "form-group">
    <label>Phone No-</label>
    <input type="text" class="form-control" name="phone" value=""><br>
    </div><br><br>
    <div class = "form-group">
    <label>Birthday-</label>
    <input type="text" class="form-control" name="birthday" value=""><br>
    </div><br><br>
    <div class = "form-group">
    <label>Gender-</label>
    <input type="text" class="form-control" name="gender" value=""><br>
    </div><br><br>
    <div class = "form-group">
    <label>Password-</label>
    <input type="password" class="form-control" name="password" value=""><br>
    </div><br><br>
    <button type="submit" class="btn btn-primary" form="form1" value="Submit">Submit</button>
</form>

<script src="js/scripts.js"></script>
</body>
</html>