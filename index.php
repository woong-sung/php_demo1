<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>🐻조성웅 Jo sung woong</title>

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet"/>
    <link href="public/css/responsive.css" rel="stylesheet"/>
</head>

<body>

<div class="hero_area">
    <!-- header section -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="s-1"> </span>
                    <span class="s-2"> </span>
                    <span class="s-3"> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Me <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#skills" id="scroll_move"> Skills </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#experiences" id="scroll_move"> Experiences </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#projects" id="scroll_move"> Projects </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
    <!-- about me section -->
    <section class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="detail_box">
                        <h1>
                            About Me
                        </h1>
                        <hr style="margin-bottom: 50px"/>
                        <h2>
                            끊임없이 도전하고 성장하는<br>
                            백엔드 개발자
                        </h2>
                        <h1 style="margin-bottom: 0px;">
                            조성웅
                        </h1>
                        <p style="margin-top: 0px; margin-bottom: 0px;">Jo sung woong</p>
                        <a href="">📞 010-9283-1307</a><br/>
                        <a href="" style="margin-top: 10px">📧 cjswo138@gmail.com</a><br/>
                        <a href="https://joshbla.tistory.com" style="margin-top: 10px">📝 Blog</a>
                        <a href="https://github.com/woong-sung" style="margin-top: 10px">🐱 GitHub</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 offset-lg-1">
                    <div class="img_content">
                        <div class="img_container">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="img-box">
                                            <img src="public/images/slider-img1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end about me section -->
</div>


<!-- skills section -->
<?php
$skills = [
    'JAVA' => 'public/images/s1.png',
    'Spring' => 'public/images/s2.png',
    'PHP' => 'public/images/s3.png',
    'Laravel' => 'public/images/s4.png',
    'MySQL' => 'public/images/s5.png',
    'AWS EC2' => 'public/images/s6.png',
    'AWS S3' => 'public/images/s7.png',
    'GitHub' => 'public/images/s8.png',
];
echo '<section class="service_section layout_padding" id="skills">';
echo '<div class="container">
        <div class="heading_container">
            <h2>
                Skills
            </h2>
            <img src="public/images/plug.png" alt="">
        </div>
        <div class="service_container">
        ';
foreach ($skills as $key => $skill) {
    echo ' 
            <div class="box">
                <div class="img-box">
                    <img src="'.$skill.'" class="img1" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        '.$key.'
                    </h5>
                </div>
            </div>';
}

echo '</div>
    </div>
   </section>';

?>
<!-- end skills section -->

<!-- experience section -->
<section class="about_section layout_padding" id="experiences">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            Experience
                        </h2>
                        <img src="public/images/plug.png" alt="">
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit
                    </p>
                    <a href="">
                        Read More
                    </a>
                </div>
            </div>
<!--            <div class="col-md-6">-->
<!--                <div class="img_container">-->
<!--                    <div class="img-box b1">-->
<!--                        <img src="public/images/about-img1.jpg" alt=""/>-->
<!--                    </div>-->
<!--                    <div class="img-box b2">-->
<!--                        <img src="public/images/about-img2.jpg" alt=""/>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->

        </div>
    </div>
</section>

<!-- end experience section -->


<!-- blog section -->

<section class="blog_section layout_padding" id="projects">
    <div class="container">
        <div class="heading_container">
            <h2>
                Blog
            </h2>
            <img src="public/images/plug.png" alt="">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="img-box">
                        <img src="public/images/blog1.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Blog Title Goes Here
                        </h5>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <div class="img-box">
                        <img src="public/images/blog2.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Blog Title Goes Here
                        </h5>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end blog section -->


<!-- contact section -->

<section class="contact_section layout_padding">
    <div class="container ">
        <div class="heading_container">
            <h2>
                Contact Us
            </h2>
            <img src="public/images/plug.png" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="">
                    <div>
                        <input type="text" placeholder="Name"/>
                    </div>
                    <div>
                        <input type="email" placeholder="Email"/>
                    </div>
                    <div>
                        <input type="text" placeholder="Phone Number"/>
                    </div>
                    <div>
                        <input type="text" class="message-box" placeholder="Message"/>
                    </div>
                    <div class="d-flex ">
                        <button>
                            SEND
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="map_container">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                                width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end contact section -->


<!-- info section -->

<section class="info_section layout_padding">
    <div class="container">
        <div class="info_contact">
            <div class="row">
                <div class="col-md-4">
                    <a href="">
                        <img src="public/images/location-white.png" alt="">
                        <span>
                Passages of Lorem Ipsum available
              </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <img src="public/images/telephone-white.png" alt="">
                        <span>
                Call : +012334567890
              </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <img src="public/images/envelope-white.png" alt="">
                        <span>
                demo@gmail.com
              </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="info_form">
                    <form action="">
                        <input type="text" placeholder="Enter your email">
                        <button>
                            subscribe
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="info_social">
                    <div>
                        <a href="">
                            <img src="public/images/fb.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="public/images/twitter.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="public/images/linkedin.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="public/images/instagram.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- end info section -->

<!-- footer section -->
<footer class="container-fluid footer_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
                <p>
                    &copy; 2019 All Rights Reserved By
                    <a href="https://html.design/">Free Html Templates</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- footer section -->


<script src="public/js/jquery-3.4.1.min.js"></script>
<script src="public/js/bootstrap.js"></script>
<script>
    $(document).ready(function ($) {

        $(".scroll_move").click(function (event) {

            event.preventDefault();

            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 500);

        });

    });
</script>
</body>

</html>