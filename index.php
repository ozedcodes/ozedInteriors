<?php include("includes/header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ozed Exclusive Interior Concepts</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Montserrat', sans-serif;
            background:#0f0f0f;
            color:#fff;
        }

        /* header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:20px 50px;
            background:#0f0f0f;
            border-bottom:1px solid rgba(255,255,255,0.1);
        } */

        /* .logo{
            width:60px;
            height:60px;
            border-radius:50%;
            overflow:hidden;
        }

        .logo img{
            width:100%;
            height:100%;
            object-fit:cover;
            display:block;
        } */

        nav a{
            color:#fff;
            text-decoration:none;
            margin:0 15px;
            font-weight:500;
        }

        nav a:hover{
            color:#d4af37;
        }

        .hero{
            height:90vh;
            background:
                linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                url('assets/images/IMG-20241011-WA0042.jpg');
            background-size:cover;
            background-position:center;
            background-repeat:no-repeat;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            text-align:center;
            padding:20px;
        }

        .hero h1{
            font-family:'Playfair Display', serif;
            font-size:50px;
            color:#d4af37;
        }

        .hero p{
            margin-top:15px;
            font-size:18px;
            max-width:600px;
        }

        .btn{
            margin-top:25px;
            padding:12px 25px;
            background:#d4af37;
            color:#000;
            border:none;
            cursor:pointer;
            font-weight:bold;
            text-decoration:none;
        }

        /* WhatsApp Button */
        .whatsapp{
            position:fixed;
            bottom:20px;
            right:20px;
            background:#25D366;
            color:#fff;
            padding:15px;
            border-radius:50px;
            text-decoration:none;
            font-weight:bold;
        }

        /* Responsive */
        @media(max-width:768px){
            header{
                flex-direction:column;
            }

            nav{
                margin-top:10px;
            }

            .hero h1{
                font-size:32px;
            }
        }
    </style>
</head>

<body>

<!-- <header>
    <div class="logo">
        <img src="assets/logo/file_000000002f0071fda675f425a93c1e10.png" alt="Ozed Logo">
    </div>

    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="shop.php">Shop</a>
        <a href="contact.php">Contact</a>
        <a href="login.php">Login</a>
    </nav>
</header> -->

<section class="hero">
    <h1>Ozed Interior Designs</h1>
    <p>We transform your space into a modern masterpiece with elegance, comfort, and style.</p>
    <a href="contact.php" class="btn">Get Started</a>
</section>

<a class="whatsapp" href="https://wa.me/2348147147493" target="_blank" aria-label="WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32" fill="none">
            <circle cx="16" cy="16" r="16" fill="none"/>
            <path d="M16 3C9.37258 3 4 8.37258 4 15C4 17.3856 4.8038 19.6348 6.23607 21.4853L4 29L11.5147 26.7639C13.3652 28.1962 15.6144 29 18 29C24.6274 29 30 23.6274 30 17C30 10.3726 24.6274 5 18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C23.5228 7 28 11.4772 28 17C28 22.5228 23.5228 27 18 27C16.1144 27 14.3206 26.3679 12.8579 25.2426L12.5858 25.0429L7.70711 26.2929L8.95711 21.4142L8.75736 21.1421C7.63208 19.6794 7 17.8856 7 16C7 10.4772 11.4772 6 17 6C17.5523 6 18 5.55228 18 5C18 4.44772 17.5523 4 17 4C16.4477 4 16 4.44772 16 5V3Z" fill="#fff"/>
            <path d="M21.5 18.5C21.5 18.5 20.5 18.5 19.5 17.5C18.5 16.5 18.5 15.5 18.5 15.5C18.5 15.5 18.5 15 19 14.5C19.5 14 19.5 13.5 19.5 13.5C19.5 13.5 19.5 13 19 12.5C18.5 12 18 12 18 12C18 12 17.5 12 17 12.5C16.5 13 16.5 13.5 16.5 13.5C16.5 13.5 16.5 14 17 14.5C17.5 15 17.5 15.5 17.5 15.5C17.5 15.5 17.5 16.5 16.5 17.5C15.5 18.5 14.5 18.5 14.5 18.5C14.5 18.5 14 18.5 13.5 18C13 17.5 13 17 13 17C13 17 13 16.5 13.5 16C14 15.5 14.5 15.5 14.5 15.5C14.5 15.5 15 15.5 15.5 16C16 16.5 16 17 16 17C16 17 16 17.5 15.5 18C15 18.5 14.5 18.5 14.5 18.5Z" fill="#fff"/>
        </svg>
</a>

</body>
</html>
<?php include("includes/footer.php"); ?>