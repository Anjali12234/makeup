@extends('frontend.layouts.master')
@section('content')
    
  <!--==============================
      Hero Area
    ==============================-->
    <section class="vs-hero-wrapper position-relative  ">
        <div class="vs-hero-carousel" data-height="980" data-container="1900" data-slidertype="responsive">
            <!-- Slide 1-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                <img width="1920" height="980" src="{{asset('assets/frontend/img/hero/hero-2-1.jpg')}}" class="ls-bg" alt="slider-bg" />
                <img width="664" height="522" src="{{asset('assets/frontend/img/hero/hero-shape-2-2.png')}}"
                    class="ls-l ls-hide-phone ls-img-layer d-hd-none" alt="image"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; top:463px; left:-6px;"
                    data-ls="offsetxin:left; offsetyin:bottom; durationin:1500; delayin:1400; easingin:easeOutQuint; offsetxout:left; offsetyout:bottom;">
                <img width="1923" height="90" src="{{asset('assets/frontend/img/hero/hero-shape-2-1.png')}}"
                    class="ls-l ls-hide-phone ls-img-layer d-hd-none" alt="hero shape"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:894px; left:-13px;"
                    data-ls="easingin:easeOutQuint; static:forever;">
                <div style="-webkit-text-stroke: 1px rgba(255,255,255,0.10); font-size:300px; text-align:center; font-style:normal; text-decoration:none; text-transform:uppercase; font-weight:600; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; width:1700px; left:50%; top:290px; color:rgba(255, 255, 255, 0.05);"
                    class="ls-l ls-text-layer"
                    data-ls="durationin:1500; delayin:1000; parallax:true; parallaxlevel:8; parallaxaxis:x;">Solution
                </div>
                <p style="font-size:20px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; top:315px; left:50%; width:1000px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    SUCCESS YOUR BUSINESS</p>
                <h1 style="top:370px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:72px; color:#ffffff; font-family:Exo; width:1000px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Excellent IT services for
                </h1>
                <h1 style="top:455px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:72px; font-family:Exo; color:#ffffff; text-transform:none; background-color:transparent; background-repeat:no-repeat; cursor:auto; width:1000px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    your success
                </h1>
                <div style="top:595px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:24px; width:1000px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group justify-content-center">
                        <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:352px; top:674px; width:120px; height:120px; line-height:120px;"
                    class="ls-l ls-play-btn ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetxin:-100; durationin:1500; delayin:1000; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i
                            class="fas fa-play"></i></a>
                </div>
                <ls-layer
                    style="font-size:24px; color:#ffffff; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; background-color:transparent; cursor:auto; left:502px; top:705px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:100; durationin:1500; delayin:1100; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetxout:100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    Watch Our Story
                </ls-layer>
                <div style="font-size:16px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; left:502px; top:740px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:100; durationin:1500; delayin:1300; bgcolorin:transparent; colorin:transparent; offsetxout:100; durationout:1500; easingout:easeOutQuint;">
                    Subscribe Now</div>
                <p style="text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; top:310px; left:50%; width:1000px; font-size:40px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    SUCCESS YOUR BUSINESS</p>
                <h1 style="top:404px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:110px; color:#ffffff; font-family:Exo; width:1200px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Excellent IT services for
                </h1>
                <h1 style="top:511px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:110px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto; width:1200px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    your success
                </h1>
                <div style="top:713px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:24px; width:1000px; height:28px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group justify-content-center">
                        <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:50%; top:145px; width:120px; height:120px; line-height:120px;"
                    class="ls-l ls-play-btn ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetxin:-100; durationin:1500; delayin:1000; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i
                            class="fas fa-play"></i></a>
                </div>
                <h1 style="top:132px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:140px; color:#ffffff; font-family:Exo; width:1800px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Excellent IT services for
                </h1>
                <h1 style="top:305px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:140px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto; width:1800px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    your success
                </h1>
                <div style="top:599px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:24px; width:1000px; height:28px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group justify-content-center">
                        <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Slide 2-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:out; kenburnsscale:1.1;">
                <img width="1920" height="980" src="{{asset('assets/frontend/img/hero/hero-2-2.jpg')}}" class="ls-bg" alt="image" />
                <img width="664" height="522" src="{{asset('assets/frontend/img/hero/hero-shape-2-2.png')}}"
                    class="ls-l ls-hide-phone ls-img-layer d-hd-none" alt="image"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; top:463px; left:-6px;"
                    data-ls="offsetxin:left; offsetyin:bottom; durationin:1500; delayin:1400; easingin:easeOutQuint; offsetxout:left; offsetyout:bottom;">
                <div style="-webkit-text-stroke: 1px rgba(255,255,255,0.10); font-size:300px; text-align:center; font-style:normal; text-decoration:none; text-transform:uppercase; font-weight:600; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; width:1700px; left:50%; top:290px; color:rgba(255, 255, 255, 0.05);"
                    class="ls-l ls-text-layer"
                    data-ls="durationin:1500; delayin:1000; parallax:true; parallaxlevel:8; parallaxaxis:x;">Solution
                </div>
                <p style="font-size:20px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; top:315px; left:50%; width:1000px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    CONVERY YOU BRAND ESSENCE</p>
                <h1 style="top:370px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:72px; color:#ffffff; font-family:Exo; width:1000px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Take Service from Expert
                </h1>
                <h1 style="top:455px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:72px; font-family:Exo; color:#ffffff; text-transform:none; background-color:transparent; background-repeat:no-repeat; cursor:auto; width:1000px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    IT Professinal
                </h1>
                <div style="top:595px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:24px; width:1000px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group justify-content-center">
                        <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:352px; top:674px; width:120px; height:120px; line-height:120px;"
                    class="ls-l ls-play-btn ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetxin:-100; durationin:1500; delayin:1000; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i
                            class="fas fa-play"></i></a>
                </div>
                <ls-layer
                    style="font-size:24px; color:#ffffff; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; background-color:transparent; cursor:auto; left:502px; top:705px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:100; durationin:1500; delayin:1100; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetxout:100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    Watch Our Story
                </ls-layer>
                <div style="font-size:16px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; left:502px; top:740px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:100; durationin:1500; delayin:1300; bgcolorin:transparent; colorin:transparent; offsetxout:100; durationout:1500; easingout:easeOutQuint;">
                    Subscribe Now</div>
                <p style="text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; top:310px; left:50%; width:1000px; font-size:40px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    CONVERY YOU BRAND ESSENCE</p>
                <h1 style="top:404px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:110px; color:#ffffff; font-family:Exo; width:1200px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Take Service from Expert
                </h1>
                <h1 style="top:511px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:110px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto; width:1200px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    IT Professinal
                </h1>
                <div style="top:713px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:24px; width:1000px; height:28px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group justify-content-center">
                        <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:50%; top:145px; width:120px; height:120px; line-height:120px;"
                    class="ls-l ls-play-btn ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetxin:-100; durationin:1500; delayin:1000; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i
                            class="fas fa-play"></i></a>
                </div>
                <h1 style="top:132px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:140px; color:#ffffff; font-family:Exo; width:1800px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Take Service from Expert
                </h1>
                <h1 style="top:305px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:140px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto; width:1800px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    IT Professinal
                </h1>
                <div style="top:599px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:24px; width:1000px; height:28px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group justify-content-center">
                        <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Slide 3-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                <img width="1920" height="980" src="{{asset('assets/frontend/img/hero/hero-2-3.jpg')}}" class="ls-bg" alt="image" />
                <img width="664" height="522" src="{{asset('assets/frontend/img/hero/hero-shape-2-2.png')}}"
                    class="ls-l ls-hide-phone ls-img-layer d-hd-none" alt="image"
                    style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; top:463px; left:-6px;"
                    data-ls="offsetxin:left; offsetyin:bottom; durationin:1500; delayin:1400; easingin:easeOutQuint; offsetxout:left; offsetyout:bottom;">
                <div style="-webkit-text-stroke: 1px rgba(255,255,255,0.10); font-size:300px; text-align:center; font-style:normal; text-decoration:none; text-transform:uppercase; font-weight:600; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; width:1700px; left:50%; top:290px; color:rgba(255, 255, 255, 0.05);"
                    class="ls-l ls-text-layer"
                    data-ls="durationin:1500; delayin:1000; parallax:true; parallaxlevel:8; parallaxaxis:x;">Solution
                </div>
                <p style="font-size:20px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; top:315px; left:50%; width:1000px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    DEDICATED SUPPORT TEAM</p>
                <h1 style="top:370px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:72px; color:#ffffff; font-family:Exo; width:1000px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Take Free Consultaion
                </h1>
                <h1 style="top:455px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:72px; font-family:Exo; color:#ffffff; text-transform:none; background-color:transparent; background-repeat:no-repeat; cursor:auto; width:1000px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    For Your Brand
                </h1>
                <div style="top:595px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:24px; width:1000px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group justify-content-center">
                        <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:352px; top:674px; width:120px; height:120px; line-height:120px;"
                    class="ls-l ls-play-btn ls-hide-tablet ls-hide-phone ls-html-layer"
                    data-ls="offsetxin:-100; durationin:1500; delayin:1000; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i
                            class="fas fa-play"></i></a>
                </div>
                <ls-layer
                    style="font-size:24px; color:#ffffff; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; background-color:transparent; cursor:auto; left:502px; top:705px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:100; durationin:1500; delayin:1100; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetxout:100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    Watch Our Story
                </ls-layer>
                <div style="font-size:16px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; left:502px; top:740px;"
                    class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:100; durationin:1500; delayin:1300; bgcolorin:transparent; colorin:transparent; offsetxout:100; durationout:1500; easingout:easeOutQuint;">
                    Subscribe Now</div>
                <p style="text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; top:310px; left:50%; width:1000px; font-size:40px; z-index:2000;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                    DEDICATED SUPPORT TEAM</p>
                <h1 style="top:404px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:110px; color:#ffffff; font-family:Exo; width:1200px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Take Free Consultaion
                </h1>
                <h1 style="top:511px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:110px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto; width:1200px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    For Your Brand
                </h1>
                <div style="top:713px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:24px; width:1000px; height:28px;"
                    class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group justify-content-center">
                        <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:50%; top:145px; width:120px; height:120px; line-height:120px;"
                    class="ls-l ls-play-btn ls-hide-desktop ls-hide-phone ls-html-layer"
                    data-ls="offsetxin:-100; durationin:1500; delayin:1000; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i
                            class="fas fa-play"></i></a>
                </div>
                <h1 style="top:132px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:140px; color:#ffffff; font-family:Exo; width:1800px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    Take Free Consultaion
                </h1>
                <h1 style="top:305px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:140px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto; width:1800px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                    data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    For Your Brand
                </h1>
                <div style="top:599px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:24px; width:1000px; height:28px;"
                    class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                    data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group justify-content-center">
                        <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Features Area
    ==============================-->
    <section class="feature-wrap1  space-top space-extra-bottom">
        <div class="container wow fadeInUp" data-wow-delay="0.2s">
            <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
                <div class="col-xl-4">
                    <div class="feature-style1">
                        <div class="feature-icon"><img src="{{asset('assets/frontend/img/icon/fe-1-1.png')}}" alt="Features"></div>
                        <h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">Development
                                Services</a></h3>
                        <p class="feature-text">Completely implement via highly efficient process improvements.
                            engage high value before progressive data.</p>
                        <a href="service-details.html" class="vs-btn style3">Read More<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="feature-style1">
                        <div class="feature-icon"><img src="{{asset('assets/frontend/img/icon/fe-1-2.png')}}" alt="Features"></div>
                        <h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">Marketing
                                Services</a></h3>
                        <p class="feature-text">Completely implement via highly efficient process improvements.
                            engage high value before progressive data.</p>
                        <a href="service-details.html" class="vs-btn style3">Read More<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="feature-style1">
                        <div class="feature-icon"><img src="{{asset('assets/frontend/img/icon/fe-1-3.png')}}" alt="Features"></div>
                        <h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">Consulting
                                Services</a></h3>
                        <p class="feature-text">Completely implement via highly efficient process improvements.
                            engage high value before progressive data.</p>
                        <a href="service-details.html" class="vs-btn style3">Read More<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
        <section class=" space">
            <div class="container">
                <div class="row gx-70">
                    <div class="col-lg-6 col-xl-auto mb-50 mb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="img-box8">
                            <div class="img-1"><img src="{{asset('assets/frontend/img/about/ab-9-1.jpg')}}" alt="about1"></div>
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video style5"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl align-self-center wow fadeInUp" data-wow-delay="0.4s">
                        <span class="sec-subtitle2 mb-lg-4 pb-lg-2"><i class="fal fa-arrow-right"></i>Our
                            Solution</span>
                        <h2 class="sec-title3 h1 mb-lg-4 pb-lg-3">Strategy For Every, Business Stage In Your <span
                                class="text-theme">New Journey...</span></h2>
                        <p class="fs-md mb-4 pb-2">Analyzing competing products or services can give you an idea of what
                            already exists in your industry. This can help you find ways to improve your idea. It can
                            also help you target weaknesses in your product or service before you spend time and money
                            creating it. </p>
                        <a href="about.html" class="vs-btn style7">Learn More<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class=" space-top space-extra-bottom" data-bg-src="{{asset('assets/frontend/img/bg/sr-bg-1-1.png')}}">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="title-area">
                            <span class="sec-subtitle">Our Latest Services</span>
                            <h2 class="sec-title h1">What Kind of Services We are Offering</h2>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="0.2s">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-style1">
                            <div class="service-bg" data-bg-src="{{asset('assets/frontend/img/bg/sr-box-bg-1.jpg')}}"></div>
                            <div class="service-icon"><img src="{{asset('assets/frontend/img/icon/sr-icon-1-1.png')}}" alt="Features"></div>
                            <h3 class="service-title h5"><a href="service-details.html">Cloud Services</a></h3>
                            <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products
                                with business models</p>
                            <a href="service-details.html" class="vs-btn style3">Read More<i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-style1">
                            <div class="service-bg" data-bg-src="{{asset('assets/frontend/img/bg/sr-box-bg-1.jpg')}}"></div>
                            <div class="service-icon"><img src="{{asset('assets/frontend/img/icon/sr-icon-1-2.png')}}" alt="Features"></div>
                            <h3 class="service-title h5"><a href="service-details.html">Web Development</a></h3>
                            <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products
                                with business models</p>
                            <a href="service-details.html" class="vs-btn style3">Read More<i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-style1">
                            <div class="service-bg" data-bg-src="{{asset('assets/frontend/img/bg/sr-box-bg-1.jpg')}}"></div>
                            <div class="service-icon"><img src="{{asset('assets/frontend/img/icon/sr-icon-1-3.png')}}" alt="Features"></div>
                            <h3 class="service-title h5"><a href="service-details.html">IT Management</a></h3>
                            <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products
                                with business models</p>
                            <a href="service-details.html" class="vs-btn style3">Read More<i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-style1">
                            <div class="service-bg" data-bg-src="{{asset('assets/frontend/img/bg/sr-box-bg-1.jpg')}}"></div>
                            <div class="service-icon"><img src="{{asset('assets/frontend/img/icon/sr-icon-1-4.png')}}" alt="Features"></div>
                            <h3 class="service-title h5"><a href="service-details.html">Software Services</a></h3>
                            <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products
                                with business models</p>
                            <a href="service-details.html" class="vs-btn style3">Read More<i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-style1">
                            <div class="service-bg" data-bg-src="{{asset('assets/frontend/img/bg/sr-box-bg-1.jpg')}}"></div>
                            <div class="service-icon"><img src="{{asset('assets/frontend/img/icon/sr-icon-1-5.png')}}" alt="Features"></div>
                            <h3 class="service-title h5"><a href="service-details.html">Machine Learning</a></h3>
                            <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products
                                with business models</p>
                            <a href="service-details.html" class="vs-btn style3">Read More<i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-style1">
                            <div class="service-bg" data-bg-src="{{asset('assets/frontend/img/bg/sr-box-bg-1.jpg')}}"></div>
                            <div class="service-icon"><img src="{{asset('assets/frontend/img/icon/sr-icon-1-6.png')}}" alt="Features"></div>
                            <h3 class="service-title h5"><a href="service-details.html">Business Analycis</a></h3>
                            <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products
                                with business models</p>
                            <a href="service-details.html" class="vs-btn style3">Read More<i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       {{-- Team Area --}}

        <section class=" space">
            <div class="container  wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6">
                        <div class="title-area">
                            <span class="sec-subtitle">Great Team Members</span>
                            <h2 class="sec-title3 h1">We Have Expert Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                    <div class="col-xl-4">
                        <div class="team-style2">
                            <div class="team-img">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <a href="team-details.html"><img src="{{asset('assets/frontend/img/team/t-2-1.jpg')}}" alt="image"></a>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title h5"><a class="text-inherit" href="team-details.html">Grayson
                                        Gabriel</a></h3>
                                <p class="team-degi">Cheif Expert</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="team-style2">
                            <div class="team-img">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <a href="team-details.html"><img src="{{asset('assets/frontend/img/team/t-2-2.jpg')}}" alt="image"></a>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title h5"><a class="text-inherit" href="team-details.html">Samuel Thomas</a>
                                </h3>
                                <p class="team-degi">Cheif Expert</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="team-style2">
                            <div class="team-img">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <a href="team-details.html"><img src="{{asset('assets/frontend/img/team/t-2-3.jpg')}}" alt="image"></a>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title h5"><a class="text-inherit" href="team-details.html">William Lucas</a>
                                </h3>
                                <p class="team-degi">Cheif Expert</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="team-style2">
                            <div class="team-img">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <a href="team-details.html"><img src="{{asset('assets/frontend/img/team/t-2-4.jpg')}}" alt="image"></a>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title h5"><a class="text-inherit" href="team-details.html">Daniel
                                        Matthew</a></h3>
                                <p class="team-degi">Cheif Expert</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Brand Section --}}

        <div class=" space" data-bg-src="{{asset('assets/frontend/img/bg/brand-bg-2-1.jpg')}}">
            <div class="container">
                <div class="row vs-carousel text-center" data-slide-show="5" data-md-slide-show="3" data-sm-slide-show="2"
                    data-xs-slide-show="2">
                    <div class="col-auto"><img src="{{asset('assets/frontend/img/brand/br-1-1.png')}}" alt="Brand"></div>
                    <div class="col-auto"><img src="{{asset('assets/frontend/img/brand/br-1-2.png')}}" alt="Brand"></div>
                    <div class="col-auto"><img src="{{asset('assets/frontend/img/brand/br-1-3.png')}}" alt="Brand"></div>
                    <div class="col-auto"><img src="{{asset('assets/frontend/img/brand/br-1-4.png')}}" alt="Brand"></div>
                    <div class="col-auto"><img src="{{asset('assets/frontend/img/brand/br-1-5.png')}}" alt="Brand"></div>
                    <div class="col-auto"><img src="{{asset('assets/frontend/img/brand/br-1-6.png')}}" alt="Brand"></div>
                </div>
            </div>
        </div>
@endsection
