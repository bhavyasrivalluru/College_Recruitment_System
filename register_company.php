<?php
include "includes/db.php";

if(isset($_POST['register'])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$vacancy = $_POST['vacancy'];

$query = "INSERT INTO companies(company_name,email,password,vacancy)
VALUES('$name','$email','$password','$vacancy')";

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

<h2>Company Registration</h2>

<form method="POST">

<label>Company Name</label>
<input type="text" name="name" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Password</label>
<input type="password" name="password" required>

<label>Vacancy</label>
<input type="text" name="vacancy" required>

<button name="register">Register</button>

</form>

</div>

<?php include "includes/footer.php"; ?>