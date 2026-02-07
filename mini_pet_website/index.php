<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Header Footer Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Header */
        header {
            background-color: #333;
            color: white;
            padding: 15px 30px;
        }

        header h1 {
            margin: 0;
            display: inline-block;
        }

        nav {
            float: right;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Main content */
        main {
            padding: 50px;
            text-align: center;
            min-height: 60vh;
        }

        .btn {
            padding: 12px 25px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-secondary {
            background-color: #28a745;
            color: white;
        }

        .btn:hover {
            opacity: 0.85;
        }

        /* Footer */
        footer {
            background-color: #222;
            color: #ccc;
            text-align: center;
            padding: 15px;
        }
		 body {
            margin: 0;
            height: 100vh;
            font-family: Arial, sans-serif;

            /* Pet photo background */
            background-image: url("https://images.unsplash.com/photo-1548199973-03cce0bbc87b");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Overlay content */
        .overlay {
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* dark overlay */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .content {
            background: rgba(255, 255, 255, 0.15);
            padding: 40px;
            border-radius: 10px;
        }

        a {
            color: #ffd700;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>


    <!-- Header -->
    <header>
        <h1>Welcome Pet Lovers</h1>
         <nav>
            <a href="https://www.petloverscentre.com/?srsltid=AfmBOooax9qb3qpDZnD2PKNy5xAYyXNTxDfgcETAYQ75ZeUthR-jzkWl">Home</a>
            <a href="https://corporate.petloverscentre.com/">About</a>
            <a href="https://customercare.petloverscentre.com/hc/en-us/articles/7004710787993-Contact-Us">Contact</a>
        </nav>
        <div style="clear: both;"></div>
    </header>
	 

    <!-- Main Content -->
	<style>
       
    </style>
</head>


<div class="overlay">
    <div class="content">
	 <?php
    $CleverWelcomeMessage='All the love, none of the Crap!';  
	$pupCount=50;
	?> 
	<h1><?php  echo $CleverWelcomeMessage; ?></h1>
	 <p>Love, care, and happiness for your pets</p>
	<p> Over <?php  echo $pupCount ?> Pet Friends </p>
	
    </div>
</div>


	<!--background-->
   

    <!-- Footer -->
    <footer>
        <p>© 2026 My Website. All rights reserved.</p>
    </footer>

</body>
</html>
