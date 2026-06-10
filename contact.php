<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<title>Contact | Ozed Interiors</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Montserrat:wght@300;500&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
background:#0f0f0f;
font-family:'Montserrat',sans-serif;
color:white;
}

.container{

padding:50px 20px;
max-width:1000px;
margin:auto;
}

.heading{

text-align:center;
margin-bottom:50px;
}

.heading h1{

font-size:45px;
font-family:'Playfair Display',serif;
color:#d4af37;
}

.contact-box{

display:grid;
grid-template-columns:1fr 1fr;
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

}

h2{

color:#d4af37;
margin-bottom:20px;
}

.info{

margin:20px 0;
font-size:18px;
}

.btn{

display:inline-block;
padding:15px 25px;
background:#d4af37;
color:black;
text-decoration:none;
border-radius:50px;
font-weight:bold;
margin-top:20px;
}

.whatsapp{

background:#25D366;
color:white;
}

@media(max-width:768px){

.contact-box{

grid-template-columns:1fr;

}

.heading h1{

font-size:35px;
}

}

</style>

</head>

<body>

<div class="container">

<div class="heading">

<h1>Contact Ozed Interiors</h1>

<p>Let's transform your space with luxury and style</p>

</div>

<div class="contact-box">

<div class="card">

<h2>Contact Details</h2>

<div class="info">
📞 08147147493
</div>

<div class="info">
📍 Owerri, Imo State
</div>

<div class="info">
✉ ozedexclusiveinteriorconcepts@gmail.com
</div>

<a href="mailto:ozedexclusiveinteriorconcepts@gmail.com?subject=Ozed Interiors Inquiry"
class="btn">

Send Email

</a>

</div>


<div class="card">

<h2>Quick Chat</h2>

<p>
Need a fast response? Contact us directly on WhatsApp.
</p>

<a href="https://wa.me/2348147147493"
class="btn whatsapp">

Chat on WhatsApp

</a>

</div>

</div>

</div>

</body>
</html>