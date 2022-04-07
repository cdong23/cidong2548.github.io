<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cindy Dong &#10046; Website</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <script src="script.js"></script>
        <style></style>
    </head>
    <body>
        <header>
            <a class="skip" href="#national">Skip to Content</a>
            <button onclick="openNav()" class="menu">&#9776;</button>  
             <div id="cindy">
                <div id="logo_a"><a href="https://cdong23.github.io/index.html" tabindex="0"><img id="logo" src="website_asset/logo_small.png" alt="website logo"><h1>Cindy Dong</h1></a></div>
        </div>   
                <nav class="ham">
                    <ul id="hamburger">
                        <li><button aria-label="Close" class="closeBtn" id="closeBtn" onclick="closeNav()"><span>&times;</span></button></li>
                        <li><a href="index.html" aria-current="page" onfocus="openNav()"><span>Home</span></a></li>
                        <li><a class="year2022_large" href="#2022" onfocus="openNav()"><span>2022</span></a></li>
                        <li><a class="year2021_large" href="#2021" onfocus="openNav()"><span>2021</span></a></li>
                        <li><a class="year2020_large" href="#2020" onfocus="openNav()"><span>2020</span></a></li>
                        <li><a href="about.html" aria-current="false" onfocus="openNav()"><span>About Cindy</span></a></li>
                        <li><a href="wportfolio.html" aria-current="false" onfocus="openNav()"><span>Commission</span></a></li>
                        <li><a href="motion.html" aria-current="false" onfocus="openNav()"><span>Contact</span></a></li>
                        <li><a href="wportfolio.html" aria-current="false" onfocus="openNav()" onblur="closeNav()"><span>Terms of Use/Permission</span></a></li>

                </ul>
                </nav>
                <nav>
                    <ul class="sidebar">
                        <li><a href="index.html" aria-current="page"><span>Home</span></a></li>
                        <li><a class="year2022_large" href="#2022" aria-current="false"><span>2022</span></a></li>
                        <li><a class="year2021_large" href="#2021" aria-current="false"><span>2021</span></a></li>
                        <li><a class="year2020_large" href="#2020" aria-current="false"><span>2020</span></a></li>
                        <li><a href="about.html" aria-current="false"><span>About Cindy</span></a></li>
                        <li><a href="wportfolio.html" aria-current="false"><span>Commission</span></a></li>
                        <li><a href="motion.html" aria-current="false"><span>Contact</span></a></li>
                        <li><a href="wportfolio.html" aria-current="false"><span>Terms of Use/Permission</span></a></li>

                </ul>
                </nav>
            </header>
        <main id="national">
                <div class="projectintro" id="top">
            <h2>Contact</h2>
        </div>
        <form action=”mailto:cindydong637@gmail.com” method=”POST” enctype=”multipart/form-data” name=”EmailForm”>
        <h3>Name:</h3>
        <input type=”text” size=”19″ name=”ContactName”>


        <h3>Message:</h3> 
        <textarea name=”ContactCommentt” rows=”6″ cols=”20″>
        </textarea>
        
        <div class="ytlink"><button><input type=”submit” value=”Submit”></button></div>
    </form>
        </main>
        <footer>
            <p>All rights reserved &#169; 2022 Cindy Dong</p>
        </footer>
    </body>