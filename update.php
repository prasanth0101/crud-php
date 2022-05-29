<?php
include 'connection.php';
$id = $_GET['updateid'];
// to get old values
$sql = "select * from `emp_table` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$age = $row['age'];
$city = $row['city'];
////////////////

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $city = $_POST['city'];

    $sql = "update emp_table set name='$name' ,age='$age', city='$city' where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>





<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Crud Functions</title>
</head>

<body style="background-color: #8c8c8c;">
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value="<?php echo $name ?>">
            </div>
            <div class="form-group">
                <label>age</label>
                <input type="text" class="form-control" placeholder="Enter Your age" name="age" autocomplete="off" value="<?php echo $age ?>">
            </div>
            <div class="form-group">
                <label>city</label>
                <input type="text" class="form-control" placeholder="city" name="city" autocomplete="off" value="<?php echo $city ?>">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top:10px" name='submit'>update</button>
            <a href="display.php" class="btn btn-primary my-5">Cancel update</a>
        </form>
    </div>
</body>

</html>