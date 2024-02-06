
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="css/boot.css">
    <link rel="stylesheet" href="css/UI.css">
</head>

<body>
     <!-- top header -->
    <div class="container top-header">
        <img src="images/basket-cart.png" alt="logo header" width="30px">
        <div class="search-box d-none d-lg-flex">
            <div class="input-group md-form form-sm form-1 pl-0">
                <!-- <input class="form-control my-0 py-1" type="text" style="font-size: 14px;"
                    placeholder="Search Products..." aria-label="Search"> -->
                <input class="form-control mr-sm-2" type="search" placeholder="Search Products..." aria-label="Search">
                <div class="input-group-prepend" style="padding-bottom: 2px;" >
                    <span style="background-color: black; border-radius: 8px;" class="input-group-text purple lighten-3"
                        id="basic-text1"><svg style="color: #fff;" width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                            <path fill-rule="evenodd"
                                d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        </svg></span>
                </div>
            </div>
        </div>

        <div class="instagram-icon">
            <nav class="navbar navbar-expand-lg" style="width: 100%; direction: ltr;">
                <div style="margin-left: -16px; margin-right: -22px;">
                    <div class="container">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a style="color:#333; padding-left: 10px; margin-top: -50px;" class="nav-link" href="#"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="color: #fff">
                                    <svg width="0.8em" height="0.8em" viewBox="0 0 16 16" class="bi bi-caret-down-fill"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                    Farnoosh Gh                                
                                </a>
                                <div class="dropdown-menu myaccont-dropdown dropdown-menu-right text-center"
                                    aria-labelledby="navbarDropdown" style="margin-right: -40px;"><br>
                                    <span>Your inventory : <span style="color: #6fc341;">$10.00 </span></span>
                                    <hr>
                                    <a class="dropmenu" href="#" style="margin-top: -20px;">
                                        <svg style="color: #6fc341; margin-left: 2px;" width="0.4em" height="0.4em"
                                            viewBox="0 0 16 16" class="bi bi-circle-fill" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" />
                                        </svg>
                                        مشاهده ی حساب کاربری</a>
                                    <a class="dropmenu" href="#">
                                        <svg style="color: #6fc341; margin-left: 2px;" width="0.4em" height="0.4em"
                                            viewBox="0 0 16 16" class="bi bi-circle-fill" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" />
                                        </svg>
                                        تراکنش ها</a>
                                    <a class="dropmenu" href="#">
                                        <svg style="color: #6fc341; margin-left: 2px;" width="0.4em" height="0.4em"
                                            viewBox="0 0 16 16" class="bi bi-circle-fill" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" />
                                        </svg>
                                        مشاهده ی سفارشات</a>
                                    <a class="dropmenu" href="#">
                                        <svg style="color: #6fc341; margin-left: 2px;" width="0.4em" height="0.4em"
                                            viewBox="0 0 16 16" class="bi bi-circle-fill" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" />
                                        </svg>
                                        فراموشی رمز عبور</a>
                                    <a class="dropmenu" href="#">
                                        <svg style="color: #6fc341; margin-left: 2px;" width="0.4em" height="0.4em"
                                            viewBox="0 0 16 16" class="bi bi-circle-fill" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" />
                                        </svg>
                                        کیف پول من</a>
                                    <a class="dropmenu" href="#">
                                        <svg style="color: #6fc341; margin-left: 2px;" width="0.4em" height="0.4em"
                                            viewBox="0 0 16 16" class="bi bi-circle-fill" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="8" cy="8" r="8" />
                                        </svg>
                                        ویراش اطلاعات حساب</a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>


    <br>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav-menu" style="width: 100%;">
        <button style="margin-bottom: 20px;" class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent"
             style=" margin-left: -16px; margin-right: -22px;">
                <div class="container" > 
                    <ul class="navbar-nav ">
                        <li class="nav-item d-block d-lg-none">
                            <input type="search" width="100%" placeholder="جستجو..." class="serchbox-mobile">
                        </li>
                        <li class="nav-item active" style="padding-right: 1em; padding-left: 1em;">
                            <a class="nav-link btn-hover" href="#">خانه<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn-hover" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-right: 1em;">
                            فروشگاه ما
                            </a>
                            <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="navbarDropdown">
                                <a class="dropmenu" href="#">کالکشن زنانه</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropmenu" href="#">لباس</a>
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropmenu" href="#">کفش</a>
                            </div>
                        </li>  
                        <li class="nav-item" style="padding-right: 1em;">
                            <a class="nav-link btn-hover" href="#">مراکز فروش</a>
                        </li>
                        <li class="nav-item" style="padding-right: 1em;">
                            <a class="nav-link btn-hover" href="#">درباره ما</a>
                        </li>
                    </ul>
                    <!-- <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form> -->
                </div>    
            </div>

    </nav>
     

