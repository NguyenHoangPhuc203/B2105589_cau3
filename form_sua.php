<!DOCTYPE HTML>
<html>  

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

$id =  $_POST['id'];
$sql = "select * FROM student WHERE ID='".$id."'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$sql_major = "SELECT * FROM major";
//thuc thi cau lenh sql va dua doi tuong vao $result
$result_major = $conn->query($sql_major);?>
?>

<body>
<?php print_r($row)?>
<form action="sua.php" method="post">
ID:<input type="text" name="id" value="<?php echo $row['id'];?>"><br>
Name: <input type="text" name="fullname" value="<?php echo $row['fullname'];?>"><br>
E-mail: <input type="text" name="email"  value="<?php echo $row['email'];?>"><br>
Birthday: <input type="date" name="birth" value="<?php echo $row['Birthday'];?>"><br>
<label for="major_id">Chuyên Ngành</label>

<select id="major_id" name="major_id">
    <?php
    while ($row_major = $result_major->fetch_array())    {
    echo "<option value ='".$row_major["id"]."'>".$row_major["name_major"]."</option>";
    }
    ?>
</select>

<input type="submit">
</form>

</body>
</html>
