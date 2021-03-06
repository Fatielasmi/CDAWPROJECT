<!DOCTYPE html>
<html>
<head>
	<title>Mstore</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../public/css/test.css">
<link href="../../public/css/movies.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
         integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <!-- //font-awesome icons -->
     <!-- js -->

<script type="text/javascript" src="../../public/js/move-top.js"></script>
<script type="text/javascript" src="../../public/js/easing.js"></script>
<script type="text/javascript" src="../../public/js/jquery.slidey.js"></script>
<script type="text/javascript" src="../../public/js/jquery.nivo.slider.js"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script type="text/javascript">
    @include('partials.template')
<nav class="navbar navbar-inverse">
   
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" >
       <li ><a href="#" style ="color : #fb8b1b ">..</a></li> 
        <li ><a href="acceuilCon.html">Home</a></li>
        <li  id="course" class="dropdown" ><a  href="#">Genres<span class="caret"></span></a>
        <ul class="dropdown-menu" style = "width : 200 px" >
          <li><a href="#" style = "color: #000">Comedie</a></li>
          <li><a href="#" style = "color: #000">Action</a></li>
          <li><a href="#" style = "color: #000">Romance</a></li>
          <li><a href="#" style = "color: #000">Drama</a></li>
          <li><a href="#" style = "color: #000">Horror</a></li>
          <li><a href="#" style = "color: #000">Animes</a></li>
          
        
          </li>
        </ul>
      </li>
        <li><a href="movies.html">Movies </a></li>
        <li><a href="music.html">Music</a></li>
        <li><a href="kids.html">Kids</a></li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="wrap">
    <div class="content">
        
        <div class="content_top">

            <div class="heading">

                <h3>TV SHOWS</h3>
                
            </div>
        </div>
        <div class="section group">

@foreach($movies1 as $movie )

<div class='grid_1_of_5 images_1_of_5'>
 <a href="{{url('info/'.$movie->id)}}"><img src='{{$movie->image}}' alt='' /></a>
<div style='width: 150px; height: 38px;'>
 <h2><a href=""> {{$movie->title}}</a></h2>
</div>
<div class='price-details'> 
<div class="price-number">
            <p><span class="rupees">
                    <a href="{{url('favoris/'.$movie->id)}}" class="like" ><i class="fa fa-heart" aria-hidden="true"></i></a>
                </span></p>
        </div>
        
        <div class="price-number" style='margin-left: 40px'>
            <p><span class="rupees">
                    <a href="{{url('watchlist/'.$movie->id)}}" class="like" ><i class="fas fa-eye-slash" aria-hidden="true"></i></a>
                </span></p>
        </div>
        <div class="add-cart">
            
            <h4> <a href="{{url('playlist/'.$movie->id)}}" class="like"> <i class="fa fa-plus" aria-hidden="true"></i></a>
            </h4>
        </div>   
<div class='clear'></div>
</div>
</div>
@endforeach 
</div>
       
<div class="section group">

@foreach($movies2 as $movie )
<div class='grid_1_of_5 images_1_of_5'>
<a href="{{url('info/'.$movie->id)}}"><img src='{{$movie->image}}' alt='' /></a>
<div style='width: 150px; height: 38px;'>
<h2><a href=""> {{$movie->title}}</a></h2>
</div>
<div class='price-details'>
<div class="price-number">
                   <p><span class="rupees">
                           <a href="{{url('favoris/'.$movie->id)}}" class="like"><i class="fa fa-heart" aria-hidden="true"></i></a>
                       </span></p>
               </div>
               <div class="price-number" style='margin-left: 40px'>
                   <p><span class="rupees">
                           <a href="{{url('watchlist/'.$movie->id)}}" class="like" ><i class="fas fa-eye-slash" aria-hidden="true"></i></a>
                       </span></p>
               </div>
               <div class="add-cart">
                   <h4> <a href="{{url('playlist/'.$movie->id)}}" class="like"> <i class="fa fa-plus" aria-hidden="true"></i></a>
                   </h4>
               </div>    
<div class='clear'></div>
</div>
</div>

   @endforeach 
</div>
<div class="section group">

@foreach($movies3 as $movie )

<div class='grid_1_of_5 images_1_of_5'>
 <a href="{{url('info/'.$movie->id)}}"><img src='{{$movie->image}}' alt='' /></a>
<div style='width: 150px; height: 38px;'>
 <h2><a href=""> {{$movie->title}}</a></h2>
</div>
<div class='price-details'> 
<div class="price-number">
            <p><span class="rupees">
                    <a href="{{url('favoris/'.$movie->id)}}" class="like" ><i class="fa fa-heart" aria-hidden="true"></i></a>
                </span></p>
        </div>
        
        <div class="price-number" style='margin-left: 40px'>
            <p><span class="rupees">
                    <a href="{{url('watchlist/'.$movie->id)}}" class="like" ><i class="fas fa-eye-slash" aria-hidden="true"></i></a>
                </span></p>
        </div>
        <div class="add-cart">
            
            <h4> <a href="{{url('playlist/'.$movie->id)}}" class="like"> <i class="fa fa-plus" aria-hidden="true"></i></a>
            </h4>
        </div>   
<div class='clear'></div>
</div>
</div>
@endforeach 
</div>
<div class="section group">

@foreach($movies4 as $movie )

<div class='grid_1_of_5 images_1_of_5'>
 <a href="{{url('info/'.$movie->id)}}"><img src='{{$movie->image}}' alt='' /></a>
<div style='width: 150px; height: 38px;'>
 <h2><a href=""> {{$movie->title}}</a></h2>
</div>
<div class='price-details'> 
<div class="price-number">
            <p><span class="rupees">
                    <a href="{{url('favoris/'.$movie->id)}}" class="like" ><i class="fa fa-heart" aria-hidden="true"></i></a>
                </span></p>
        </div>
        
        <div class="price-number" style='margin-left: 40px'>
            <p><span class="rupees">
                    <a href="{{url('watchlist/'.$movie->id)}}" class="like" ><i class="fas fa-eye-slash" aria-hidden="true"></i></a>
                </span></p>
        </div>
        <div class="add-cart">
            
            <h4> <a href="{{url('playlist/'.$movie->id)}}" class="like"> <i class="fa fa-plus" aria-hidden="true"></i></a>
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
</div>
</div>

<!-- footer -->
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