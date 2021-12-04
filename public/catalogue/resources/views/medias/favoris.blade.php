<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../../../public/css/home.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    

</head>
<body>
<h1> Favoris</h1>
<div class="header" style="padding-top: 0px;">
        <div class="headertop_desc">
            <div class="wrap" style="height: 78px;">
                <div class="nav_list">
                    <ul>
                        <div class="logo">
                            <a href="index.html"><img src="../../public/images/logo.png" alt="" /></a>
                        </div>
                    </ul>

                </div>
                <div class="w3_search">
                    @include('partials.search')
                </div>
                <div class="account_desc">
                    <ul>
                        <div class="nav_right">
                            <ul>
                                <div class="wrapper">
                                    <div class="navbar">

                                        <div class="nav_right">
                                            <ul>
                                                <li class="nr_li dd_main">
                                                    <img src="https://i.imgur.com/2QKIaJ5.png" alt="profile_img">

                                                    <div class="dd_menu">
                                                        <div class="dd_left">
                                                            <ul>
                                                                
                                                                <li><i class="fas fa-user"></i></li>
                                                                <li><i class="fas fa-heart" style="margin-top: 14px;"></i></li>
                                                                <li><i class="fas fa-history" style="margin-top: 16px;"></i></li>
                                                                <li><i class="fas fa-cog" style="margin-top: 16px;"></i></li>
                                                                <li><i class="fas fa-sign-out-alt" style="margin-top: 15px;"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="dd_right categories" style="padding-top: 8px; padding-bottom: 8px;">
                                                            <ul>
                                                                <li><a href="profil.html">Profile</a></li>
                                                                <li><a href="#">Favorites</a></li>
                                                                <li><a href="#">Watchlist</a></li>
                                                                <li><a href="#">Settings</a></li>
                                                                <li><a href="#">Log out</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </ul>
                        </div>
                        <div class="clear"></div>
                </div>
            </div>
</div>
<div class="main">
            <div class="wrap">
                <div class="content">
<div class="section group">
@foreach($medias as $media)
                    <div class="grid_1_of_5 images_1_of_5">
                   
                        <a href="preview.html"><img src="{{$media->image}}" alt="" /></a>
                        <h2><a href="preview.html">{{$media->title}}</a></h2>
                         <div class="price-details">
                         <div class="price-number">
                                    <p><span class="rupees">
                                            <a href="#" class="like"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        </span></p>
                                </div>
                                <div class="add-cart">
                                    <h4> <a href="#" class="like"> <i class="fa fa-plus" aria-hidden="true"></i></a>
                                    </h4>
                                </div>
                            <div class="clear"></div>
                        </div>
                  
                    </div>
                    @endforeach
                </div>
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

                </body>
