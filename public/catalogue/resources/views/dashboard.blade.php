
@include('partials.template')
            <div class="wrap">

                <div class="header_bottom">
                    <div class="header_bottom_left">
                        <div class="categories">
                            <ul>
                                <h3>Menu</h3>

                                <p class="cat text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0"
                                    ><strong> Categories</strong>
                                </p>

                                <li><a href="../index.php/dashboard">Home</a></li>
                                <li><a href="../index.php/TVShows">TVShows</a></li>
                                <li><a href="../index.php/movies">Movies</a></li>
                                <li><a href="../index.php/mangas">Mangas</a></li>
                                <li><a href="../index.php/music">Music</a></li>
                                <li><a href="../index.php/kids">Kids</a></li>
                            </ul>
                            <ul>
                                
                                <p class="special text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0"
                                    ><strong>Special For You
                                    </strong>
                                </p>
                                <li><a href="../index.php/playlist">PlayList</a></li>
                                <li><a href="../index.php/watchlist">WatchList</a></li>
                                <li><a href="../index.php/favoris">Favorites</a></li>
                            

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
                        <div style='width: 200px; height: 38px;'>
                         <h2><a href=""> {{$newFilm->title}}</a></h2>
    </div>
                    <div class='price-details'> 
                    <div class="price-number">
                                    <p><span class="rupees">
                                            <a href="{{url('favoris/'.$newFilm->id)}}" class="like" ><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        </span></p>
                                </div>
                                
                                <div class="price-number" style='margin-left: 40px'>
                                    <p><span class="rupees">
                                            <a href="{{url('watchlist/'.$newFilm->id)}}" class="like" ><i class="fas fa-eye-slash" aria-hidden="true"></i></a>
                                        </span></p>
                                </div>
                                <div class="add-cart">
                                    
                                    <h4> <a href="{{url('playlist/'.$newFilm->id)}}" class="like"> <i class="fa fa-plus" aria-hidden="true"></i></a>
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
 <div style='width: 200px; height: 38px;'>
 <h2><a href=""> {{$TFilm->title}}</a></h2>
    </div>
         <div class='price-details'>
         <div class="price-number">
                                    <p><span class="rupees">
                                            <a href="{{url('favoris/'.$TFilm->id)}}" class="like"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        </span></p>
                                </div>
                                <div class="price-number" style='margin-left: 40px'>
                                    <p><span class="rupees">
                                            <a href="{{url('watchlist/'.$TFilm->id)}}" class="like" ><i class="fas fa-eye-slash" aria-hidden="true"></i></a>
                                        </span></p>
                                </div>
                                <div class="add-cart">
                                    <h4> <a href="{{url('playlist/'.$TFilm->id)}}" class="like"> <i class="fa fa-plus" aria-hidden="true"></i></a>
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
                        <h3>Comming Soon</h3>
                    </div>
                </div>
                <div class="section group">

                 @foreach($CommingFilm as $CFilm )
 <div class='grid_1_of_5 images_1_of_5'>

 <a href="{{url('info/'.$CFilm->id)}}"><img src='{{$CFilm->image}}' alt='' /></a>
 <div style='width: 200px; height: 38px;'>
 <h2><a href=""> {{$CFilm->title}}</a></h2>
    </div>
         <div class='price-details'>  
         <div class="price-number">
                                    <p><span class="rupees">
                                            <a href="{{url('favoris/'.$CFilm->id)}}" class="like"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        </span></p>
                                </div>
                                <div class="price-number" style='margin-left: 40px'>
                                    <p><span class="rupees">
                                            <a href="{{url('watchlist/'.$CFilm->id)}}" class="like" ><i class="fas fa-eye-slash" aria-hidden="true"></i></a>
                                        </span></p>
                                </div>
                                <div class="add-cart">
                                    <h4> <a href="{{url('playlist/'.$CFilm->id)}}" class="like"> <i class="fa fa-plus" aria-hidden="true"></i></a>
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

@include('partials.footer')


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
        <script>
            var dd_main = document.querySelector(".dd_main");

            dd_main.addEventListener("click", function () {
                this.classList.toggle("active");
            })
        </script>
</body>

</html>



