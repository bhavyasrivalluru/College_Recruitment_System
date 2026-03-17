<?php
session_start();
include "includes/db.php";

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];
$type = $_POST['type'];

/* STUDENT LOGIN */

if($type == "student"){

$query = "SELECT * FROM students WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) == 1){

$_SESSION['student'] = $email;
header("Location: student/dashboard.php");

}else{
echo "<script>alert('Invalid Student Login');</script>";
}

}

/* COMPANY LOGIN */

if($type == "company"){

$query = "SELECT * FROM companies WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) == 1){

$_SESSION['company'] = $email;
header("Location: company/dashboard.php");

}else{
echo "<script>alert('Invalid Company Login');</script>";
}

}

/* ADMIN LOGIN */

if($type == "admin"){

$query = "SELECT * FROM admin WHERE username='$email' AND password='$password'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) == 1){

$_SESSION['admin'] = $email;
header("Location: admin/dashboard.php");

}else{
echo "<script>alert('Invalid Admin Login');</script>";
}

}

}
?>

<?php include "includes/header.php"; ?>

<div class="container">

<h2>Login</h2>

<form method="POST">

<label>Email / Username</label>
<input type="text" name="email" required>

<label>Password</label>
<input type="password" name="password" required>

<label>Login As</label>
<select name="type">
<option value="student">Student</option>
<option value="company">Company</option>
<option value="admin">Admin</option>
</select>

<button type="submit" name="login">Login</button>

</form>

</div>

<?php include "includes/footer.php"; ?>