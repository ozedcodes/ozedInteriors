<?php

session_start();

if(!isset($_SESSION['user_id'])){

header("Location:../login.php");
exit();

}

?>

<!DOCTYPE html>
<html>

<head>
<title>Admin Dashboard</title>

<style>

body{
font-family:Arial;
background:#0f0f0f;
color:white;
padding:30px;
}

h1{
color:#d4af37;
}

.card{
background:#1a1a1a;
padding:20px;
margin-top:20px;
border-radius:10px;
}

</style>

</head>

<body>

<h1>
Welcome,
<?php echo $_SESSION['fullname']; ?>
</h1>

<div class="card">
Manage Products
</div>

<div class="card">
Manage Bookings
</div>

<div class="card">
Manage Orders
</div>

<div class="card">
Manage Customers
</div>

</body>
</html>