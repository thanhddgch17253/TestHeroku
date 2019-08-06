<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    //$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=GWCourses','postgres','Anhthanhvk99');
	//echo "testdone";
	
	$db = parse_url(getenv("DATABASE_URL"));

$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));
    $sql = "SELECT studentname, course FROM registercourse";
		$stmt = $pdo->prepare($sql);
		//Thiết lập kiểu dữ liệu trả về
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$resultSet = $stmt->fetchAll();

    ?>
    <ul>
		<?php  
			foreach ($resultSet as $row) {
			echo '<li>' .
				$row['studentname'] . ' --' . $row['course'] 
				. '</li>';
			}
		?>
	</ul>
    
</body>
</html>