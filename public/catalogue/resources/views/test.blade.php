<!DOCTYPE HTML>

<head>

    <title>Free Movies Store Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../../public/css/index.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../../public/css/slider.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="../../public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="../../public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../public/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <script type="text/javascript" src="../../public/js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="../../public/js/move-top.js"></script>
    <script type="text/javascript" src="../../public/js/easing.js"></script>
    <script type="text/javascript" src="../../public/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $('#slider').nivoSlider();
        });
    </script>
</head>

<body>
    <div class="header" style="padding-top: 0px;">
        <div class="headertop_desc">
            <div class="wrap">
                <div class="nav_list">
                    <ul>
                        <div class="logo">
                            <a href="/"><img src="../../public/images/logo.png" alt="" /></a>
                        </div>
                    </ul>

                </div>
                <div class="w3_search">
                    @include('partials.search')
                </div>
                <div class="account_desc">
                    <ul>
                        <li ><a a href="{{ route('login')}}" data-toggle="modal" data-target="#singInPage"style=" padding:0 10px;">Login</a></li>
                        <li class="texte">
                            <a href="{{ route('register')}}" id="regist" class="text-right " data-toggle="modal"
                                data-target="#loginModal" style=" color:#000 "onmouseover="this.style.color='#FF8D1B';" onmouseout="this.style.color='#000';"
                                >Register</a></li>




                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="wrap">

            <div class="header_bottom">
            <div class="header_bottom_left">
                    <div class="categories">
                        <ul>
                            <h2>Menu</h2>

                            <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0"
                                 ><strong> Categories</strong></p>

                            <li><a href="#">Home</a></li>
                            <li><a href="#">TVShows</a></li>
                            <li><a href="#">Movie</a></li>
                            <li><a href="#">Anime</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Kids</a></li>
                        </ul>
                      
                    </div>
                </div>
                <div class="header_bottom_right">
                    <!------ Slider ------------>
                    <div class="slider">
                        <div class="slider-wrapper theme-default">
                            <div id="slider" class="nivoSlider">
                                <img src="../../public/images/1.jpg" data-thumb="images/1.jpg" alt="" />
                                <img src="../../public/images/2.jpg" data-thumb="images/2.jpg" alt="" />
                                <img src="../../public/images/3.jpg" data-thumb="images/3.jpg" alt="" />
                                <img src="../../public/images/4.jpg" data-thumb="images/4.jpg" alt="" />
                                <img src="../../public/images/5.jpg" data-thumb="images/5.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <!------End Slider ------------>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>





    <!------------End Header ------------>





    <div class="main">
        <div class="wrap">  
                <div class="content">
                    <div class="content_top">
                          <div class="heading">
                        <h3>New Releases</h3>
                           </div>
                     </div>
                    <div class="section group">

                        @foreach($lastFilm as $newFilm )
                        
                    <div class='grid_1_of_5 images_1_of_5'>
                         <a href="{{url('info/'.$newFilm->id)}}"><img src='{{$newFilm->image}}' alt='' /></a>
                         <h2><a href=""> {{$newFilm->title}}</a></h2>
                    <div class='price-details'> 
                    <div class="price-number">
                                    <p><span class="rupees">
                                            <a href="#" class="like"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        </span></p>
                                </div>
                                <div class="add-cart">
                                    <h4> <a href="#" class="like"> <i class="fa fa-plus" aria-hidden="true"></i></a>
                                    </h4>
                                </div>   
                     <div class='clear'></div>
                      </div>
                       </div>
                      @endforeach 
                    </div>
                </div>

            <div class="content">
                <div class="content_top">
                    <div class="heading">
                        <h3>TOP 10</h3>
                    </div>
                </div>
                <div class="section group">

                 @foreach($TopFilm as $TFilm )
 <div class='grid_1_of_5 images_1_of_5'>
 <a href="{{url('info/'.$TFilm->id)}}"><img src='{{$TFilm->image}}' alt='' /></a>
 <h2><a href=""> {{$TFilm->title}}</a></h2>
         <div class='price-details'>
         <div class="price-number">
                                    <p><span class="rupees">
                                            <a href="#" class="like"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        </span></p>
                                </div>
                                <div class="add-cart">
                                    <h4> <a href="#" class="like"> <i class="fa fa-plus" aria-hidden="true"></i></a>
                                    </h4>
                                </div>    
              <div class='clear'></div>
         </div>
 </div>

                    @endforeach 
                </div>
            </div>


            <div class="content">
                <div class="content_top">
                    <div class="heading">
                        <h3>TOP 10</h3>
                    </div>
                </div>
                <div class="section group">

                 @foreach($CommingFilm as $CFilm )
 <div class='grid_1_of_5 images_1_of_5'>
 <a href="{{url('info/'.$CFilm->id)}}"><img src='{{$CFilm->image}}' alt='' /></a>
 <h2><a href=""> {{$CFilm->title}}</a></h2>
         <div class='price-details'>  
         <div class="price-number">
                                    <p><span class="rupees">
                                            <a href="#" class="like"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        </span></p>
                                </div>
                                <div class="add-cart">
                                    <h4> <a href="#" class="like"> <i class="fa fa-plus" aria-hidden="true"></i></a>
                                    </h4>
                                </div>  
              <div class='clear'></div>
         </div>
 </div>

                    @endforeach 
                </div>
            </div>




        </div>
    </div>

 









    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="  row w3ls_footer_grid">
                <div class="col-sm-6 w3ls_footer_grid_left">
                    <div class="w3ls_footer_grid_left1">
                        <h2>Subscribe to us</h2>
                        <div class="w3ls_footer_grid_left1_pos">
                            <form action="#" method="post">
                                <input type="email" name="email" placeholder="Your email..." required="">
                                <input type="submit" value="Send">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 w3ls_footer_grid_right">
                    <div class="logo2">
                        <a href="index.html"><img src="../../public/images/logo.png" alt="" /></a>
                    </div>

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-5 w3ls_footer_grid1_left">
                <p>&copy; 2016 One Movies. All rights reserved MStore Movies.
                </p>
            </div>
            <div class="col-md-7 w3ls_footer_grid1_right" style="padding-bottom: 40px;">
                <ul>
                    <li>
                        <a href="genres.html">Movies</a>
                    </li>
                    <li>
                        <a href="faq.html">FAQ</a>
                    </li>
                    <li>
                        <a href="horror.html">Action</a>
                    </li>
                    <li>
                        <a href="genres.html">Adventure</a>
                    </li>
                    <li>
                        <a href="comedy.html">Comedy</a>
                    </li>
                    <li>
                        <a href="icons.html">Icons</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //footer -->


    <!--modal script-->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
            });
        });
    </script>
    <script>

        $(document).ready(function () {
            $(".like").click(function () {
                $(this).toggleClass("heart");
            });


        });

    </script>
    <script>

        $(document).ready(function () {
            $("#register-link").click(function () {
                $("#loginModal").modal('show');
            });


        });

    </script>
</body>

</html>