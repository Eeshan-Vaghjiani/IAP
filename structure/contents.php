<?php

class contents {
    // Main content for the home page or other general sections
    public function main_content() {
        ?>
        <div class="row">
            <div class="content">
                <p>
                    Our IT courses are designed to equip students with the skills necessary to succeed in the fast-evolving world of technology. From basic programming to advanced topics in cybersecurity, our comprehensive curriculum has something for everyone.
                </p>
                <p>
                    Join us and take the next step in your technology journey, learning from experienced instructors, engaging in hands-on projects, and gaining practical experience.
                </p>
                <p>
                    Whether you're a beginner or looking to deepen your knowledge, our IT courses will help you achieve your goals and stand out in a competitive field.
                </p>
            </div>
        </div>
        <?php
    }

    // About section content
    public function about_content() {
        ?>
        <div class="row">
            <div class="content">
                <h1>About the IT Course</h1>
                <img src="images/slide1image.jpg" class="abt_img" alt="About Us Image" />
                <p>
                    Our IT courses are structured to provide students with a deep understanding of the latest technology trends, tools, and practices. Our focus is on practical applications and real-world problem-solving.
                </p>
                <p>
                    With a wide range of subjects covering topics such as software development, networking, databases, cybersecurity, and AI, students will have the opportunity to specialize in areas of their interest while gaining a solid foundation in IT principles.
                </p>
                <p>
                    The course also emphasizes teamwork, ethical practices, and industry-standard tools to ensure our students are well-prepared for professional environments.
                </p>
            </div>
        </div>
        <?php
    }

    // Sidebar section for additional information or navigation
    public function sidebar() {
        ?>
        <div class="col-md-3">
            <div class="sidebar">
                <h2>Course Modules</h2>
                <ul>
                    <li>Introduction to Programming</li>
                    <li>Data Structures & Algorithms</li>
                    <li>Networking Essentials</li>
                    <li>Web Development</li>
                    <li>Cybersecurity Basics</li>
                    <li>Artificial Intelligence</li>
                </ul>
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="syllabus.php">View Syllabus</a></li>
                    <li><a href="instructors.php">Meet the Instructors</a></li>
                    <li><a href="faq.php">Frequently Asked Questions</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <?php
    }

    // Slideshow section with captions and dynamic content
    public function slideshow() {
        ?>
        <div class="slideshow-container">
            <?php 
            // Slide 1
            $this->slide('images/slide1image.jpg', 'Welcome to the IT Course', '“The future belongs to those who learn more skills and combine them in creative ways.”');

            // Slide 2
            $this->slide('images/slide2image.jpg', 'Explore Our Programs', '“Learning is a treasure that will follow its owner everywhere.”');
            ?>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span>
        </div>

        <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Automatic slideshow change every 5 seconds
        setInterval(function() {
            plusSlides(1);
        }, 3000); // 5000 ms = 5 seconds

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        }
        </script>

        <style>
        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif; margin:0;}
        .mySlides {display: none;}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 100%;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 30px;
            padding: 20px;
            position: absolute;
            top: 50%; /* Move text to the middle */
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            width: 80%;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.7);
        }

        /* 3D Text */
        .text-3d {
            font-size: 60px;
            font-weight: bold;
            color: #4a4a4a; /* Darker shade of black */
            text-shadow: 2px 2px 5px rgba(4,255,50,0.7), 0px 0px 25px rgba(255,255,23,0.7), 0px 0px 5px rgba(255,255,54,0.7);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4;} 
            to {opacity: 1;}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px;}
        }
        </style>
        <?php
    }

    // Helper method for creating each slide
    private function slide($imageSrc, $captionText, $quoteText) {
        ?>
        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="<?php echo $imageSrc; ?>" style="width:100%; height: 100vh; object-fit: cover;" alt="Slide Image">
            <div class="text">
                <div class="text-3d"><?php echo $captionText; ?></div>
                <p style="font-size: 20px; margin-top: 10px; color: #ffffff;"><?php echo $quoteText; ?></p>
            </div>
        </div>
        <?php
    }
}
?>
