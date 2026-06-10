<?php
include("includes/db.php");
?>
<?php include("includes/header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width,initial-scale=1">

<title>Shop | Ozed Interiors</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Montserrat:wght@300;500&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
background:#0f0f0f;
color:white;
font-family:Montserrat,sans-serif;
}

/* header{
padding:20px;
display:flex;
justify-content:space-between;
align-items:center;
background:black;
} */

/* .logo{
color:#d4af37;
font-size:25px;
font-family:Playfair Display;
} */

.products{

padding:50px;
display:grid;
grid-template-columns:
repeat(auto-fit,minmax(250px,1fr));

gap:30px;
}

.card{

background:#1a1a1a;
padding:20px;
border-radius:15px;
transition:.5s;
}

.card:hover{

transform:translateY(-10px);
}

.card img{

width:100%;
height:250px;
object-fit:cover;
border-radius:10px;
}

.card h2{

margin-top:15px;
color:#d4af37;
}

.price{

margin:10px 0;
font-size:20px;
}

.btn{

display:inline-block;
padding:12px 25px;
background:#d4af37;
color:black;
text-decoration:none;
border-radius:50px;
font-weight:bold;
}

.whatsapp{
position:fixed;
bottom:20px;
right:20px;
background:#25D366;
padding:15px;
border-radius:50%;
color:white;
text-decoration:none;
}

</style>

</head>

<body>

<!-- <header>

<div class="logo">
Ozed Interiors
</div>

</header> -->

<section class="products">

<div class="card">

<img src="assets/images/curtain.jpg">

<h2>Luxury Curtains</h2>

<p class="price">
₦85,000
</p>

<a href="cart.php?product=Luxury Curtains&price=85000" class="btn">
Add to Cart
</a>

</div>


<div class="card">

<img src="assets/images/blinds.jpg">

<h2>Window Blinds</h2>

<p class="price">
₦65,000
</p>

<a href="cart.php?product=Luxury Curtains&price=65000" class="btn">
Add to Cart
</a>

</div>


<div class="card">

<img src="assets/images/wallpaper.jpg">

<h2>Premium Wallpaper</h2>

<p class="price">
₦45,000
</p>

<a href="cart.php?product=Luxury Curtains&price=85000" class="btn">
Add to Cart
</a>

</div>

</section>

<a href="https://wa.me/2348147147493"
class="whatsapp">
WhatsApp
</a>

</body>
</html>

<?php include("includes/footer.php"); ?>