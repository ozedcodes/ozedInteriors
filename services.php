<?php include("includes/header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Services | Ozed Exclusive Interior Concepts</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Montserrat:wght@300;500&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
background:#0f0f0f;
font-family:Montserrat,sans-serif;
color:white;
}

.hero{
height:40vh;
display:flex;
justify-content:center;
align-items:center;
text-align:center;
background:
	linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.8)),
	url('assets/images/IMG-20241011-WA0042.jpg');
background-size:cover;
background-position:center;
background-repeat:no-repeat;
}

.hero h1{
font-family:Playfair Display;
font-size:50px;
color:#d4af37;
}

.container{
padding:60px;
}

.services{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
}

.card{
background:#1a1a1a;
padding:30px;
border-radius:15px;
transition:.5s;
}

.card:hover{
transform:translateY(-10px);
border:1px solid #d4af37;
}

.card h2{
color:#d4af37;
margin-bottom:15px;
}

.gallery{
margin-top:80px;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:20px;
}

.gallery img{
width:60%;
height:250px;
object-fit:fill;
border-radius:10px;
transition:.5s;
}

.gallery img:hover{
transform:scale(1.05);
}

.book-btn{
display:block;
width:250px;
margin:50px auto;
text-align:center;
background:#d4af37;
color:black;
padding:15px;
text-decoration:none;
font-weight:bold;
border-radius:50px;
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

@media(max-width:768px){
.container{
padding:20px;
}

.hero h1{
font-size:35px;
}
}

</style>
</head>

<body>

<section class="hero">
<h1>Our Services & Projects</h1>
</section>

<div class="container">

<div class="services">

<div class="card">
<h2>Luxury Curtains</h2>
<p>Premium curtains designed for elegance and comfort.</p>
</div>

<div class="card">
<h2>Window Blinds</h2>
<p>Modern blinds for homes, offices and commercial spaces.</p>
</div>

<div class="card">
<h2>Interior Decoration</h2>
<p>Creative interior solutions that transform spaces.</p>
</div>

<div class="card">
<h2>Wallpapers</h2>
<p>Stylish wall designs with premium finishing.</p>
</div>

</div>

<h1 style="margin-top:80px;color:#d4af37;">
Recent Projects
</h1>

<div class="gallery">

<img src="assets/images/project5.jpg">
<img src="assets/images/project2.jpg">
<img src="assets/images/project3.jpg">
<img src="assets/images/project7.png">
<img src="assets/images/project8.jpg">
<img src="assets/images/project6.jpg">

</div>

<a href="contact.php" class="book-btn">
Book Consultation
</a>

</div>

<a href="https://wa.me/2348147147493" class="whatsapp" target="_blank" aria-label="WhatsApp">
	<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32" fill="none">
		<circle cx="16" cy="16" r="16" fill="none"/>
		<path d="M16 3C9.37258 3 4 8.37258 4 15C4 17.3856 4.8038 19.6348 6.23607 21.4853L4 29L11.5147 26.7639C13.3652 28.1962 15.6144 29 18 29C24.6274 29 30 23.6274 30 17C30 10.3726 24.6274 5 18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C23.5228 7 28 11.4772 28 17C28 22.5228 23.5228 27 18 27C16.1144 27 14.3206 26.3679 12.8579 25.2426L12.5858 25.0429L7.70711 26.2929L8.95711 21.4142L8.75736 21.1421C7.63208 19.6794 7 17.8856 7 16C7 10.4772 11.4772 6 17 6C17.5523 6 18 5.55228 18 5C18 4.44772 17.5523 4 17 4C16.4477 4 16 4.44772 16 5V3Z" fill="#fff"/>
		<path d="M21.5 18.5C21.5 18.5 20.5 18.5 19.5 17.5C18.5 16.5 18.5 15.5 18.5 15.5C18.5 15.5 18.5 15 19 14.5C19.5 14 19.5 13.5 19.5 13.5C19.5 13.5 19.5 13 19 12.5C18.5 12 18 12 18 12C18 12 17.5 12 17 12.5C16.5 13 16.5 13.5 16.5 13.5C16.5 13.5 16.5 14 17 14.5C17.5 15 17.5 15.5 17.5 15.5C17.5 15.5 17.5 16.5 16.5 17.5C15.5 18.5 14.5 18.5 14.5 18.5C14.5 18.5 14 18.5 13.5 18C13 17.5 13 17 13 17C13 17 13 16.5 13.5 16C14 15.5 14.5 15.5 14.5 15.5C14.5 15.5 15 15.5 15.5 16C16 16.5 16 17 16 17C16 17 16 17.5 15.5 18C15 18.5 14.5 18.5 14.5 18.5Z" fill="#fff"/>
	</svg>
</a>

</body>
</html>

<?php include("includes/footer.php"); ?>