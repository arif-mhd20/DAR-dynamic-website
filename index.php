<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dynamic website</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="/images/logo2.jpg" alt=""> 
            </a>
            <ul class="menu">
                <li><a href="" class="active">Home</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </nav>

        <div class="main-heading">
            <h1>Create  prospective with your visual Reality</h1>
            <p>Immerse yourself in a world of limitless possibilities as you harness the power of virtual reality to create captivating and immersive experiences. Through the lens of VR, unlock new perspectives and shape prospective realities that push the boundaries of imagination and innovation.</p>
            <a href="#" class="main-btn">Contact us</a>
        </div>
    </section>

    <section class="feature">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="/images/info-icon1.png" alt="">
                </div>
                <div class="f-text update">
                    <img src="" alt="">
                    <h3>Web Development</h3>
                    <p> involves a combination of programming, design, and infrastructure</p>
                    <a href="" class="main-btn">Enter</a>
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="/images/info-icon2.png" alt="">
                </div>
                <div class="f-text">
                    <img src="" alt="">
                    <h3>Software Development</h3>
                    <p>involves a structured approach to problem-solving, starting with requirements analysis and progressing through coding, testing, debugging, and deployment</p>
                    <a href="" class="main-btn">Enter</a>
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="/images/info-icon3.png" alt="">
                </div>
                <div class="f-text">
                    <img src="" alt="">
                    <h3>Front-End Development</h3>
                    <p>It involves the use of technologies like HTML, CSS, and JavaScript to build the user interface (UI) and ensure a seamless user experience </p>
                    <a href="" class="main-btn">Enter</a>
                </div>
            </div>

        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="/images/about.png" alt="">
        </div>
        <div class="about-text">
            <h2>Start tracting your statistics</h2>
            <p>Initiate monitoring your statistics to gain valuable insights and enhance informed decision-making.</p>
            <button class="main-btn">Read More</button>
        </div>
    </section>

    <section class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>Junior Web Developer<h3 class="company-name"><b> DAR </b></h3></p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name = "user" placeholder="Your Full Name"><br>
            <input type="email" name = "email" placeholder="Your email address"><br><br><br>
            <textarea name="message" id="" cols="40" rows="10" placeholder="type your review here......"></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </section>
</body>
</html>