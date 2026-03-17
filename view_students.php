<?php
include "../includes/db.php";

$result = mysqli_query($conn,"SELECT * FROM students");

echo "<h3>Student List</h3>";

while($row=mysqli_fetch_assoc($result))
{

echo "Name: ".$row['name']."<br>";
echo "Email: ".$row['email']."<br>";
echo "Marks: ".$row['marks']."<br><br>";

}
?>