@include('partials.template2')
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
