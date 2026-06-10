<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ozed Interiors Products</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Montserrat:wght@300;500&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:'Montserrat',sans-serif;
background:#0f0f0f;
color:white;
}

.hero{
text-align:center;
padding:50px 20px;
}

.hero h1{
font-family:'Playfair Display',serif;
font-size:45px;
color:#d4af37;
}

.hero p{
margin-top:15px;
color:#ccc;
}

.products{

padding:50px;
display:grid;
grid-template-columns:
repeat(auto-fit,minmax(280px,1fr));

gap:30px;
}

.card{

background:#1a1a1a;
padding:20px;
border-radius:15px;
transition:.5s;
text-align:center;
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

font-size:22px;
margin:15px 0;
font-weight:bold;
}

.btn{

display:inline-block;
padding:12px 25px;
background:#25D366;
color:white;
text-decoration:none;
border-radius:50px;
font-weight:bold;
}

.btn:hover{

opacity:.9;
}

footer{

text-align:center;
padding:30px;
background:black;
margin-top:40px;
}

</style>
</head>

<body>

<section class="hero">

<h1>Our Products</h1>

<p>
Premium interior designs crafted for elegance and comfort
</p>

</section>


<section class="products">

<div class="card">

<img src="assets/images/curtains.png">

<h2>Luxury Curtains</h2>

<p class="price">₦38,500</p>

<a class="btn"
href="https://wa.me/2348147147493?text=Hello%20Ozed%20Interiors,%20I%20want%20to%20order%20Luxury%20Curtains%20for%20₦38,500">

Order on WhatsApp

</a>

</div>



<div class="card">

<img src="assets/images/blinds.png">

<h2>Window Blinds</h2>

<p class="price">₦28,500</p>

<a class="btn"
href="https://wa.me/2348147147493?text=Hello%20Ozed%20Interiors,%20I%20want%20to%20order%20Window%20Blinds%20for%20₦28,500">

Order on WhatsApp

</a>

</div>



<div class="card">

<img src="assets/images/wallpaper.png">

<h2>Premium Wallpaper</h2>

<p class="price">₦8,000</p>

<a class="btn"
href="https://wa.me/2348147147493?text=Hello%20Ozed%20Interiors,%20I%20want%20to%20order%20Premium%20Wallpaper%20for%20₦8,000">

Order on WhatsApp

</a>

</div>

<div class="card">

<img src="assets/images/curtain2.png">

<h2>Luxury Curtains</h2>

<p class="price">₦15,500</p>

<a class="btn"
href="https://wa.me/2348147147493?text=Hello%20Ozed%20Interiors,%20I%20want%20to%20order%20Luxury%20Curtains%20for%20₦15,500">

Order on WhatsApp

</a>

</div>



<div class="card">

<img src="assets/images/blind2.jpg">

<h2>Window Blinds</h2>

<p class="price">₦28,500</p>

<a class="btn"
href="https://wa.me/2348147147493?text=Hello%20Ozed%20Interiors,%20I%20want%20to%20order%20Window%20Blinds%20for%20₦28,500">

Order on WhatsApp

</a>

</div>



<div class="card">

<img src="assets/images/wallpaper2.jpg">

<h2>Premium Wallpaper</h2>

<p class="price">₦8,000</p>

<a class="btn"
href="https://wa.me/2348147147493?text=Hello%20Ozed%20Interiors,%20I%20want%20to%20order%20Premium%20Wallpaper%20for%20₦8,000">

Order on WhatsApp

</a>

</div>

</section>


</body>
</html>
<?php include("includes/footer.php"); ?>