<br>
  <!-- image countent -->
  <div id="image-count">
        <div class="container">
            <div class="caption-site">
                <h1 class="d-none d-lg-block" style="text-align: center; font-weight:bolder; font-size:6em;">New Collections</h1>
                <h1 class="d-block d-lg-none" style="text-align: center; font-weight:bolder; font-size:3em;">New Collections</h1>
                <!-- <p style="text-align: justify;"></p> -->
                <img src="images/hand.png" class="caption-back d-none d-lg-flex" alt="">
                <!-- <img src="https://roocket.ir/img/mydeveloper.svg" width="200px" class="caption-back2 d-none d-lg-flex"
                    alt=""> -->
            </div>
        </div>
    </div>

<br>

 <!-- posts website -->

    <div class="container">
        <div>
            <p class="hero-header">New Products</p>
            <hr style="border-top: 3px solid rgba(0, 0, 0, 0.1); margin-top: -18px;">
            <a href="" class="btn btn-dark moredore"
                style="float: left; margin-top: -40px; color: #fff; font-size: 12px;">View More</a>
        </div>
        <hr style="border-top: 3px solid rgba(0, 0, 0, 0.1); margin-top: -19px; margin-bottom: -0;">

        <div class="row" style="margin-right: 0; margin-left: 0; width: 100%;">
            <div class="col-12 col-md-6 col-lg-4 post-item">
                <a href="">
                    <div class="image-item">
                        <img src="images/black-shirt.jpg" width="100%" alt="">
                    </div>

                    <div class="caption-item">
                        <div class="title-item align-pas">
                            <a href=""><span>T-shirt - Dark</span></a>
                        </div>

                        <div class="cap-item align-pas">
                            <p class="align-pas">Men T-shirt - Black</p>
                        </div>

                        <div class="like-item">
                            <span class="like-item2">15
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </span>
                        
                            <div class="align-pas" style="padding-left: 10px; font-size: 14px;">
                                <a><span>$75.00 - %40 Off</span></a>
                            </div>
                            <span class="shop-item">
                            $45.00
                            </span>
                           
                        </div>
                    </div>

                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 post-item">
                <a href="">
                    <div class="image-item">
                        <img src="images/gray-hoodie.jpg" width="100%" alt="">
                    </div>

                    <div class="caption-item">
                        <div class="title-item align-pas">
                            <a href=""><span>Hoodie - Light </span></a>
                        </div>

                        <div class="cap-item">
                            <p class="align-pas">Women Hoodie - Light grey</p>
                        </div>

                        <div class="like-item">
                            <span class="like-item2">5
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </span>

                            <span class="shop-item">
                                $120.00
                            </span>
                        </div>
                    </div>

                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4 post-item">
                <a href="">
                    <div class="image-item">
                        <img src="images/white-shirt.jpg" width="100%" alt="">
                    </div>

                    <div class="caption-item">
                        <div class="title-item align-pas">
                            <a href=""><span>T-shirt - Light</span></a>
                        </div>

                        <div class="cap-item">
                            <p class="align-pas">Both Men & Women - White</p>
                        </div>

                        <div class="like-item">
                            <span class="like-item2">20
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </span>

                            <span class="shop-item">
                                $60.00
                            </span>
                        </div>
                    </div>

                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 post-item">
                <a href="">
                    <div class="image-item">
                        <img src="images/blue-shirt.jpg" width="100%" alt="">
                    </div>

                    <div class="caption-item">
                        <div class="title-item align-pas">
                            <a href=""><span>T-shirt - Blue</span></a>
                        </div>

                        <div class="cap-item align-pas">
                            <p class="align-pas">Men T-shirt - Blue</p>
                        </div>

                        <div class="like-item">
                            <span class="like-item2">15
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </span>
                    
                            <span class="shop-item">
                            $50.00
                            </span>
                           
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4 post-item">
                <a href="">
                    <div class="image-item">
                        <img src="images/hoodie-back.jpg" width="100%" alt="">
                    </div>

                    <div class="caption-item">
                        <div class="title-item align-pas">
                            <a href=""><span>Hoodie - Dark</span></a>
                        </div>

                        <div class="cap-item align-pas">
                            <p class="align-pas">Men Hoodie - Black</p>
                        </div>

                        <div class="like-item">
                            <span class="like-item2">15
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </span>
                    
                            <span class="shop-item">
                            $120.00
                            </span>
                           
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 post-item">
                <a href="">
                    <div class="image-item">
                        <img src="images/white-hoodie.jpg" width="100%" alt="">
                    </div>

                    <div class="caption-item">
                        <div class="title-item align-pas">
                            <a href=""><span>Hoodie - Light</span></a>
                        </div>

                        <div class="cap-item align-pas">
                            <p class="align-pas">Women Hoodie - White</p>
                        </div>

                        <div class="like-item">
                            <span class="like-item2">15
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </span>
                    
                            <span class="shop-item">
                            $150.00
                            </span>
                           
                        </div>
                    </div>
                </a>
            </div>





        




        </div>
    </div>
    




    <br><br><br>
    <footer>
        <div class="footer-back">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4"><br>
                        <h6>درباره راکت</h6>
                        <hr class="header-caption-footer">
                        <p class="caption-footer">راکت یکی از پرتلاش‌ترین و بروزترین وبسایت های آموزشی در سطح ایران است
                            که همیشه تلاش کرده تا
                            بتواند جدیدترین و بروزترین مقالات و دوره‌های آموزشی را در اختیار علاقه‌مندان ایرانی قرار
                            دهد. تبدیل کردن برنامه نویسان ایرانی به بهترین برنامه نویسان جهان هدف ماست</p>
                    </div>
                    <div class="col-12 col-lg-1"></div>
                    <div class="col-12 col-lg-2"><br>
                        <h6>بخش های سایت</h6>
                        <hr class="header-caption-footer">
                        <a style="color: #fff; display:block;margin-top: 10px;" href="">قوانین و مقررات</a>
                        <a style="color: #fff; display:block;margin-top: 10px;"  href="">تبلیغات</a>
                        <a style=" color: #fff; display:block;margin-top: 10px;" href="">درباره راکت</a>
                        <a style="color: #fff; display:block;margin-top: 10px;"  href="">ارتباط با ما</a>
                    </div>
                    <div class=" col-12 col-lg-1">
                    </div>
                    <div class="col-12 col-lg-3"><br>
                        <h6>ارتباط با ما</h6>
                        <hr class="header-caption-footer">
                        <p class="caption-footer">شما میتوانید با استفاده از یکی از راه‌های زیر با ما ارتباط برقرار کنید
                        </p>

                        
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>    
                        <span style="font-size: 10px;">ایمیل : toplearn@gmail.com</span>
                    </div>
                    <div>
                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-telephone-forward-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.471 17.471 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969zM12.646.646a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z" />
                                </svg> 
                            <span style="font-size: 10px;">تلفن تماس : 09137427959</span>
                    </div><br>   
                    </div>
                </div><br class="d-none d-lg-flex">
            </div>
        </div>
    </footer>
    <footer class="footer2">
        <div class="container">
            <p>تمامی حقوق مادی و معنوی این سایت متعلق به تاپ لرن می باشد و هرگونه کپی برداری غیرقانونی محسوب خواهد شد</p>
        </div>

    </footer>

    <img src="" alt="" class="fixed-bottom d-none d-lg-block">
    

</body>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/javascript.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>