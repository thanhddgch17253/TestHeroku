<!DOCTYPE html>
<html>
<head>
    <title>Processing</title>
</head>
<body>
    <?php
     $name = $_POST["txtName"];
     $course = $_POST["cbCourse"];
     $birthday = $_POST["dob"];
     $gender = $_POST["gender"];
     $favorites_book = $_POST["book"];
     $favorites_car = $_POST["cars"];
     $fav = $favorites_book . "," . $favorites_car;
     include 'CreateConnection.php';

     $stmt = $conn->prepare ("INSERT INTO RegisterCourse (studentname, course, dob, gender, fav)
     VALUES (?,?,?,?,?)");
     $stmt->bind_param("sssss", $name, $course, $birthday, $gender, $fav);
     $stmt->execute();
     $conn->close();
    ?>
    <h2>Hề Lố <?php echo $name?> Thanks for registering
    <?php echo $course?>
    </h2>
    <p>Your dob: <?php echo $birthday?></p>
    <p>Gender: <?php echo $gender?></p>
    <ul>Favorites:
        <li><?php echo $favorites_book?></li>
        <li><?php echo $favorites_car?></li>
    </ul>
    <a href="Register.php"> <button>back</button></a>
</body>
</html>