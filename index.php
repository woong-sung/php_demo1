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
                        <a href='tel:'>📞 010-9283-1307</a><br/>
                        <a href="mailto:cjswo138@gmail.com" style="margin-top: 10px">📧 cjswo138@gmail.com</a><br/>
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
                    <img src="' . $skill . '" class="img1" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        ' . $key . '
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
                    <br>
                    <h3>
                        디엘스
                    </h3>
                    <p>
                        23.06 ~ 23.10
                    </p>
                    <p>
                        - 웹 에이전시 Backend Engineer<br>
                        - 주요 업무 : PHP(Laravel 프레임워크)를 이용한 백엔드 웹개발
                    </p>

                    <br>
                    <h3>
                        CodeStates 부트캠프
                    </h3>
                    <p>
                        22.06~22.12
                    </p>
                    <p>
                        - Software Engineer Bootcamp(Backend 과정 40기)<br>
                        - Java,Spring기반 백엔드 과정 학습<br>
                        - 다양한 자료구조와 알고리즘 학습<br>
                        - 6개월 동안 매일 알고리즘 문제 풀이<br>
                        - CS기초 지식과 Network기초 지식 학습<br>
                        - 매일 과제 수행 및 페어 프로그래밍과 코드 리뷰 경험<br>
                        - 협업 프로젝트 진행
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- end experience section -->


<!-- projects section -->

<section class="blog_section layout_padding" id="projects">
    <div class="container">
        <div class="heading_container">
            <h2>
                Projects
            </h2>
            <img src="public/images/plug.png" alt="">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="img-box">
                        <img src="public/images/macwell.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            MACWELL
                        </h5>
                        <a href="https://macwell.it/">
                            🔗접속 링크
                        </a>
                        <br>
                        <p>
                            <b>담당 파트</b><br>
                            - 카카오 알림톡 및 SMS 연동<br>
                            - 관리자페이지 제작<br>
                            - 이메일 인증 기능<br>
                            - 브랜드 및 상품 관리
                        </p>
                        <p>
                            <b>개발 환경</b><br>
                            - PHP, Laravel, MySQL, AWS EC2, AWS S3
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <div class="img-box">
                        <img src="public/images/da.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            데일리 옥션
                        </h5>
                        <a href="https://github.com/dailyAuction/project_daily_auction?tab=readme-ov-file">
                            🔗깃허브 링크
                        </a>
                        <br>
                        <p>
                            <b>담당 파트</b><br>
                            - 회원관리, 게시글 crud<br>
                            - 실시간 경매 기능<br>
                            - 검색, 정렬 기능<br>
                            - 이메일 인증,
                        </p>
                        <p>
                            <b>개발 환경</b><br>
                            - Java, Spring, redis, websocket, MySQL, AWS EC2, AWS S3
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <div class="img-box">
                        <img src="public/images/yeogiyo.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            역이요 (여행 커뮤니티)
                        </h5>
                        <a href="https://github.com/woong-sung/project_yeogiyo">
                            🔗깃허브 링크
                        </a>
                        <a href="https://codestates.notion.site/40-Team007-f5f31466aa20417597fde76d78641813">
                            🔗소개 노션 링크
                        </a>
                        <br>
                        <p>
                            <b>담당 파트</b><br>
                            - 회원관리, 게시글 crud<br>
                            - 찜, 추천, 신고 기능<br>
                            - 관리자 기능(신고, 인기글 관리, 통계)<br>
                            - 이미지 업로드, 이메일 전송<br>
                            - Tmap API(거리, 시간 계산)
                        </p>
                        <p>
                            <b>개발 환경</b><br>
                            - Java, Spring,MySQL, AWS EC2, AWS S3
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end projects section -->

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