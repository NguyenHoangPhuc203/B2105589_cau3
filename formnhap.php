<!DOCTYPE HTML>
<html>  
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//tao chuoi luu cau lenh sql
$sql = "SELECT * FROM major";
//thuc thi cau lenh sql va dua doi tuong vao $result
$result = $conn->query($sql);?>
<form action="luu.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Birthday: <input type="date" name="birth"><br>
<label for="major_id">Chọn Chuyên Ngành</label>

<select id="major_id" name="major_id">
    <?php
    while ($row = $result->fetch_array())    {
    echo "<option value ='".$row["id"]."'>".$row["name_major"]."</option>";
    }
    ?>
</select>
<input type="submit">
</form>

</body>
</html>
