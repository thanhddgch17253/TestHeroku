<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register the course</title>
</head>

<body>
    <form action="doRegister.php" method="post">
        <table border="0" width="50%">
            <tr>
                <td>Your name </td>
                <td> <input type="text" name="txtName"></td>
            </tr>
            <tr>
                <td>Course</td>
                <td>
                    <select name="cbCourse">
                        <option value="C#">C#</option>
                        <option value="Java">Java</option>
                        <option value="Cloud">Cloud</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Birth Day</td>
                <td><input type="date" name="dob"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>

                        <input type="radio" name="gender" value="Male"> Male<br>
                        <input type="radio" name="gender" value="Female"> Female<br>

                </td>
            </tr>
            <tr>
                <td>Favorite</td>
                <td>
                    <input type="checkbox" name = " book" value="book">Books
                    <input type="checkbox" name=" cars" value="cars">Cars 
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Register"></td>
            </tr>
        </table>
    </form>

</body>

</html>