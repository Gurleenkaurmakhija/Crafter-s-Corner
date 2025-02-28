<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crafter's Corner</title>
    <link rel="stylesheet" href="HomepageDesign.css">
    <link rel="stylesheet" href="styles.css">
    
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-9a7bs2Ez4xGmL3bJOIMM/yZxLBMRyvOlOlCRtvwYnWMnfCXaNQPvGTjWCNMF0WIjGq2LJWyhByLNvONaQYB3AA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

</head>
<body style= "background-color: #e9d8f3">
    
    <div class="navbar">
        <div class="left-nav">
            <h2>Crafter's Corner</h2>
        </div>
        <div class="right-nav">
            <a href="profile.php">Profile</a>
            <a href="#">Streaks</a>
            <a href="Notetaker.html">Notes</a>
            <!-- <i class="fa-solid fa-bolt-lightning"></i> -->
            <a href="#">Blogs</a>
            <!-- <i class="fa-solid fa-user"></i> -->
            
      
        </div>
    </div>
<main>
    <div class="popup-box">
        <div class="popup-content">
          <span class="close-btn">&times;</span>
          
          <p></p>
        </div>
      </div>
    <div class="container">
        <div class="content">
            <div class="heading">
            <h1>Crafter's Corner </h1>
            <h2>Redefining the blogging experience</h2>
            </div>
        </div>
        <div class="image">
            <img src="" alt="">
        </div>
    </div>

    <div class="container2">
        <div class="content2">
            <h1>Welcome to your personalized blogging corner!</h1>
            <p>Gain streaks as you read and write! <br>
                Earn badges as you go along! <br>
                Refuel your motivation with a daily quote!
            </p>
           
        </div>
        <div class="image2">
            <img src="" alt="">
        </div>
    </div>

    <div class="container3">
        <div class="grid_item">
            <div class="box">
                <img src="bali.jpg" alt="">
            <div class="about">
                <h1>What I learned from my trip to Bali </h1>
                <p>With its rich tapestry of culture, breathtaking landscapes, and endless adventures, this tropical island has captivated the hearts of travelers from across the globe.
                </p>
                <div class="date">
                    <p>March 15, 2024</p>
                    <a href="Balipost.html" class ="button">Read More</a>
                </div>
            </div>
            </div>
        </div>
        <div class="grid_item">
            <div class="box">
                <img src="laptop.jpg" alt="">
            <div class="about">
                <h1>Will AI take over your programming career?</h1>
                <p> Charting the path of Coding Careers Amidst the Rise of Artificial Intelligence
                </p>
                <div class="date">
                    <p>Jan 20, 2024</p>
                    <a href="Aipost.html" class ="button">Read More</a>
                </div>
            </div>
            </div>
        </div>
        <div class="grid_item">
            <div class="box">
                <img src="sports.jpg" alt="">
            <div class="about">
                <h1>The strategic genius of a Kabaddi game</h1>
                <p>A Game of Tactical Mastery since Ancient India
                </p>
                <div class="date">
                    <p>June 2, 2024</p>
                    <a href="Kabaddipost.html" class ="button">Read More</a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="container4">
        <div class="content4">
            <h2>So what's Crafter's Corner all about?</h2>
            
            <p> Through our diverse range of topics, articles, we aim to empower and enrich the lives of our readers.
                We have incorporated a range of innovative features into our website, designed to enhance usability, engagement, and interactivity. Using Concept of streak and earning badges.
                Through our platform, users from diverse backgrounds and perspectives come together to connect, collaborate, and exchange ideas, enriching each other's lives in the process.
                
            </p>
            
        </div>
       
    </div>

</main>
    
</body>
<script src="script.js"></script>
<script src="script2.js"></script>
</html>
