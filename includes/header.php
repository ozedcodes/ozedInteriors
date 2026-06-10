<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Ozed Exclusive Interior Concepts</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

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

header{

display:flex;
justify-content:space-between;
align-items:center;
padding:20px 50px;
background:#000;
position:sticky;
top:0;
z-index:1000;
border-bottom:1px solid rgba(255,255,255,.1);

}

.logo{

display:flex;
align-items:center;
gap:10px;

}

.logo img{

width:60px;
            height:60px;
            border-radius:50%;
            overflow:hidden;

}

.logo h2{

font-size:24px;
color:#d4af37;
font-family:'Playfair Display',serif;

}

nav{

display:flex;
gap:25px;

}

nav a{

text-decoration:none;
color:white;
font-size:15px;
transition:.4s;

}

nav a:hover{

color:#d4af37;

}

.menu-icon{

display:none;
font-size:25px;
cursor:pointer;

}

@media(max-width:768px){

header{

padding:20px;
}

nav{

display:none;
flex-direction:column;
position:absolute;
top:100px;
left:0;
width:100%;
background:black;
padding:20px;
}

nav.active{

display:flex;

}

.menu-icon{

display:block;

}

}

</style>

</head>

<body>

<header>

<div class="logo">

<img src="assets/logo/logo.png" alt="Ozed Logo">

<h2>OzedInteriors</h2>

</div>

<div class="menu-icon">
<i class="fas fa-bars"></i>
</div>

<nav id="navMenu">

<a href="index.php">Home</a>
<a href="about.php">About</a>
<a href="services.php">Services</a>

<a href="products.php">Shop</a>
<a href="mailto:ozedexclusiveinteriorconcepts@gmail.com">
Contact Us
</a>



</nav>

</header>

<script>

document.querySelector(".menu-icon")
.addEventListener("click",()=>{

document.querySelector("#navMenu")
.classList.toggle("active");

});

</script>