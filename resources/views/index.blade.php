<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Folio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <!-- Header Start -->
    <header>
        <a href="{{route('site')}}" class="logo"><img src="img/logo.png" alt="logo"></a>

        <div class="navigation">
            <ul class="menu">
                <div class="close-btn"><i class="fas fa-times"></i></div>
                <li class="menu-item">
                    <a id="sub-btn" class="sub-btn">Sections <i class="fas fa-angle-down"></i></a>
                    <ul id="sub-menu" class="sub-menu">
                        <li class="sub-item"><a href="#{{$section->title}}">{{$section->title}}</a></li>
                        @foreach ($sections as $s)
                        <li class="sub-item"><a href="#{{$s->title}}">{{$s->title}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="menu-item"><a href="#footer">Contact us</a></li>
            </ul>
        </div>
        <div class="social-media">
            <ul class="social-menu">
                <!-- <li class="social-item"><a href="#"><i class="fab fa-twitter"></i></a></li> -->
                <li class="social-item"><a href="https://www.facebook.com/Thefoodfolio-100355825890691"><i class="fab fa-facebook-f"></i></a></li>
                <li class="social-item"><a href="https://www.instagram.com/the.foodfolio"><i class="fab fa-instagram"></i></a></li>
                <li class="social-item"><a href="https://www.linkedin.com/company/the-foodfolio"><i class="fab fa-linkedin-in"></i></a></li>

            </ul>
        </div>
        <div class="menu-btn active"><i class="fas fa-bars"></i></div>
    </header>
    <!-- Header End -->

    <!-- Slide Start -->
    <section class="slide">
        <img src="{{asset('img/logo-1.png')}}" alt="">
    </section>
    <!-- Slide End -->

    <!-- Content Start -->

    <section class="content-section">
        <div class="item">
            <div class="absolute" id="{{$section->title}}"></div>
            <h2 class="title">{{$section->title}}</h2>
            <p class="content">{{$section->content}}</p>
        </div>

        <div class="banner">
            <h2 class="title">HOSPITALITY <br> & <br> FOOD CONSULTANCY</h2>
        </div>

        @foreach ($sections as $s)
        <div class="item">
            <div class="absolute" id="{{$s->title}}"></div>
            <h2 class="title">{{$s->title}}</h2>
            <p class="content">{{$s->content}}</p>
        </div>
        @endforeach

    </section>
    <!-- Content End -->

    <section class="layer-img-section">
        <!-- Layer Start -->
        <div class="layer-img">

            @foreach ($firstLayers as $layer)
            <div>
                <img src="{{URL::asset($layer->image)}}" alt="">
            </div>
            @endforeach
        </div>

        <div class="layer-img">

            @foreach ($secondLayers as $layer)
            <div>
                <img src="{{URL::asset($layer->image)}}" alt="">
            </div>
            @endforeach
        </div>
        <!-- Layer End -->
    </section>

    <!-- Slider Start -->
    <section class="slider-section">
        <div class="slides">

            <!--radio buttons start-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!--radio buttons end-->
            <!--slide images start-->
            <?php $isFirst = true; ?>
            @foreach ($slides as $slide)
            <div class="slider <?php if ($isFirst == true) {
                                    echo 'first';
                                    $isFirst = false;
                                } ?>">
                <div class="slider-item" style="background-image: url('{{$slide->image}}');">
                    <h2 class="slider-title">{{$slide->title}}
                    </h2>
                    <p class="slider-description">{{$slide->description }}</p>
                </div>
            </div>
            @endforeach
            <!--automatic navigation start-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
            <!--automatic navigation end-->
        </div>
        <!--manual navigation start-->
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
        <!--manual navigation end-->



    </section>
    <!-- Slider End -->

    <!-- Footer Start -->
    <section>
        <div class="arrow">
            <i class="fas fa-chevron-up"></i>
        </div>
        <div class="footer">
            <div class="absolute" id="footer"></div>
            <h2>Give us a call @ +966 50 565 7958</h2>
            <h3><a target="_blank" href="https://goo.gl/maps/qZ5CtTruFWQj7FREA">Address: Kingdom of Saudi Arabia, Imam Abdullah bin Saud bin Abdulaziz Road, Granada, Riyadh 13241 <i class="fas fa-map-marker-alt"></i></a></h3>
            <a style="margin-top: 100px;" href="#" class="logo"><img src="img/logo.png" alt="logo"></a>
            <h4>Foodfolio 2021/2022 All rights reserved</h4>
            <h4>Made with love at the foodfolio</h4>
        </div>
    </section>
    <!-- Footer End -->

    <script type="text/javascript">
        // Header Script Start

        /* Header Start */


        /* javascript for the responsive navigation menu */

        var menu = document.querySelector(".menu");
        var menuBtn = document.querySelector(".menu-btn");
        var closeBtn = document.querySelector(".close-btn");
        var subBtn = document.getElementById("sub-btn");
        var subMenu = document.getElementById("sub-menu");

        menuBtn.addEventListener("click", () => {
            menuBtn.classList.remove("active");
            menu.classList.add("active");
            closeBtn.classList.add("active");
        });

        closeBtn.addEventListener("click", () => {
            menu.classList.remove("active");
            menuBtn.classList.add("active");
            closeBtn.classList.remove("active");
        });

        subBtn.addEventListener("click", () => {
            subMenu.classList.toggle("active");

        });
        //javascript for the navigation bar effects on scroll
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);

            var slide = document.querySelector(".slide");
            slide.classList.toggle("sticky", window.scrollY > 0);
        });
        /* Header End */
        // Header Script End
    </script>

    <!-- Slider Script Start -->
    <script type="text/javascript">
        var counter = 1;
        document.getElementById('radio' + counter).checked = true;
        counter++;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);
    </script>
    <!-- Slider Script End -->
    <script type="text/javascript">
        var arrow = document.querySelector(".arrow");
        arrow.addEventListener("click", () => {
            window.scrollTo(0, 0);
        });
    </script>
</body>

</html>