<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
   
<link href="../../public/css/profil.css" rel="stylesheet">
<link href="../../public/css/home.css" rel="stylesheet">
<link href="../../../public/css/profil.css" rel="stylesheet">
<link href="../../../public/css/home.css" rel="stylesheet">

</head>

<body>
    <div class="header" style="padding-top: 0px;">
         <div class="headertop_desc">
             <div class="wrap" style="height: 78px;">
                 <div class="nav_list">
                     <ul>
                         <div class="logo">
                             <a href=""><img src="../../public/images/logo.png" alt="" /></a>
                         </div>
                     </ul>

                 </div>

                

                 
    
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div class="wrapper">
    <div class="left">
    <h4>{{$user[0]->name}}</h4>

        <img src="../../public/assets/img/{{$user[0]->profile_photo_path}}" alt="user" width="100">
        
         
            <div class="form-group">
            <form action="{{ url('/user/edit')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}             
                              <div class="form-group">
                            <div class="custom-file">
                                <input name="image" type="file" class="custom-file-input">
                                <label class="custom-file-label" style='margin-left:0px'>Choose ...</label>
                                <div>
                            </div>

                               <div class="modal-footer">

                               <input type="submit" value=" Update">
                                </div>

                         </div>
</form>
    </div>
</div>
  
                </div>
                

 <div class="right">
        <div class="info">
            <h3>Informations</h3>
            <div class="info_data">
            <form action="user/update" method='POST'>
            {{ csrf_field() }}  
             <div class="form-group">
                   <label for="nom">Name</label>
                   <input type="text" class="form-control" id="name"  name="name" value='{{$user[0]->name}}'>
             </div>
             <div class="form-group">
                   <label for="email">Email:</label>
                   <input type="email" class="form-control" id="email" placeholder="" name="email" value='{{$user[0]->email}}'>
             </div>
   
    <input type="submit" value=" Update">
  </form>
             
            </div>
        </div>
    </div>
</div>
 
</body>


</html>