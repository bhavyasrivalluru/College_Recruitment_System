<?php
include "../includes/db.php";

$result = mysqli_query($conn,"SELECT * FROM companies");

echo "<h3>Companies Hiring</h3>";

while($row=mysqli_fetch_assoc($result))
{

echo "Company: ".$row['company_name']."<br>";
echo "Vacancy: ".$row['vacancy']."<br><br>";

}
?>