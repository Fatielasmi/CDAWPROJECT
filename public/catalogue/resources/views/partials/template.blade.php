
<!DOCTYPE HTML>

<head>

    <title>Free Movies Store Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../../public/css/home.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../../public/css/slider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../../../public/js/model.js" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

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
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $('#slider').nivoSlider();
        });
    </script>
    <script src="js/bootstrap.min.js"></script>
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
        <script>
            var dd_main = document.querySelector(".dd_main");

            dd_main.addEventListener("click", function () {
                this.classList.toggle("active");
            })
        </script>
</head>

<body>
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
                                                    <img class="rounded-circle" src="../../public/assets/img/{{$user[0]->profile_photo_path}}" alt="profile_img">

                                                    <div class="dd_menu">
                                                        <div class="dd_left">
                                                            <ul>
                                                                
                                                                <li><i class="fas fa-user"></i></li>
                                                                <li><i class="fas fa-heart" style="margin-top: 14px;"></i></li>
                                                                <li><i class="fas fa-history" style="margin-top: 16px;"></i></li>
                                                                <li><i class="fas fa-music" style="margin-top: 16px;"></i></li>
                                                                <li><i class="fas fa-sign-out-alt" style="margin-top: 15px;"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="dd_right categories" style="padding-top: 8px; padding-bottom: 8px;">
                                                            <ul>
                                                                <li><a href="../index.php/profil">Profile</a></li>
                                                                <li><a href="../index.php/favoris">Favorites</a></li>
                                                                <li><a href="../index.php/watchlist">Watchlist</a></li>
                                                                <li><a href="../index.php/playlist">Playlist</a></li>
                                                                <li><a href="../index.php/deconnexion">Log out</a></li>
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
    

   


