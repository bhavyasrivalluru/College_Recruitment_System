<?php
include "includes/db.php";

if(isset($_POST['register'])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$marks = $_POST['marks'];

$query = "INSERT INTO students(name,email,password,marks)
VALUES('$name','$email','$password','$marks')";

$result = mysqli_query($conn,$query);

if($result){
echo "<script>alert('Registration Successful');</script>";
}else{
echo "Error: " . mysqli_error($conn);
}

}
?>

<?php include "includes/header.php"; ?>

<div class="container">

<h2>Student Registration</h2>

<form method="POST">

<label>Name</label>
<input type="text" name="name" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Password</label>
<input type="password" name="password" required>

<label>Marks</label>
<input type="text" name="marks" required>

<button name="register">Register</button>

</form>

</div>

<?php include "includes/footer.php"; ?>